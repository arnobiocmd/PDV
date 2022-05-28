<?php

namespace app\models\dao;

use app\core\Model;

class SaidaDao extends Model{
    public function listaPorData($data){
        $sql = "SELECT e.*,p.produto FROM saida e, produto p WHERE e.id_produto = p.id_produto 
        AND data_saida = '$data' ";
        return $this->select($this->db,$sql);
    }
}