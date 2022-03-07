<?php

namespace app\models\dao;

use app\core\Model;

class ItensVendaDao extends Model{
    public function listaPorVenda($id_venda){
        $sql = "SELECT * FROM item_venda i, produto p WHERE i.id_produto = p.id_produto AND i.id_venda = $id_venda";
        return $this->select($this->db,$sql);
    }
}