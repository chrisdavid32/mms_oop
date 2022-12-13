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
        $this->saveAndUploadCoverImage($movie_id);
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

    public function getMovies()
    {
        $query = "SELECT m.mv_id, m.mv_title, GROUP_CONCAT(g.gnr_name) genres,m.mv_year_released,i.img_path FROM movies AS m
        LEFT JOIN mv_genres AS mv ON mv.mvg_ref_movie = m.mv_id 
        LEFT JOIN genres AS g ON mv.mvg_ref_genre = g.gnr_id
        LEFT JOIN images AS i ON i.img_ref_movie = m.mv_id
        GROUP BY m.mv_id, i.img_path";
        $result =  $this->crud->read($query);
        return $result;
    }

    public function saveAndUploadCoverImage($movie_id)
    {
        $dir = "../images/movie_covers/movie_$movie_id";
        if(!file_exists($dir)){
            mkdir($dir, 0777, true);
        }
        $dir = $dir."/".basename($_FILES["cover_image"]["name"]);
        move_uploaded_file($_FILES["cover_image"]["tmp_name"], $dir);
        $image_info = [
            'img_path' => str_replace('../', '', $dir),
            'img_ref_movie' => $movie_id
        ];

        $this->crud->create($image_info, 'images');
    }
    
}