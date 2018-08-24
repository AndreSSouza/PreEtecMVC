<?php
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes{
   
    use TraitUrlParser;
    
    private $Rota;
    
    
    #metodo de retorno da rota
    public function getRota() {
        $url = $this->ParserUrl();
        $I = $url[0];
        
        #colocar todos os urls que teram no nosso site
        $this->Rota = array( 
            "" => "ControllerHome",
            "home" => "ControllerHome",
            "login" => "ControllerLogin",
            "admin" => "ControllerAdministrador",
            "usuario" => "ControllerUsuario",
            "chamada" => "ControllerChamada",
            "aluno" => "ControllerAluno",
            "inscricao" => "ControllerInscricao",
            "turma" => "ControllerTurma"
            );
        
        if (array_key_exists($I, $this->Rota)) {
            if(file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")){
                return $this->Rota[$I];
            } else {
                return "ControllerHome";
            }
        } else {
            return "Controller404";
        }
        
    }
    
    
}

