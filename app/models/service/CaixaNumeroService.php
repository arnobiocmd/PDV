<?php

namespace app\models\service;
use app\models\validacao\CaixaNumeroValidacao;

class CaixaNumeroService{
    public static function salvar($caixanumero,$campo,$tabela){
        $validacao = CaixaNumeroValidacao::salvar($caixanumero);
        return Service::salvar($caixanumero,$campo,$validacao->listaErros(),$tabela);
    }
}