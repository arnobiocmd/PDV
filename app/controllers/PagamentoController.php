<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\PagamentoService;
use app\models\service\Service;
use app\models\service\VendaService;
use stdClass;

class PagamentoController extends Controller{
    private $tabela = "pagamento";
    private $campo = "id_pagamento";
    public function inserir(){
        $item = new \stdClass();
        $item->id_pagamento = null;
        $item->id_forma_pagamento   = $_POST['id_forma_pagamento'];
        $item->id_venda             = $_POST['id_venda'];
        $item->valor                = $_POST['valor'];
        $item->qtde_vezes           = $_POST['qtde_vezes'];
        $desconto                    = $_POST['desconto'];


        if($desconto){
            $venda = Service::get("venda","id_venda",$item->id_venda);
            $total_receber = $venda->total - $desconto;
            Service::editar(["id_venda"=>$item->id_venda,"desconto"=>$desconto,"total_receber"=>$total_receber],"id_venda","venda");

        }


        Service::inserir(objToArray($item),$this->tabela);
        $retorno = VendaService::somarPagamento($item->id_venda);
        echo json_encode(["retorno"=>$retorno,"lista"=>PagamentoService::listaPorVenda($item->id_venda)]);


    }
}