<?php

namespace app\models\service;

use app\core\Controller;
use app\models\dao\SaidaDao;
use app\models\validacao\SaidaValidacao;
use app\util\UtilService;
use stdClass;

class SaidaService{

    public static function salvar($saida,$campo,$tabela){
        $validacao = SaidaValidacao::salvar($saida);
        $id_saida =  Service::salvar($saida,$campo,$validacao->listaErros(),$tabela);
        if($id_saida){
            $mov = new \stdClass();
            $mov->id_tipo_movimento     = 5;
            $mov->id_produto            = $saida->id_produto;
            $mov->id_saida_avulsa     = $id_saida;
            $mov->entrada_saida	        = "S";
            $mov->data_movimento        = $saida->data_saida;
            $mov->qtde_movimento        = $saida->qtde_saida;
            $mov->valor_movimento	    = $saida->valor_saida;
            $mov->subtotal_movimento    = $saida->subtotal_saida;
            $mov->descricao             = "Saida Avulsa ".$id_saida;
            $mov->id_usuario_movimento  = $saida->id_usuario_saida;
            MovimentoService::inserir($mov);
           
        }

        return $id_saida;
    }

    public static function listaPorData($data){
        $dao = new SaidaDao();
        return $dao->listaPorData($data);
    }


}