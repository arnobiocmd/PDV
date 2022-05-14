<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\PerfilService;
use app\models\service\PerfilpermissaoControllerService;
use app\models\service\PerfilPermissaoService;
use app\models\service\Service;
use stdClass;

class PerfilpermissaoController extends Controller{
    private $tabela = "perfil_permissao";
    private $campo = "id_perfil_permissao";
   
    public function salvar(){
        $perfil =  new stdClass();

        $perfil->id_perfil_permissao = ($_POST["id_perfil_permissao"]) ? $_POST["id_perfil_permissao"] : null;
        $perfil->id_perfil = $_POST["id_perfil"];
        $perfil->id_permissao = $_POST["id_permissao"];

        PerfilPermissaoService::salvar($perfil,$this->campo,$this->tabela);
        $this->redirect(URL_BASE . "perfil/permissao/".$perfil->id_perfil);
    }


   /* public function edit($id){
         Service::get($this->tabela,$this->campo,$id);
          
                $this->redirect(URL_BASE . "perfil/perfil");
            
        
    }*/

    public function excluir($id){
        Service::excluir($this->tabela,$this->campo,$id);
            $this->redirect(URL_BASE."perfil/perfil");
        }
    
}