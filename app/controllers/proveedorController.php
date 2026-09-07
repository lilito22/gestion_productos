<?php

require_once __DIR__ . "/../models/proveedorModel.php";

class proveedorController{
    public function index(){
        $proveedorModel = new proveedorModel();
        $proveedores = $proveedorModel->getALL();

        require_once __DIR__ . "/../views/proveedor/index.php";
    }
}
