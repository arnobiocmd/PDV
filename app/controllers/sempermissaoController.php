<?php

namespace app\controllers;

use app\core\Controller;

class sempermissaoController extends Controller{
    public function index(){
        $dados["view"] = "Permissao/SemPermissao";
        $this->load("template",$dados);
    }
}