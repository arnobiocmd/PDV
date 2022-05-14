<?php
namespace app\models\dao;

use app\core\Model;

class PerfilUsuarioDao extends Model{
  /*  public function listaPorUsuario($id_usuario){
        $sql = "SELECT * FROM perfil_usuario pu, perfil p WHERE
         pu.id_perfil = p.id_perfil AND pu.id_usuario = $id_usuario";
         return $this->select($this->db,$sql);
    }*/

    //evitando ataque SQLinject
    public function listaPorUsuario($id_usuario){
        $sql = "SELECT * FROM perfil_usuario pu, perfil p WHERE
        pu.id_perfil = p.id_perfil AND pu.id_usuario = :id_usuario";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_usuario",$id_usuario);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}