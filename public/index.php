<?php

require_once __DIR__ . "/../app/controllers/productoController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/proveedorController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";


$productoController = new ProductoController();
$productoController->index();

$clienteController = new ClienteController();
$clienteController->index();

$proveedorController = new proveedorController();
$proveedorController->index();

$categoriaController = new categoriaController();
$categoriaController->index();