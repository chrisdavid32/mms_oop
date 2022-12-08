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
            'mv_year_released' => date("Y-m-d", strtotime($_POST['mv_year_released']))
        ];
        
      $movie_id =  $this->crud->create($data, 'movies');

        $movies_genres = isset($_POST['genres']) ? $_POST['genres']: "";
        $this->createMoviesGenre($movies_genres, $movie_id);  
    }

    public function createMoviesGenre($movies_genres, $movie_id)
    {
        foreach ($movies_genres as $key => $genre_id) {
            $movies_genre_arr = [
                'mvg_ref_genre' => $genre_id,
                'mvg_ref_movie' => $movie_id
            ];
            $this->crud->create($movies_genre_arr, 'mv_genres');
        }
    }
    
}