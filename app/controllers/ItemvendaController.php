<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ItensVendaService;
use app\models\service\Service;
use app\models\service\VendaService;
use stdClass;

class ItemvendaController extends Controller{
    private $tabela = "item_venda";
    private $campo = "id_item_venda";
    public function inserir(){
        $item = new \stdClass();
        $item->id_item_venda = null;
        $item->id_venda         = $_POST['id_venda'];
        $item->id_produto       = $_POST['id_produto'];
        $item->qtde             = $_POST['qtde'];
        $item->valor            = $_POST['preco'];
        $item->subtotal         =  $item->qtde *  $item->valor;

        
        if(ItensVendaService::salvar($item,$this->campo,$this->tabela)){
            $erro = -1;
            $msg = Flash::getMsg();
        }else{
            $erro = 1;
            $msg = Flash::getErro();
        }

        VendaService::atualizaVenda($item->id_venda);
        
        $itens = ItensVendaService::listaPorVenda($item->id_venda);

        


        echo json_encode(["erro"=>$erro,"msg"=>$msg,"lista"=>$itens]);

        
    }
}