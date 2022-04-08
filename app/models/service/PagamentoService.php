<?php

namespace app\models\service;

use app\models\dao\PagamentoDao;

class PagamentoService{
    public static function listaPorVenda($id_venda){
        $dao = new PagamentoDao();
        return $dao->listaPorVenda($id_venda);
        
    }
}