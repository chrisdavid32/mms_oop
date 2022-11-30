<?php
include_once('Config.php');
include_once('./class/Crud.php');

$c = new Crud;
// $data = [
//     'mv_title' => 'Titanic',
//     'mv_year_released' => '2000-12-01',
// ];

$data = [
    'gnr_name' => 'Musical',
];

$c->create($data, 'genres');

// getDbConnection();