<?php
    
include_once"Crud.php";
include_once"Session.php";

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

        Session::set('sucess-message', 'Movie Added Successfully!');

        header('location: list-movies.php');

    }

    public function createMoviesGenre($movies_genres, $movie_id)
    {
        

        foreach ($movies_genres as $key => $genre_id) {

            $movies_genres = $this->crud->read("SELECT * from mv_genres where mvg_ref_movie = $movie_id and mvg_ref_genre = $genre_id");
            if(empty($movies_genres)){

                $movies_genre_arr = [
                    'mvg_ref_genre' => $genre_id,
                    'mvg_ref_movie' => $movie_id
                ];

                $this->crud->create($movies_genre_arr, 'mv_genres');
            }
           
           
        }
    }

    public function getMovies()
    {
        $query = "SELECT m.mv_id, m.mv_title, GROUP_CONCAT(g.gnr_name) genres,m.mv_year_released,i.img_path FROM movies AS m
        LEFT JOIN mv_genres AS mv ON mv.mvg_ref_movie = m.mv_id 
        LEFT JOIN genres AS g ON mv.mvg_ref_genre = g.gnr_id
        LEFT JOIN images AS i ON i.img_ref_movie = m.mv_id
        GROUP BY m.mv_id, i.img_path ORDER BY m.mv_id DESC";
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

    public function getMovie($mv_id)
    {
        $query = "SELECT m.mv_id, m.mv_title, GROUP_CONCAT(g.gnr_name) genres,m.mv_year_released,i.img_path FROM movies AS m
        LEFT JOIN mv_genres AS mv ON mv.mvg_ref_movie = m.mv_id 
        LEFT JOIN genres AS g ON mv.mvg_ref_genre = g.gnr_id
        LEFT JOIN images AS i ON i.img_ref_movie = m.mv_id
        where m.mv_id = $mv_id
        GROUP BY m.mv_id, i.img_path LIMIT 1";
        $result =  $this->crud->read($query);
        return $result;
    }

    public function editMovies($movie_id)
    {
        $year_released = date("Y-m-d", strtotime($_POST['mv_year_released']));
        $mv_title = $_POST['mv_title'];
        
        $sql = "UPDATE movies
                set mv_title = '$mv_title', mv_year_released = '$year_released'
                WHERE mv_id = $movie_id";
        
        $this->crud->update($sql);

        $this->createMoviesGenre($_POST['genres'], $movie_id);

        $this->deleteDeselectedGenres($movie_id);

        //update movies image
        if(!empty($_FILES['cover_image']['name'])){

            // Delete previous image
            $this->crud->delete("delete from images where img_ref_movie = $movie_id");
            $this->saveAndUploadCoverImage($movie_id);
        }

    }

    public function deleteDeselectedGenres($movie_id)
    {
        $movies_genres = $this->crud->read("SELECT * from mv_genres where mvg_ref_movie = $movie_id");
        
        // if the genres has been deselected from the select box, remove it from the database
        foreach ($movies_genres as $key => $movies_genre) {
            $genre_id = $movies_genre['mvg_ref_genre'];
            if(!in_array($genre_id, $_POST['genres']))
            $this->crud->delete("DELETE from mv_genres where mvg_ref_genre = $genre_id");
        }
    }

       
}