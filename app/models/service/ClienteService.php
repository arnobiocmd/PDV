<?php

namespace app\models\service;

use app\models\dao\ClienteDao;
use app\models\validacao\ClienteValidacao;
use app\util\UtilService;

class ClienteService{
    public static function salvar($cliente,$campo,$tabela){
        $validacao = ClienteValidacao::salvar($cliente);
        return Service::salvar($cliente,$campo,$validacao->listaErros(),$tabela);
    }

   

}