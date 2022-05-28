<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\models\service\CaixaNumeroService;
use stdClass;

class CaixanumeroController extends Controller{
    private $tabela = 'caixa_numero';
    private $campo  = 'id_caixa_numero';
    public function index(){
        $dados['lista'] = Service::lista($this->tabela);
        $dados['view'] = 'CaixaNumero/Index';
        $this->load("template",$dados);
    }

    public function create(){
        $dados['caixanumero'] = Flash::getForm();
        $dados['view'] = 'CaixaNumero/Create';
        $this->load("template",$dados);
    }

    public function salvar(){
        $caixanumero = new \stdClass();
        $caixanumero->id_caixa_numero   = $_POST['id_caixa_numero'];
        $caixanumero->num_caixa         = $_POST['num_caixa'];
        $caixanumero->descricao         = $_POST['descricao'];

        Flash::setForm($caixanumero);
        if(CaixanumeroService::salvar($caixanumero,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."caixanumero");
        }else{
            if(!$caixanumero->id_caixanumero){
                $this->redirect(URL_BASE."caixanumero/create");
            }else{
                $this->redirect(URL_BASE."caixanumero/edit/".$caixanumero->id_caixa_numero);
            }
        }
    }

    public function edit($id){
        $caixanumero = Service::get($this->tabela,$this->campo,$id);
            $dados['caixanumero'] = $caixanumero;
            $dados['view'] = 'Caixanumero/Create';
            $this->load("template",$dados);
        
        

    }

    public function excluir($id){
        $caixanumero = Service::excluir($this->tabela,$this->campo,$id);
        if($caixanumero){
            $this->redirect(URL_BASE."caixanumero");
        }
    }
}