<?php
class Router
{
    public function handleRequest(array $post) : void
    {
        $controller= new AuthController();
        if (isset($_GET['path']) )
        {
            $controller->notFound();
        }
    
        else 
        {
            $controller->login();
        }
    }
}
?>