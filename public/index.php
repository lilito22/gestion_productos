<?php

require_once __DIR__ . "/../app/controllers/productoController.php";

$productoController = new ProductoController();
$productoController->index();