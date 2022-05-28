<?php

namespace app\models\dao;

use app\core\Model;

class CaixaDao extends Model{
    public function verificaCaixaPorNumero($id_numero_caixa){
        $sql = "SELECT * FROM caixa WHERE id_caixa_numero = $id_numero_caixa AND status ='Aberto' ";
        return  $this->select($this->db,$sql,false);
    }

    public function verificaCaixaPorUsuario($id_usuario){
        $sql = "SELECT * FROM caixa WHERE id_usuario_abriu = '$id_usuario' AND status = 'Aberto'";
        return $this->select($this->db,$sql,false);
    }
}