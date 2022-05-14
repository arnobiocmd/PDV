<?php
namespace app\models\service;

use app\models\dao\PerfilUsuarioDao;
use app\models\validacao\PerfilUsuarioValidacao;

class PerfilUsuarioService{
    public static function listaPorUsuario($id_usuario){
        $dao = new PerfilUsuarioDao();
        return $dao->listaPorUsuario($id_usuario);
    }

    public static function salvar($perfil_usuario,$campo,$tabela){
        $validacao = PerfilUsuarioValidacao::salvar($perfil_usuario);
        return Service::salvar($perfil_usuario,$campo,$validacao->listaErros(),$tabela);
    }
}