<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\PerfilPermissaoService;
use app\models\service\PerfilService;
use app\models\service\Service;
use stdClass;

class PerfilController extends Controller{
    private $tabela =   "perfil";
    private $campo  =   "id_perfil";
    public function index(){
        $dados["lista"] = Service::lista($this->tabela);
        $dados["view"] = "Perfil/Index";
        $this->load("template",$dados);
    }

    public function create(){
        $dados["perfil"] = Flash::getForm();
        $dados["view"] = "Perfil/create";
        $this->load("template",$dados);
    }

    public function salvar(){
        $perfil = new stdClass();

        $perfil->perfil         = $_POST["perfil"];
        $perfil->descricao      = $_POST["descricao"];

        Flash::setForm($perfil);
        if(PerfilService::salvar($perfil,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."perfil");
        }else{
            if(!$perfil->id_perfil){
                $this->redirect(URL_BASE."perfil/create");
            }else{
                $this->redirect(URL_BASE."perfil/edit/".$perfil->id_perfil);
            }
        }

    }

    public function edit($id){
       $perfil =  Service::get($this->tabela,$this->campo,$id);
       if($perfil){
        $dados["perfil"] = $perfil;   
        $dados["view"] = "Perfil/create";
        $this->load("template",$dados);
       }
      
    }

    public function excluir($id){
       $del =  Service::excluir($this->tabela,$this->campo,$id);
       if($del){
           $this->redirect(URL_BASE."perfil ");
       }

    }

    public function permissao($id_perfil){
        $id = $dados["perfil"] = Service::get("perfil","id_perfil",$id_perfil);
        $dados["permissoes"] = Service::lista("permissao");
        $dados["lista"] = PerfilPermissaoService::listaPorPerfil($id_perfil);
        //i($dados["lista"]);
        $dados["view"] = "Perfil/Permissoes";
        $this->load("template",$dados);
    }
}