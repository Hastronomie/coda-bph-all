<?php

class PageController {
    
    public function home() 
    {
        require "templates/layout.phtml";
        require "templates/home.phtml";
    }

    public function tarifs() 
    {
        require "templates/layout.phtml";
        require "templates/tarifs.phtml";
    }

    public function notFound() {
        header("HTTP/1.0 404 Not Found");
        require "templates/layout.phtml";
        $message = "Oups, page introuvable: 404 hihihihihiihihi !";
        require "templates/404.phtml";
    }
}