<?php

class Router 
{
    public function route()
    {
        $controller=new UserController();
        if (isset($_GET['route']))
        {
            if ($_GET['route']==='show_user')
            {
                // $controller->show();
                // require "templates/users/show.phtml";
            }

            elseif ($_GET['route']==='create_user')
            {
                // $controller->create();
                // require "templates/users/create.phtml";
            }

            elseif ($_GET['route']==='check_create_user')
            {
                // $controller->checkCreate();
                // require "templates/users/create.phtml";
            }

            elseif ($_GET['route']==='update_user')
            {
                // $controller->update();
                // require "templates/users/update.phtml";
            }

            elseif ($_GET['route']==='check_update_user')
            {
                // $controller->checkUpdate();
                // require "templates/users/update.phtml";
            }

            elseif ($_GET['route']==='delete_user')
            {
                // $controller->delete();
                // require "templates/users/list.phtml";
            }

            else
            {
                // $controller->list();
                // require "templates/users/list.phtml";
            }
        }
        else
        {
            // $controller->list();
            // require "templates/users/list.phtml";
        }
    }

}