<?php

namespace app\models\service;

use app\core\Flash;
use app\models\dao\AclDao;
use app\models\dao\Dao;

class AclService{

    public static function logar($campo, $valor, $senha, $tabela){
        //$dao = new Dao();
        Flash::limpaForm();
        Flash::limpaMsg();
        $resultado = Service::get($tabela, $campo, $valor);
        if($resultado){
            if($resultado->senha == $senha){
                $perfis = self::listaPorPerfilUsuario($resultado->id_usuario);
                $permissoes = self::listaPermissaoPorUsuario($resultado->id_usuario);
                $_SESSION[SESSION_LOGIN] = (object) array(
                    "usuario" => $resultado,
                    "perfis"  => $perfis,
                    "permissoes" => $permissoes
                );
                return true;
            }
        }
        Flash::setMsg("Login ou senha não encontrados",-1);
        unset($_SESSION[SESSION_LOGIN]);
        return false;
    }

    public static function LogarEVerificarSeTemPermissao($usuario,$senha,$permissao){
        $login = self::logarComUsuarioSenha($usuario,$senha);
        if($login){
            $permissao = self::podeDireto($permissao,$login->id_usuario);
            if(!$permissao){
                Flash::setMsg("Sem permissão para está operação", -1);  
                return 0;
            }
        }else{
            Flash::setMsg("Usuario ou senha não encontrados", -1);
            return 0;
        }

        return $login->id_usuario;

    }

    public static function podeDireto($permissao,$id_usuario){
        $permissoes = self::listaPermissaoPorUsuario($id_usuario);
        if(in_array($permissao,$permissoes)){
            return true;
        }
        return false;
    }

    public static function logarComUsuarioSenha($usuario,$senha){
        $dao = new AclDao();
        return $dao->logarComUsuarioSenha($usuario,$senha);
    }

    public static function temPermissao($permissao){
        if(!in_array($permissao,$_SESSION[SESSION_LOGIN]->permissoes)){
            header("Location:" .URL_BASE."sempermissao");
        }
    }

    public static function temPermissaoDireto($permissao,$id_usuario){
        $permissoes = self::listaPermissaoPorUsuario($id_usuario);
        if(!in_array($permissao,$permissoes)){
            header("Location:" .URL_BASE."sempermissao");
        }
    }

    public static function pode($permissao){
        if(in_array($permissao,$_SESSION[SESSION_LOGIN]->permissoes)){
            return true;
           
        }else{
            return false;
            
        }
        
    }



    public static function listaPorPerfilUsuario($id_usuario){
        $dao = new AclDao();
        $resultado = array();
        $perfis = $dao->listaPorPerfilUsuario($id_usuario);
         

        foreach($perfis as $perfil){
            $resultado[] = $perfil->perfil;
        }
       return $resultado;
    }
    public static function listaPermissaoPorUsuario($id_usuario){
        $dao = new AclDao();
        $resultado = array();
        $perfis = $dao->listaPorPerfilUsuario($id_usuario);
        foreach($perfis as $perfil){
            $permissoes = $dao->listaPermissaoesPorPerfil($perfil->id_perfil);
            foreach($permissoes as $permissao){
                if(!in_array($permissao->permissao,$resultado)){
                    $resultado[] = $permissao->permissao;
                }
            }
        }

        return $resultado;
    }
   

}