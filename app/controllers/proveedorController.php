<?php

require_once __DIR__ . "/../models/proveedorModel.php";

class proveedorController{
    public function index(){
        $proveedorModel = new proveedorModel();
        $proveedores = $proveedorModel->getALL();
        $proveedorConsultado = $proveedorModel->getByid("0 OR 1=1");

        require_once __DIR__ . "/../views/proveedor/index.php";
    }
}
