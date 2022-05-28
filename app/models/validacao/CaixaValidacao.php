<?php

namespace app\models\validacao;

use app\core\Validacao;

class CaixaValidacao{
    public static function salvar($caixa){
        $validacao = new Validacao();

        $validacao->setData('data_abertura',$caixa->data_abertura);
        $validacao->setData('hora_abertura',$caixa->hora_abertura);
        $validacao->setData('valor_abertura',$caixa->valor_abertura);
        $validacao->setData('total_em_caixa',$caixa->total_em_caixa);
        $validacao->setData('id_gerente_abriu',$caixa->id_gerente_abriu);
        $validacao->setData('id_caixa_numero',$caixa->id_caixa_numero);
        $validacao->setData('id_usuario_abriu',$caixa->id_usuario_abriu);
        $validacao->setData('status',$caixa->status);
        


        $validacao->getData('data_abertura')->isVazio();
        $validacao->getData('hora_abertura')->isVazio();
        $validacao->getData('valor_abertura')->isVazio();
        $validacao->getData('total_em_caixa')->isVazio();
        $validacao->getData('id_caixa_numero')->isVazio();
        $validacao->getData('id_usuario_abriu')->isVazio();
        $validacao->getData('status')->isVazio();

        return $validacao;


    }
    
}