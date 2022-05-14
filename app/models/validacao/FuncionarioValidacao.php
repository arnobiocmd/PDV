<?php

    namespace app\models\validacao;

use app\core\Validacao;

class FuncionarioValidacao{
        public static function salvar($funcionario){
            $validacao = new Validacao();

           
            $validacao->setData("funcionario",$funcionario->funcionario);
            $validacao->setData("cpf",$funcionario->cpf);
            $validacao->setData("fone",$funcionario->fone);
            $validacao->setData("celular",$funcionario->celular);
            $validacao->setData("email",$funcionario->email);
            $validacao->setData("cep",$funcionario->cep);
            $validacao->setData("logradouro",$funcionario->logradouro);
            $validacao->setData("numero",$funcionario->numero);
            $validacao->setData("uf",$funcionario->uf);
            $validacao->setData("cidade",$funcionario->cidade);
            $validacao->setData("complemento",$funcionario->complemento);
            $validacao->setData("bairro	",$funcionario->bairro	);


            $validacao->getData("funcionario")->isVazio();
            $validacao->getData("cpf")->isVazio();
            $validacao->getData("email")->isVazio();
            $validacao->getData("cep")->isVazio();

            return $validacao;
        }
    }