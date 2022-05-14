<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\PerfilService;
use app\models\service\PerfilUsuarioService;
use app\models\service\Service;
use stdClass;

class PerfilusuarioController extends Controller{
    private $tabela = "perfil_usuario";
    private $campo = "id_perfil_usuario";
   
    public function salvar(){
        $usuario =  new stdClass();

        $usuario->id_perfil_usuario = ($_POST["id_perfil_usuario"]) ? $_POST["id_perfil_usuario"] : null;
        $usuario->id_perfil = $_POST["id_perfil"];
        $usuario->id_usuario = $_POST["id_usuario"];

        PerfilUsuarioService::salvar($usuario,$this->campo,$this->tabela);
        $this->redirect(URL_BASE . "usuario/perfil/".$usuario->id_usuario);
    }


   /* public function edit($id){
         Service::get($this->tabela,$this->campo,$id);
          
                $this->redirect(URL_BASE . "usuario/perfil");
            
        
    }*/

    public function excluir($id){
        Service::excluir($this->tabela,$this->campo,$id);
            $this->redirect(URL_BASE."usuario/perfil");
        }
    
}