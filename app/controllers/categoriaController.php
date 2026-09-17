<?php

require_once __DIR__ . "/../models/categoriaModel.php";

class categoriaController{
    public function index(){
        $categoriaModel = new categoriaModel();
        $categorias = $categoriaModel->getALL();
        $categoriaConsultado = $categoriaModel->getByid("0 OR 1=1");

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}
