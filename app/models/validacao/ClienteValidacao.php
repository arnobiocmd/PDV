<?php

    namespace app\models\validacao;

use app\core\Validacao;

class ClienteValidacao{
        public static function salvar($cliente){
            $validacao = new Validacao();

           
            $validacao->setData("nome",$cliente->nome);
            $validacao->setData("cpf",$cliente->cpf);
            $validacao->setData("fone",$cliente->fone);
            $validacao->setData("celular",$cliente->celular);
            $validacao->setData("email",$cliente->email);
            $validacao->setData("cep",$cliente->cep);
            $validacao->setData("logradouro",$cliente->logradouro);
            $validacao->setData("numero",$cliente->numero);
            $validacao->setData("uf",$cliente->uf);
            $validacao->setData("cidade",$cliente->cidade);
            $validacao->setData("complemento",$cliente->complemento);
            $validacao->setData("bairro	",$cliente->bairro	);


            $validacao->getData("cliente")->isVazio();
            $validacao->getData("cpf")->isVazio();
            $validacao->getData("email")->isVazio();
            $validacao->getData("cep")->isVazio();

            return $validacao;
        }
    }