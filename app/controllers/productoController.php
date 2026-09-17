<?php

require_once __DIR__ . "/../models/productoModel.php";

class productoController
{
    public function index()
    {
        try {
            $productoModel = new productoModel();
            $productos = $productoModel->getALL();
            $productoConsultado = $productoModel->getByid("0 OR 1=1");
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }
        require_once __DIR__ . "/../views/producto/index.php";
    }
}
