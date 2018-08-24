<?php
namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes{
    
    #Atributos
    private $Method;
    private $Param = [];
    private $Obj;
    
    protected function getMethod() { return $this->Method; }
    public function setMethod($Method) { $this->Method = $Method; }
    protected function getParam() { return $this->Param;  }
    public function setParam($Param) { $this->Param = $Param;  }

         

    #metodo construtor
    public function __construct() {
        self::addController();
    }    
    
    #metodo de adicão de controller
    private function addController() {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;
            
        if (isset($this->ParserUrl()[1])) {
            self::addMethod();
        }
        
    }
    
    #metodo de adicão de metedo do controller
    private function addMethod() {
        if (method_exists($this->Obj, $this->ParserUrl()[1])) {
            $this->setMethod("{$this->ParserUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        }
        
    }
    
    #metodo de adicão de paramêtros do controller
    private function addParam() {
        $ContArray = count($this->ParserUrl());
           
        if ($ContArray > 2) {
            foreach ($this->ParserUrl() as $Key => $Value) {
                if ($Key > 1) {
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }            
        }
    }
    
    
}