<?php

require_once __DIR__ . "/../app/controllers/productoController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";


$productoController = new ProductoController();
$productoController->index();

$clienteController = new ClienteController();
$clienteController->index();