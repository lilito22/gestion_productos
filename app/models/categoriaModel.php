<?php

require_once __DIR__ . "/../../config/Database.php";

class categoriaModel
{
    private $connection;

    public function __construct()
    {
        try {
            $database = new Database();
            $this->connection = $database->connect();
        } catch (PDOException $e) {
            echo "ocurrio un error aqui: " . $e->getMessage();
        }
    }

    public function getALL()
    {
        try {
            $sql = "SELECT * FROM categoria";

            $consulta = $this->connection->query($sql);
            return $consulta->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }
    }

    public function getByid($id)
    {
        try {
            $sql = "SELECT * FROM categoria WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }
    }
}
