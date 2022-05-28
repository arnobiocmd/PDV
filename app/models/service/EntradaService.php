<?php

namespace app\models\service;

use app\core\Controller;
use app\models\dao\EntradaDao;
use app\models\validacao\EntradaValidacao;
use app\util\UtilService;
use stdClass;

class EntradaService{

    public static function salvar($entrada,$campo,$tabela){
        $validacao = EntradaValidacao::salvar($entrada);
        $id_entrada =  Service::salvar($entrada,$campo,$validacao->listaErros(),$tabela);
        if($id_entrada){
            $mov = new \stdClass();
            $mov->id_tipo_movimento     = 1;
            $mov->id_produto            = $entrada->id_produto;
            $mov->id_entrada_avulsa     = $id_entrada;
            $mov->entrada_saida	        = "E";
            $mov->data_movimento        = $entrada->data_entrada;
            $mov->qtde_movimento        = $entrada->qtde_entrada;
            $mov->valor_movimento	    = $entrada->valor_entrada;
            $mov->subtotal_movimento    = $entrada->subtotal_entrada;
            $mov->descricao             = "Entrada Avulsa ".$id_entrada;
            $mov->id_usuario_movimento  = $entrada->id_usuario_entrada;
            MovimentoService::inserir($mov);
           
        }

        return $id_entrada;
    }

    public static function listaPorData($data){
        $dao = new EntradaDao();
        return $dao->listaPorData($data);
    }


}