<?php

namespace app\models\service;

use app\models\dao\FuncionarioDao;
use app\models\validacao\FuncionarioValidacao;
use app\util\UtilService;

class FuncionarioService{
    public static function salvar($funcionario,$campo,$tabela){
        $validacao = FuncionarioValidacao::salvar($funcionario);
        return Service::salvar($funcionario,$campo,$validacao->listaErros(),$tabela);
    }

   

}