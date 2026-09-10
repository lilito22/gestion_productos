<?php

require_once __DIR__ . "/../../config/Database.php";

class productoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getALL()
    {
        $sql = "SELECT 
        p.id,
        p.nombre,
        p.precio,
        p.categoria,
        pr.nombre AS proveedor
        FROM producto p JOIN proveedor pr ON p.id_proveedor=pr.id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql = "SELECT * FROM producto WHERE id = $id";

         $consulta = $this->connection->query($sql);

        return $consulta->fetch(PDO::FETCH_ASSOC);}
}
