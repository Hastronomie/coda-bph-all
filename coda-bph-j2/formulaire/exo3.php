<?php 
    if (empty($name))
    {
        echo "Bienvenue Anonyme";
    }
    else 
    {
        echo "Bienvenue {$_GET["name"]}";
    }
?>