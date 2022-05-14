<?php

namespace app\models\validacao;

use app\core\Validacao;

class PerfilPermissaoValidacao{
    public static function salvar($id_perfil){
        $validacao = new Validacao();

        $validacao->setData("id_perfil",$id_perfil->id_perfil);
        $validacao->setData("id_permissao",$id_perfil->id_permissao);

        $validacao->getData("id_perfil")->isVazio();
        $validacao->getData("id_permissao")->isVazio();


        return $validacao;
    }
}