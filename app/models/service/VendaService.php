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
        Service::editar(["finalizada"=>"S","id_venda"=>$id_venda],"id_venda","venda");
    }
}