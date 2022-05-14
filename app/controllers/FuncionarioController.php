<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\FuncionarioService;
use app\models\service\Service;

class FuncionarioController extends Controller{
    private $tabela = "funcionario";
    private $campo = "id_funcionario";
    public function index(){
        $dados['lista'] = Service::lista($this->tabela);
        $dados['view'] = "Funcionario/Index";
        $this->load("template",$dados);
    }

    public function create(){
        $dados['funcionario'] = Flash::getForm();
        $dados['view'] = "Funcionario/Create";
        $this->load("template",$dados);
    }

    public function salvar(){
        $funcionario = new \stdClass();
        $funcionario->id_funcionario    = ($_POST['id_funcionario']) ? $_POST['id_funcionario'] : null;
        $funcionario->funcionario       = $_POST['funcionario'];
        $funcionario->cpf               = $_POST['cpf'];
        $funcionario->fone              = $_POST['fone'];
        $funcionario->celular           = $_POST['celular'];
        $funcionario->email             = $_POST['email'];
        $funcionario->cep               = $_POST['cep'];
        $funcionario->logradouro        = $_POST['logradouro'];
        $funcionario->numero            = $_POST['numero'];
        $funcionario->uf                = $_POST['uf'];
        $funcionario->cidade            = $_POST['cidade'];
        $funcionario->complemento       = $_POST['complemento'];
        $funcionario->bairro            = $_POST['bairro'];

        Flash::setForm($funcionario);
        if(FuncionarioService::salvar($funcionario,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."funcionario");
        }else{
            if(!$funcionario->id_funcionario){
                $this->redirect(URL_BASE."funcionario/create");
            }else{
                $this->redirect(URL_BASE."funcionario/edit/".$funcionario->id_funcionario);
            }
        }



        
    }

    public function edit($id){
        $funcionario = Service::get($this->tabela,$this->campo,$id);
        if(!$funcionario){
            $this->redirect(URL_BASE."funcionario");
        }
        $dados['funcionario'] = $funcionario;
        $dados['view'] = "Funcionario/Create";
        $this->load("template",$dados);

    }

    public function excluir($id){
        $funcionario = Service::excluir($this->tabela,$this->campo,$id);
        if($funcionario){
            $this->redirect(URL_BASE."funcionario");
        }
        
    }

    
}