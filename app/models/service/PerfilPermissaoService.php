<?php

namespace app\models\service;

use app\models\dao\PerfilPermissaoDao;
use app\models\validacao\PerfilPermissaoValidacao;

class PerfilPermissaoService{
    public static function salvar($perfil,$campo,$tabela){
        $validacao = PerfilPermissaoValidacao::salvar($perfil);
        return Service::salvar($perfil,$campo,$validacao->listaErros(),$tabela);
    }

    public static function listaPorPerfil($id_perfil){
        $dao = new PerfilPermissaoDao();
        return $dao->listaPorPerfil($id_perfil);
    }

    
}