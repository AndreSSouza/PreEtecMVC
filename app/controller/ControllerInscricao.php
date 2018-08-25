<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerInscricao extends ClassRender implements InterfaceView {
    
    public function __construct() {
        $this->setTitle("Lista de Espera");
        $this->setDescription("Área responsavel por cadastrar, visualizar e excluir os inscritos");
        $this->setKeywords("lista de espera", "inscrição", "");
        $this->setDir("inscricao/");
        $this->renderLayout(); 
    }
    
}

//<?php
//namespace App\Controller;
//
//use Src\Classes\ClassRender;
//use Src\Interfaces\InterfaceView;
//
//class ControllerAdministrador extends ClassRender implements InterfaceView {
//    
//    public function __construct() {
//        $this->setTitle("Área Administrativa");
//        $this->setDescription("Área administrativa da Pré-Etec");
//        $this->setKeywords("");
//        $this->setDir("admin/");
//        $this->renderLayout();                
//    }
//    
//}