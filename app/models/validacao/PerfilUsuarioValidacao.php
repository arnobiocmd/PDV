<?php

namespace app\models\validacao;

use app\core\Validacao;

class PerfilUsuarioValidacao{
    public static function salvar($perfil_Usuario){
        $validacao = new Validacao();

        $validacao->setData("id_perfil",$perfil_Usuario->id_perfil);
        $validacao->setData("id_usuario",$perfil_Usuario->id_usuario);


        $validacao->getData("id_perfil")->isVazio();
        $validacao->getData("id_usuario")->isVazio();

        return $validacao;

    }
}