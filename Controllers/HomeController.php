<?php

namespace Controllers ;

use Models\User;
use Source\Render;

class HomeController {


   

    public function index() : Render{
       $users = new User() ;
       $statement = $users->getPDO()->query("SELECT * FROM users") ;
       

       foreach($statement->fetchAll() as $st){
        var_dump($st) ;
    }
       return Render::make('index') ;
    }
}