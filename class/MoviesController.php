<?php
    
include_once"Crud.php";

class MoviesController{

    public function __construct()
    {
        $this->crud = new Crud();
    }
    

}