<?php
namespace app\models\service;

use app\models\dao\PagamentoDao;
use stdClass;

class VendaService{
    public static function atualizaVenda($id_venda){
        $soma = Service::getSoma("item_venda","subtotal","id_venda",$id_venda);
        Service::editar(["total"=>$soma,"id_venda"=>$id_venda],"id_venda","venda");
    }

    public static function somarPagamento($id_venda){
        $retorno = new \stdClass();
        $venda = Service::get("venda","id_venda",$id_venda);
        $retorno->total =  $venda->total;
        $retorno->desconto = $venda->desconto;
        $retorno->total_receber = $retorno->total - $retorno->desconto;
        $retorno->total_recebido = Service::getSoma("pagamento","valor","id_venda",$id_venda);
        $retorno->total_restante = $retorno->total_receber -  $retorno->total_recebido;

        return $retorno;

    }

    public static function finalizar($id_venda){
        $itens = Service::get("item_venda","id_venda",$id_venda,true);
        $venda = Service::get("venda","id_venda",$id_venda);
        foreach ($itens as $item) {
            $mov = new \stdClass();
            $mov->id_tipo_movimento     = 7;
            $mov->id_produto            = $item->id_produto;
            $mov->id_venda              = $id_venda;
            $mov->entrada_saida	        = "S";
            $mov->data_movimento        = $venda->data_venda;
            $mov->qtde_movimento        = $item->qtde;
            $mov->valor_movimento	    = $item->valor;
            $mov->subtotal_movimento    = $item->subtotal;
            $mov->descricao             = "Saida Venda de Produto ".$id_venda;
            $mov->id_usuario_movimento  = $venda->id_usuario_venda;
            MovimentoService::inserir($mov);
        }
        Service::editar(["finalizada"=>"S","id_venda"=>$id_venda],"id_venda","venda");
    }
}