<?php


function routing(): string
{
    if (isset($_GET["route"])) 
    {
        
        if ($_GET["route"]==="contact") 
        {
            return 'contact';
        }
        
        if ($_GET["route"]==="about") 
        {
            return 'about';
        }
    }
    return'homepage';
}

$pageDemandee = routing();

require "templates/layout.phtml";
?>