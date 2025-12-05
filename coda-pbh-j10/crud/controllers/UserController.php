<?php

class UserController extends AbstractController
{
    public function list() : void
    {
        // $manager= new UserManager();
        require "templates/users/list.phtml";
    }

    public function create()
    {
        require "templates/users/create.phtml";
    }
    public function checkCreate()
    {
        // Ici plus tard : on appellera le Manager pour le SQL (INSERT INTO...)
        echo "Traitement de la création...";
    }
    
    public function update()
    {
        require "templates/users/update.phtml";
    }
    public function checkUpdate()
    {
        // Ici plus tard : on appellera le Manager pour le SQL
        echo "Traitement de la MàJ...";
    }

    public function delete() : void
    {
        // Ici plus tard : on appellera le Manager pour le SQL 
        require "templates/users/list.phtml";
    }
}