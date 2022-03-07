<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\ProdutoService;
use app\models\service\Service;

class ProdutoController extends Controller{
    private $tabela = "produto";
    private $campo = "id_produto";
    public function index(){
       // $dados['lista'] = Service::lista($this->tabela);
        $dados['lista'] = ProdutoService::lista();
        $dados['view'] = "Produto/Index";
        $this->load("template",$dados);
    }

    public function create(){
        $dados['unidades'] = Service::lista('unidade');
        $dados['cfop'] = Service::GET('cfop','eh_nfce','S',true);
        
        $dados['produto'] = Flash::getForm();
        $dados['view'] = "Produto/Create";
        $this->load("template",$dados);
    }

    public function salvar(){
        $produto = new \stdClass();
        
        $produto->id_produto = ($_POST['id_produto']) ? $_POST['id_produto'] : null;
        $produto->produto = $_POST['produto'];
        $produto->id_unidade = $_POST['id_unidade'];
        $produto->preco = $_POST['preco'];
        $produto->cfop = $_POST['cfop'];
        $produto->gtin = $_POST['gtin'];
        $produto->ncm = $_POST['ncm'];
        $produto->cest = $_POST['cest'];

        Flash::setForm($produto);
        if(ProdutoService::salvar($produto,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."produto");
        }else{
            if(!$produto->id_produto){
                $this->redirect(URL_BASE."produto/create");
            }else{
                $this->redirect(URL_BASE."produto/edit/".$produto->id_produto);
            }
        }



        
    }

    public function edit($id){
        $produto = ProdutoService::getProduto($id);
        if(!$produto){
            $this->redirect(URL_BASE."produto");
        }
       // $dados['produ'] = ProdutoService::listaProdutoCfop();
        $dados['unidades'] = Service::lista('unidade');
        $dados['cfop'] = Service::GET('cfop','eh_nfce','S',true);
        $dados['produto'] = $produto;
        $dados['view'] = "Produto/Create";
        $this->load("template",$dados);

    }

    public function excluir($id){
        $produto = Service::excluir($this->tabela,$this->campo,$id);
        if($produto){
            $this->redirect(URL_BASE."produto");
        }
        
    }

    public function produtoPorCodigo($id){
        $produto = ProdutoService::getProduto($id);
        echo json_encode($produto);
    }
}