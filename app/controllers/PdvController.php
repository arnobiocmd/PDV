<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\ItensVendaService;
use app\models\service\Service;

class PdvController extends Controller{
    private $tabela = "venda";
    private $campo  = "id_venda";
    public function index(){
        $dados['view'] = "Pdv/Livre";
        $this->load("template",$dados);
    }

    public function create(){
        $venda = Service::get($this->tabela,"finalizada","N");
            if(!$venda){
                $id_venda = Service::inserir(["data_venda"=>hoje(),"hora_venda"=>agora()],$this->tabela);
                $venda = Service::get($this->tabela,$this->campo,$id_venda);
            }
        $dados['venda'] = $venda;
        $dados['itens'] = ItensVendaService::listaPorVenda($venda->id_venda);
        $dados['view'] = "Pdv/Index";
        $this->load("template",$dados);
    }
}