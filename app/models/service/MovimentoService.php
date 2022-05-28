<?php

namespace app\models\service;

use app\models\dao\MovimentoDao;

class MovimentoService{
    public static function inserir($mov){
        $saldo_anterior = self::saldoEstoque($mov->id_produto);
        $qtde = ($mov->entrada_saida == "E") ? $mov->qtde_movimento : - $mov->qtde_movimento;
        $saldo = $saldo_anterior + ($qtde);
        $mov->saldoestoque = $saldo;
        $id = Service::inserir(objToArray($mov),"movimento");
        if($id){
            ProdutoService::atualizarEstoque($mov->id_produto,$qtde);
        }

        return $id;
        
    }

    public static function saldoEstoque($id_produto){
        $dao = new MovimentoDao();
        return $dao->saldoEstoque($id_produto);
    }

    public static function lista($limit = null){
        $dao = new MovimentoDao();
        return $dao->lista($limit = null);
    }

    public static function filtro($filtro){
        $dao = new MovimentoDao();
        return $dao->filtro($filtro);
    }
}