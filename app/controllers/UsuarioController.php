<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\PerfilUsuarioService;
use app\models\service\UsuarioService;
use app\models\service\Service;
use app\util\UtilService;

class UsuarioController extends Controller{
    public function __construct(){
        $this->usuario = UtilService::getUsuario();
        
        if(!$this->usuario){
           $this->redirect(URL_BASE."login");
           
        } 
     }
    private $tabela = "usuario";
    private $campo = "id_usuario";
    public function index(){
        $dados['lista'] = Service::lista($this->tabela);
        $dados['view'] = "Usuario/Index";
        $this->load("template",$dados);
    }

    public function create(){
        $dados['funcionarios'] = Service::lista('funcionario');
        $dados['usuario'] = Flash::getForm();
        $dados['view'] = "Usuario/Create";
        $this->load("template",$dados);
    }

    public function salvar(){
        $usuario = new \stdClass();
        $usuario->id_usuario                = ($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
        $usuario->usuario                   = $_POST['usuario'];
        $usuario->senha                     = $_POST['senha'];
        //$usuario->cargo                     = $_POST['cargo'];
        $usuario->id_funcionario            = $_POST['id_funcionario'];
        

        Flash::setForm($usuario);
        if(UsuarioService::salvar($usuario,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."usuario");
        }else{
            if(!$usuario->id_usuario){
                $this->redirect(URL_BASE."usuario/create");
            }else{
                $this->redirect(URL_BASE."usuario/edit/".$usuario->id_usuario);
            }
        }



        
    }

    public function edit($id){
        $usuario = Service::get($this->tabela,$this->campo,$id);
        if(!$usuario){
            $this->redirect(URL_BASE."usuario");
        }
        $dados['usuario'] = $usuario;
        $dados['view'] = "Usuario/Create";
        $this->load("template",$dados);

    }

    public function excluir($id){
        $usuario = Service::excluir($this->tabela,$this->campo,$id);
        if($usuario){
            $this->redirect(URL_BASE."usuario");
        }
        
    }

    public function perfil($id_usuario){
        $dados["usuario"] = Service::get($this->tabela,$this->campo,$id_usuario);
        $dados["perfis"]= Service::lista("perfil");
        $dados["lista"] = PerfilUsuarioService::listaPorUsuario($id_usuario);
        $dados['view'] = "Usuario/Perfil";
        $this->load("template",$dados);
    }

    

    
}