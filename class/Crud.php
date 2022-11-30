<?php
include_once('./Config.php');

class Crud{
    private $con;

    public function __construct()
    {
        $this->conn = getDbConnection();
    }

    public function create($data_array, $table)
    {
        $columns = implode(',', array_keys($data_array));
        $placeholders = ':'.implode(',:', array_keys($data_array));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data_array);
        return $this->conn->lastInsertId();
    }

    public function read($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }

    public function delete($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}