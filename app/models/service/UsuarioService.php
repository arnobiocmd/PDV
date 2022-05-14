<?php

namespace app\models\service;

use app\models\dao\UsuarioDao;
use app\models\validacao\UsuarioValidacao;
use app\util\UtilService;

class UsuarioService{
    public static function salvar($usuario,$campo,$tabela){
        $validacao = UsuarioValidacao::salvar($usuario);
        return Service::salvar($usuario,$campo,$validacao->listaErros(),$tabela);
    }

   

}