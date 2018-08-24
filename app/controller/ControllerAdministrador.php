<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerAdministrador extends ClassRender implements InterfaceView {
    
    public function __construct() {
        $this->setTitle("Área Administrativa");
        $this->setDescription("Área administrativa da Pré-Etec");
        $this->setKeywords("");
        $this->setDir("admin/");
        $this->renderLayout();                
    }
    
}
