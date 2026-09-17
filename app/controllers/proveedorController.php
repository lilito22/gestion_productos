<?php

require_once __DIR__ . "/../models/proveedorModel.php";

class proveedorController
{
    public function index()
    {
        try {
            $proveedorModel = new proveedorModel();
            $proveedores = $proveedorModel->getALL();
            $proveedorConsultado = $proveedorModel->getByid("0 OR 1=1");
        } catch (PDOException $e) {
            echo "error aqui: " . $e->getMessage();
        }
        require_once __DIR__ . "/../views/proveedor/index.php";
    }
}
