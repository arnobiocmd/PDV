<?php

namespace app\models\service;

use app\models\dao\ItensVendaDao;

class ItensVendaService{
    public static function listaPorVenda($id_venda){
        $dao = new ItensVendaDao();
        return $dao->listaPorVenda($id_venda);
    }
}