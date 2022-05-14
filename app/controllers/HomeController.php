<?php
namespace app\controllers;
use app\core\Controller;
use app\models\service\AclService;
use app\util\UtilService;

class HomeController extends Controller{       
   public function __construct(){
      $this->usuario = UtilService::getUsuario();
      //i($this->usuario);
      if(!$this->usuario){
         $this->redirect(URL_BASE."login");
         
      } 
   }

   public function index(){    
      
      //AclService::temPermissao("pdv");
  
       $dados["view"]       = "home";
	   $this->load("template", $dados);
   } 
}
