<?php
namespace Src\Traits;

trait TraitUrlParser{
    
    #Divide a url em um array
    public function ParserUrl() {
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
    
}
