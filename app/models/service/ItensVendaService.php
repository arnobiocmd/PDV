<?php

namespace app\models\service;

use app\models\dao\ItensVendaDao;
use app\models\validacao\ItemVendaValidacao;

class ItensVendaService{
    public static function salvar($item,$campo,$tabela){
        $validacao =  ItemVendaValidacao::salvar($item);
        return Service::salvar($item,$campo,$validacao->listaErros(),$tabela);
    }
    public static function listaPorVenda($id_venda){
        $dao = new ItensVendaDao();
        return $dao->listaPorVenda($id_venda);
    }
}