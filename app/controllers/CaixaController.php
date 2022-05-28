<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\AclService;
use app\models\service\Service;
use app\models\service\CaixaService;
use app\util\UtilService;
use stdClass;

class CaixaController extends Controller{
    private $tabela = 'caixa';
    private $campo  = 'id_caixa';
    public function __construct(){
        $this->usuario = UtilService::getUsuario();
        //i($this->usuario);
        if(!$this->usuario){
           $this->redirect(URL_BASE."login");
           
        } 
     }
    public function index(){
        $dados['lista'] = Service::lista($this->tabela);
        $dados['view'] = 'Caixa/Index';
        $this->load("template",$dados);
    }

    public function create(){
        AclService::temPermissao("caixa-abertura-view");
        $dados['caixa'] = Flash::getForm();
        $dados["numeros"] = Service::lista("caixa_numero");
        $dados['view'] = 'Caixa/Create';
        $this->load("template",$dados);
    }

    public function salvar(){
        $caixa = new \stdClass();
        $caixa->id_caixa = $_POST['id_caixa'];
        $caixa->caixa = $_POST['caixa'];
        $caixa->abrev = $_POST['abrev'];

        Flash::setForm($caixa);
        if(CaixaService::salvar($caixa,$this->campo,$this->tabela)){
            $this->redirect(URL_BASE."caixa");
        }else{
            if(!$caixa->id_caixa){
                $this->redirect(URL_BASE."caixa/create");
            }else{
                $this->redirect(URL_BASE."caixa/edit/".$caixa->id_caixa);
            }
        }
    }

    public function edit($id){
        $caixa = Service::get($this->tabela,$this->campo,$id);
            $dados['caixa'] = $caixa;
            $dados['view'] = 'Caixa/Create';
            $this->load("template",$dados);
        
        

    }

    public function excluir($id){
        $caixa = Service::excluir($this->tabela,$this->campo,$id);
        if($caixa){
            $this->redirect(URL_BASE."caixa");
        }
    }

    public function fechamento(){
        AclService::temPermissao("caixa-fechamento-view");
        $caixa_aberto = CaixaService::verificaCaixaPorUsuario($this->usuario->usuario->id_usuario);
        if(!$caixa_aberto){
                 Flash::setMsg("Não existe nenhum caixa aberto em nome desse usuario, abra-o primeiramente",-1);
             $this->redirect(URL_BASE."caixa/create");
             exit;
        }

        $dados['caixa'] = $caixa_aberto;
        $dados['valores'] = CaixaService::valores($caixa_aberto->id_caixa);
        $dados["formas"]  =  CaixaService::listaSomaPorFormaPagamento($caixa_aberto->id_caixa);
       // i($dados["formas"]);
        $dados['view'] = 'Caixa/Fechamento';
        $this->load("template",$dados);
    }

    public function fechar(){
        $usuario    = $_POST["usuario"];
        $senha      = $_POST["senha"];
        //verifica se o superior tem permissão para fechar caixa 
        $id_superior = AclService::LogarEVerificarSeTemPermissao($usuario,$senha,"caixa-fechamento-insert");
       if(!$id_superior){
           $this->redirect(URL_BASE."caixa/fechamento");
       } 

       //verificar se o usuario tem um caixa em aberto
       $caixa_aberto = CaixaService::verificaCaixaPorUsuario($this->usuario->usuario->id_usuario);
       if(!$caixa_aberto){
                Flash::setMsg("Não existe nenhum caixa aberto em nome desse usuario, abra-o primeiramente",-1);
            $this->redirect(URL_BASE."caixa/create");
            exit;
       }

       $total_caixa = 0;
       foreach($_POST['total'] as $v){
           $valor = ($v) ? $v : 0;
           $total_caixa += $valor;
       }

       $valores = CaixaService::valores($caixa_aberto->id_caixa);
       $caixa = new \stdClass();
       $caixa->id_caixa                 = $caixa_aberto->id_caixa;
       $caixa->id_gerente_fechou        = $id_superior;
       $caixa->data_fechamento          = hoje();
       $caixa->hora_fechamento          = agora();
       $caixa->valor_fechamento         = $total_caixa; // os valores que foram passados peo usuario
       $caixa->valor_vendido            = $valores->faturamento;
       $caixa->valor_quebra             = $caixa->valor_vendido - $caixa->valor_fechamento;
       $caixa->valor_sangria            = $valores->sangria;
       $caixa->valor_suplemento         = $valores->suplemento;
       $caixa->total_em_caixa           = $valores->total;
       $caixa->id_usuario_fechou        = $this->usuario->usuario->id_usuario;
       $caixa->status                   = "Fechado";

       Service::editar(objToArray($caixa),"id_caixa","caixa");
       
       $this->redirect(URL_BASE."caixa");

    }

    public function abrir(){
        $usuario    = $_POST["usuario"];
        $senha      = $_POST["senha"];
        
        $id_superior = AclService::LogarEVerificarSeTemPermissao($usuario,$senha,"caixa-fazer-abertura");
       if(!$id_superior){
           $this->redirect(URL_BASE."caixa/create");
       }
       $id_caixa_anterior = CaixaService::verificaCaixaPorNumero($_POST["id_caixa_numero"]);
       if($id_caixa_anterior){
            if($id_caixa_anterior->id_usuario_abriu == $this->usuario->usuario->id_usuario){
                Flash::setMsg("Esta caixa já foi aberto por este usuario, feche-o primeiro para poder abrir outro",-1);
            }else{
                Flash::setMsg("Esta caixa já foi aberto por outro usuario",-1);
            }
            $this->redirect(URL_BASE."caixa/create");
            exit;
       }

       $id_caixa_aberto = CaixaService::verificaCaixaPorUsuario($this->usuario->usuario->id_usuario);
       if($id_caixa_aberto){
                Flash::setMsg("Já existe um CAIXA aberto com esse usuario",-1);
            $this->redirect(URL_BASE."caixa/create");
            exit;
       }
       


       
       $abrir_caixa = new \stdClass();
       $abrir_caixa->id_caixa_numero    = $_POST["id_caixa_numero"];
       $abrir_caixa->valor_abertura     = $_POST["valor_abertura"];
       $abrir_caixa->data_abertura      = hoje();
       $abrir_caixa->hora_abertura      = agora();
       $abrir_caixa->id_gerente_abriu   =  $id_superior;
       $abrir_caixa->id_usuario_abriu   =  $this->usuario->usuario->id_usuario;
       $abrir_caixa->total_em_caixa     = $_POST["valor_abertura"];
       $abrir_caixa->status             = "Aberto";

       $retorno = CaixaService::salvar($abrir_caixa,$this->campo,$this->tabela);
       if($retorno){
           $_SESSION["caixa"] = Service::get("caixa","id_caixa",$retorno);
           $this->redirect(URL_BASE."pdv");
       }else{
        $this->redirect(URL_BASE."caixa/create");
       }

       
    }


    public function detalhes(){
        $dados["view"] = "Caixa/Detalhe";
        $this->load("template",$dados); 
    }
}