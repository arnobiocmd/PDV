<?php

    namespace app\models\validacao;

use app\core\Validacao;

class ProdutoValidacao{
        public static function salvar($produto){
            $validacao = new Validacao();

            $validacao->setData("id_produto",$produto->id_produto);
            $validacao->setData("produto",$produto->produto);
            $validacao->setData("preco",$produto->preco);
            $validacao->setData("cfop",$produto->cfop);
            $validacao->setData("ncm",$produto->ncm);


            $validacao->getData("id_unidade")->isVazio();
            $validacao->getData("produto")->isVazio();
            $validacao->getData("preco")->isVazio();
            $validacao->getData("cfop")->isVazio();
            $validacao->getData("ncm")->isVazio();

            return $validacao;
        }
    }