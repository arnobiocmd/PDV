<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\MovimentoService;
use app\models\service\Service;
use stdClass;

class MovimentoController extends Controller{
    public function index(){
        $dados['lista'] = MovimentoService::lista(100);
        $dados['produtos'] = Service::lista("produto");
        $dados["view"] = "Movimento/Index";
        $this->load("template",$dados);
    }

    public function filtro(){
        $filtro = new \stdClass();
        $filtro->id_produto = $_GET["id_produto"];
        $filtro->data1      = $_GET["data1"];
        $filtro->data2      = $_GET["data2"];

       
        $dados['lista'] = MovimentoService::filtro($filtro);
        $dados['produtos'] = Service::lista("produto");
       // $dados["produto"] = MovimentoService::filtro($filtro);
        //i( $dados['lista']);
        $dados["view"] = "Movimento/Index";
        $this->load("template",$dados);

    }
}