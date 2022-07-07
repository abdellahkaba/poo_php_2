<?php

namespace Source ;

class Render {

    public function __construct(
        private string $viewPath
    )
    {}

    public function view(){
        ob_start();

        require BASE_VIEWS_PATH . $this->viewPath . '.php' ;

        return ob_get_clean();
    }

    //la methode qui permet de retourner une nouvelle instance de render

    public static function make(string $viewPath): static{
        return new static($viewPath) ;

    }

    //on appel la methode view dans une methode_magique

    public function __toString()
    {
        return $this->view() ;
    }
}