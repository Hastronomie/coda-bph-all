<?php

class DefaultController extends AbstractController
{
    public function index() : void
    {
        $manager= new UserManager();

        // ===========1==================
        // $test=new User("Jacques","LePirate","Jesuisunvraipirate@delamer.com","plouf",new DateTime);
        // $manager->create($test1);
        // $this->render("index", []);

        // ===========2==================
        // $test2=new User("Jace","LeNinja","Jesuisunvraininja@delamer.com","fiou",new DateTime, 7);
        // $manager->create($test2);
        // $test2->setPassword("ziou");
        // $manager->update(7);
        // $this->render("index", []);

        // ===========3==================
        // $test3=new User("grosNUL","LeKK","JesuisNULLa@delamer.com","triste",new DateTime, 8);
        // $manager->create($test3);
        // $manager->delete(8);
        // $this->render("index", []);

        // ===========4==================
        // $result=$manager->findOne(7);     
        // var_dump($result);
        // $this->render("index", []);

        // ===========5==================
        // $result=$manager->findAll();
        // var_dump($result);
        // $this->render("index", []);
    }
}