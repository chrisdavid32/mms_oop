<?php
include_once('./Config.php');

class Crud{
    private $con;

    public function __construct()
    {
        $this->conn = getDbConnection();
        var_dump($this->conn);
    }
}