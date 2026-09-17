<?php

require_once __DIR__ . "/../../config/Database.php";

class categoriaModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT * FROM categoria";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM categoria WHERE id = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
