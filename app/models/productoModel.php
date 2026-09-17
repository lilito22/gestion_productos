<?php

require_once __DIR__ . "/../../config/Database.php";

class productoModel
{
    private $connection;

    public function __construct()
    {
        try {
            $database = new Database();
            $this->connection = $database->connect();
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }
    }

    public function getALL()
    {
        try {
            $sql = "SELECT 
        p.id,
        p.nombre,
        p.precio,
        c.nombre AS categoria,
        pr.nombre AS proveedor
        FROM producto p
        JOIN proveedor pr ON p.id_proveedor=pr.id
        JOIN categoria c ON p.id_categoria=c.id";

            $consulta = $this->connection->query($sql);
            return $consulta->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }
    }

    public function getByid($id)
    {
        try {
            $sql = "SELECT * FROM producto WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":id", $id);
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }

    }
}
