<?php

require_once 'Controller/productosController.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$productosController = new productosController();

switch ($params[0]) {
    case 'verProducto':
        $productosController->listarProductosItems($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
