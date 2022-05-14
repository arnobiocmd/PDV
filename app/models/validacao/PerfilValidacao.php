<?php

namespace app\models\validacao;

use app\core\Validacao;

class PerfilValidacao{
    public static function salvar($perfil){
        $validacao = new Validacao();

        $validacao->setData("perfil",$perfil->perfil);
        $validacao->setData("descricao",$perfil->descricao);

        $validacao->getData("perfil")->isVazio();
        $validacao->getData("descricao")->isVazio();


        return $validacao;
    }
}