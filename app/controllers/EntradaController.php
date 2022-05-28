<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\EntradaService;
use app\models\service\Service;
use app\util\UtilService;

class EntradaController extends Controller{
    private $tabela = "entrada";
    private $campo = "id_entrada";
    public function __construct(){
        $this->usuario = UtilService::getUsuario();
       // i($this->usuario);
        if(!$this->usuario){
           $this->redirect(URL_BASE."login");
           
        } 
     }
    public function index(){
      // $dados['lista'] = Service::lista($this->tabela);
       $dados['lista'] = EntradaService::listaPorData(hoje());
        $dados['view'] = "Entrada/Create";
        $this->load("template",$dados);
    }

    public function inserir(){
        $entrada = new \stdClass();
        $entrada->id_entrada = ($_POST['id_entrada']) ? $_POST['id_entrada'] : null;
        $entrada->id_produto = $_POST['id_produto'];
        $entrada->qtde_entrada = $_POST['qtde'];
        $entrada->valor_entrada = $_POST['preco'];
        $entrada->subtotal_entrada =   $entrada->qtde_entrada *   $entrada->valor_entrada;
        $entrada->data_entrada = hoje();
        $entrada->hora_entrada = agora();
        $entrada->id_usuario_entrada = $this->usuario->usuario->id_usuario;
        

        Flash::setForm($entrada);
        if(EntradaService::salvar($entrada,$this->campo,$this->tabela)){
           $erro = -1;
           $msg = Flash::getMsg();
        }else{
           $erro = 1;
           $msg = Flash::getErro(); 
        }


        $lista = EntradaService::listaPorData(hoje());

        echo json_encode(["erro"=>$erro,"msg"=>$msg,"lista"=>$lista]);
        
    }



    
}