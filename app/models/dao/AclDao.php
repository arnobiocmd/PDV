<?php
namespace app\models\dao;

use app\core\Model;

class AclDao extends Model{
    public function listaPorPerfilUsuario($id_usuario){
        $sql = "SELECT * FROM perfil_usuario pp, perfil p 
        WHERE pp.id_perfil = p.id_perfil AND pp.id_usuario = '$id_usuario' ";
        return $this->select($this->db,$sql);
    }

    public function listaPermissaoesPorPerfil($id_perfil){
        $sql = "SELECT p.permissao FROM perfil_permissao pp, permissao p 
        WHERE pp.id_permissao = p.id_permissao AND pp.id_perfil = '$id_perfil' ";
        return $this->select($this->db,$sql);
    }
}