<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ClienteService;
use app\models\service\Service;

class ClienteController extends Controller{
    private $tabela = "cliente";
    private $campo = "id_cliente";
    public function index(){
        $dados['lista'] = Service::lista($this->tabela);
        $dados['view'] = "Cliente/Index";
        $this->load("template",$dados);
    }

    public function create(){
        $dados['cliente'] = Flash::getForm();
        $dados['view'] = "Cliente/Create";
        $this->load("template",$dados);
    }

    public function salvar(){
        $cliente = new \stdClass();
        $cliente->id_cliente        = ($_POST['id_cliente']) ? $_POST['id_cliente'] : null;
        $cliente->nome              = $_POST['nome'];
        $cliente->cpf               = $_POST['cpf'];
        $cliente->fone              = $_POST['fone'];
        $cliente->celular           = $_POST['celular'];
        $cliente->email             = $_POST['email'];
        $cliente->cep               = $_POST['cep'];
        $cliente->logradouro        = $_POST['logradouro'];
        $cliente->numero            = $_POST['numero'];
        $cliente->uf                = $_POST['uf'];
        $cliente->cidade            = $_POST['cidade'];
        $cliente->complemento       = $_POST['complemento'];
        $cliente->bairro            = $_POST['bairro'];

        Flash::setForm($cliente);
        if(ClienteService::salvar($cliente,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."cliente");
        }else{
            if(!$cliente->id_cliente){
                $this->redirect(URL_BASE."cliente/create");
            }else{
                $this->redirect(URL_BASE."cliente/edit/".$cliente->id_cliente);
            }
        }



        
    }

    public function edit($id){
        $cliente = Service::get($this->tabela,$this->campo,$id);
        if(!$cliente){
            $this->redirect(URL_BASE."cliente");
        }
        $dados['cliente'] = $cliente;
        $dados['view'] = "Cliente/Create";
        $this->load("template",$dados);

    }

    public function excluir($id){
        $cliente = Service::excluir($this->tabela,$this->campo,$id);
        if($cliente){
            $this->redirect(URL_BASE."cliente");
        }
        
    }

    
}