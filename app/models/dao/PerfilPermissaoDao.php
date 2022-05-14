<?php
namespace app\models\dao;

use app\core\Model;

class PerfilPermissaoDao extends Model{
    public function listaPorPerfil($id_perfil){
        $sql = "SELECT * FROM perfil_permissao pp , permissao p 
        WHERE pp.id_permissao = p.id_permissao AND pp.id_perfil = $id_perfil ";
         return $this->select($this->db,$sql);
    }

  
}