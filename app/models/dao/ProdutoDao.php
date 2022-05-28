<?php

namespace app\models\dao;

use app\core\Model;

class ProdutoDao extends Model{
    public function lista(){
        $sql = "SELECT * FROM produto INNER JOIN unidade ON produto.id_unidade = unidade.id_unidade";
        return $this->select($this->db,$sql);
    }

    public function estoqueBaixo(){
        $sql = "SELECT * FROM produto INNER JOIN unidade ON produto.id_unidade = unidade.id_unidade 
        AND estoque < estoque_minimo";
        //$sql = "SELECT * FROM produto p, unidade u WHERE p.id_unidade = u.id_unidade AND estoque < estoque_minimo";
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

    public function atualizarEstoque($id_produto,$qtde){
        $sql = "UPDATE produto SET estoque = estoque + ($qtde) WHERE id_produto = $id_produto";
        $this->db->query($sql);
    }
}