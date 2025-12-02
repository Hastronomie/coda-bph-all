<?php
    class AuthController extends AbstractController
    {
        public function login() : void
        {
            if(isset($_POST['email']))
            {
                $email = $_POST["email"];
                var_dump($email);
            }
            
            else
            {
                $this->render("login",[]);
            }
        }

        public function notFound() : void
        {
            $this->render("notFound", []);
        }
    }
?>