<?php

namespace app\models\service;

use app\models\dao\CaixaDao;
use app\models\validacao\CaixaValidacao;
use app\util\UtilService;
use stdClass;

class CaixaService{
    public static function salvar($caixa,$campo,$tabela){
        $validacao = CaixaValidacao::salvar($caixa);
        return Service::salvar($caixa,$campo,$validacao->listaErros(),$tabela);
    }

    public static function verificaCaixaPorNumero($id_numero_caixa){
        $dao = new CaixaDao();
        return  $dao->verificaCaixaPorNumero($id_numero_caixa);
    }

    public static function verificaCaixaPorUsuario($id_usuario){
        $dao = new CaixaDao();
        return $dao->verificaCaixaPorUsuario($id_usuario);
    }

    public static function valores($id_caixa){
        $retorno = new \stdClass();

        $caixa                  = Service::get("caixa","id_caixa",$id_caixa);
        $retorno->faturamento     = Service::getSoma("pagamento","valor","id_caixa",$id_caixa);
        $retorno->sangria         = Service::getSoma("sangria","valor","id_caixa",$id_caixa);
        $retorno->suplemento      = Service::getSoma("suplemento","valor","id_caixa",$id_caixa);
        $retorno->troco           = $caixa->valor_abertura;
        $retorno->total           =  $retorno->faturamento -  $retorno->sangria + $retorno->suplemento + $retorno->troco;

        return $retorno;

    }

    public static function listaSomaPorFormaPagamento($id_caixa){
        $formas = Service::lista("forma_pagamento");
        //i($formas);
        foreach ($formas as  $forma) {
            $soma = PagamentoService::somaPorCaixaFormaPagamento($id_caixa,$forma->id_forma_pagamento)->soma;
            $forma->total = ($soma) ? $soma : 0;
        }
        return $formas;
    }
   
    

}