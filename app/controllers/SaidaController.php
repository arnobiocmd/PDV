<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\SaidaService;
use app\models\service\Service;
use app\util\UtilService;

class SaidaController extends Controller{
    private $tabela = "saida";
    private $campo = "id_saida";
    public function __construct(){
        $this->usuario = UtilService::getUsuario();
       // i($this->usuario);
        if(!$this->usuario){
           $this->redirect(URL_BASE."login");
           
        } 
     }
    public function index(){
      // $dados['lista'] = Service::lista($this->tabela);
       $dados['lista'] = SaidaService::listaPorData(hoje());
        $dados['view'] = "Saida/Create";
        $this->load("template",$dados);
    }

    public function inserir(){
        $saida = new \stdClass();
        $saida->id_saida = ($_POST['id_saida']) ? $_POST['id_saida'] : null;
        $saida->id_produto = $_POST['id_produto'];
        $saida->qtde_saida = $_POST['qtde'];
        $saida->valor_saida = $_POST['preco'];
        $saida->subtotal_saida =   $saida->qtde_saida *   $saida->valor_saida;
        $saida->data_saida = hoje();
        $saida->hora_saida = agora();
        $saida->id_usuario_saida = $this->usuario->usuario->id_usuario;
        

        Flash::setForm($saida);
        if(SaidaService::salvar($saida,$this->campo,$this->tabela)){
           $erro = -1;
           $msg = Flash::getMsg();
        }else{
           $erro = 1;
           $msg = Flash::getErro(); 
        }


        $lista = SaidaService::listaPorData(hoje());

        echo json_encode(["erro"=>$erro,"msg"=>$msg,"lista"=>$lista]);
        
    }



    
}