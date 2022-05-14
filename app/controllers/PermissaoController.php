<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\PermissaoService;
use app\models\service\Service;
use stdClass;

class PermissaoController extends Controller{
    private $tabela =   "permissao";
    private $campo  =   "id_permissao";
    public function index(){
        $dados["lista"] = Service::lista($this->tabela);
        $dados["view"] = "Permissao/Index";
        $this->load("template",$dados);
    }

  
    

 

    

}