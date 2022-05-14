<?php

    namespace app\models\validacao;

use app\core\Validacao;

class UsuarioValidacao{
        public static function salvar($usuario){
            $validacao = new Validacao();

           
            
            $validacao->setData("usuario",$usuario->usuario);
            $validacao->setData("senha",$usuario->senha);
            $validacao->setData("cargo",$usuario->cargo);
            $validacao->setData("id_funcionario",$usuario->id_funcionario);
            

     
            $validacao->getData("usuario")->isVazio();
            $validacao->getData("senha")->isVazio();
            

            return $validacao;
        }
    }