<?php

namespace app\models\service;

use app\models\dao\PagamentoDao;

class PagamentoService{
    public static function listaPorVenda($id_venda){
        $dao = new PagamentoDao();
        return $dao->listaPorVenda($id_venda);
        
    }

    public static function somaPorCaixaFormaPagamento($id_caixa,$id_forma_pagamento){
        $dao = new PagamentoDao();
        return $dao->somaPorCaixaFormaPagamento($id_caixa,$id_forma_pagamento);
    }
}