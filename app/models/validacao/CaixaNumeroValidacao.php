<?php

namespace app\models\validacao;

use app\core\Validacao;

class CaixaNumeroValidacao{
    public static function salvar($caixanumero){
        $validacao = new Validacao();

        $validacao->setData('num_caixa',$caixanumero->num_caixa);
        $validacao->setData('descricao',$caixanumero->descricao);


        $validacao->getData('num_caixa')->isVazio();
        $validacao->getData('descricao')->isVazio();

        return $validacao;


    }
    
}