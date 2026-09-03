<?php 

require_once __DIR__ . "/../models/clienteModel.php";

class clienteController{
    public function index(){
        $clienteModel = new clienteModel();
        $clientes = $clienteModel->getALL();

        require_once __DIR__ . "/../views/cliente/index.php";
    }
}