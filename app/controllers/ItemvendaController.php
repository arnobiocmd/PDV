<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\ItensVendaService;
use app\models\service\Service;
use stdClass;

class ItemvendaController extends Controller{
    public function inserir(){
        $item = new \stdClass();
        $item->id_venda         = $_POST['id_venda'];
        $item->id_produto       = $_POST['id_produto'];
        $item->qtde             = $_POST['qtde'];
        $item->valor            = $_POST['preco'];
        $item->subtotal         =  $item->qtde *  $item->valor;

       
        Service::inserir(objToArray($item),'item_venda');
        $itens = ItensVendaService::listaPorVenda($item->id_venda);

        echo json_encode($itens);

        
    }
}