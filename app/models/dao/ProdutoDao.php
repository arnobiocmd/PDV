<?php

namespace app\models\dao;

use app\core\Model;

class ProdutoDao extends Model{
    public function lista(){
        $sql = "SELECT * FROM produto INNER JOIN unidade ON produto.id_unidade = unidade.id_unidade";
        return $this->select($this->db,$sql);
    }

    public function getProduto($id_produto){
        $sql = "SELECT * FROM produto INNER JOIN unidade ON produto.id_unidade = unidade.id_unidade
         AND id_produto = $id_produto";
         return $this->select($this->db,$sql,false);
    }

   /* public function listaProdutoCfop(){
        $sql = "SELECT * from produto INNER JOIN cfop on produto.cfop = cfop.codigo_cfop";
        return $this->select($this->db,$sql);
    }*/
}