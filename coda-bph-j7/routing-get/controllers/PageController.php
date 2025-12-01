<?php
class PageController
{
    public function home() : void
    {
       $route="home";
       require "templates/layout.phtml";
    }

    public function about() : void
    {
        $route="a-propos";
        require "templates/layout.phtml";
    }

    public function notFound() : void
    {
        $route="notFound";
        require "templates/layout.phtml";
    }

        public function contact() : void
    {
        $route="contact";
        require "templates/layout.phtml";
    }
}
?>