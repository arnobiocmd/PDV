<?php

namespace app\models\dao;

use app\core\Model;

class EntradaDao extends Model{
    public function listaPorData($data){
        $sql = "SELECT e.*,p.produto FROM entrada e, produto p WHERE e.id_produto = p.id_produto 
        AND data_entrada = '$data' ";
        return $this->select($this->db,$sql);
    }
}