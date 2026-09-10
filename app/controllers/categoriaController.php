<?php

require_once __DIR__ . "/../models/categoriaModel.php";

class categoriaController{
    public function index(){
        $categoriaModel = new categoriaModel();
        $categorias = $categoriaModel->getALL();

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}
