<?php
class Router
{
    public function handleRequest(array $get) : void
    {
        if(isset($_GET["route"]))
        {
            if($_GET["route"] === "a-propos")
            {
                $page_controller= new PageController();
                $page_controller->about();
            }

            else if($_GET["route"] === "contact")
            {
                $page_controller= new PageController();
                $page_controller->contact();
            }

            else 
            {
                $page_controller= new PageController();
                $page_controller->notFound();
            }
        }

        else 
        {
            $page_controller= new PageController();
            $page_controller->home();
        }
    }
}

?>