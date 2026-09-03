<?php

require_once __DIR__ . "/../models/productoModel.php";

class productoController{
    public function index(){
        $productoModel = new productoModel();
        $productos = $productoModel->getALL();

        require_once __DIR__ . "/../views/producto/index.php";
    }
}