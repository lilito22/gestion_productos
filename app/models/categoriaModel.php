<?php

require_once __DIR__ . "/../../config/Database.php";

class categoriaModel {
    private $connection;

    public function __construct(){
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL(){
        $sql = "SELECT * FROM categoria";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

}