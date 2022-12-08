<?php
    
include_once"Crud.php";

class MoviesController{

    public function __construct()
    {
        $this->crud = new Crud();
    }

    public function addMovies()
    {
        $data = [
            'mv_title' => $_POST['mv_title'],
            'mv_year_released' => $_POST['mv_year_released']
        ];

        $movies_genres = isset($_POST['genres']) ? $_POST['genres']: "";
        $this->crud->create($data, 'movies');
    }
    
}