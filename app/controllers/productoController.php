<?php

require_once __DIR__ . "/../models/productoModel.php";

class productoController{
    public function index(){
        $productoModel = new productoModel();
        $productos = $productoModel->getALL();
        $productoConsultado = $productoModel->getByid("0 OR 1=1");
        require_once __DIR__ . "/../views/producto/index.php";
    }
}
