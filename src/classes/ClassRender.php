<?php
namespace Src\Classes;

class ClassRender {
    
    #propriedades
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;
    
    #getter e Seeter dos atributos
    public function getDir() {
        return $this->Dir;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getKeywords() {
        return $this->Keywords;
    }

    public function setDir($Dir) {
        $this->Dir = $Dir;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }

    public function setKeywords($Keywords) {
        $this->Keywords = $Keywords;
    }   

    #metodos Essenciais
    #metodo responsavel por renderizar todo o layout
    public function renderLayout() {
        include_once (DIRREQ."app/view/Layout.php");
    }
    
    #Adiciona caracteristicas especificas no head
    public function addHead() {
      if (file_exists(DIRREQ."app/view/{$this->getDir()}/head.php")) {
            include (DIRREQ."app/view/{$this->getDir()}/head.php");
        }  
    }
    
    #Adiciona caracteristicas especificas no header
    public function addHeader() {
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/header.php")) {
            include (DIRREQ."app/view/{$this->getDir()}/header.php");
        }
    }        
    
    #Adiciona caracteristicas especificas no main
    public function addMain() {
         if (file_exists(DIRREQ."app/view/{$this->getDir()}/main.php")) {
            include (DIRREQ."app/view/{$this->getDir()}/main.php");
        }
    }
    
    #Adiciona caracteristicas especificas no footer
    public function addFooter() {
         if (file_exists(DIRREQ."app/view/{$this->getDir()}/footer.php")) {
            include (DIRREQ."app/view/{$this->getDir()}/footer.php");
        }
    }
    
    
}
