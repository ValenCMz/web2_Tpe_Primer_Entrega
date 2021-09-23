<?php
require_once 'Controller/productosController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$productosController = new productosController();

switch ($params[0]) {
    case 'home':
        $productosController->mostrarHome();
        break;
    case 'verProducto':
        $productosController->listarProductosItems();
        break;
    default:
        echo ('404 Page not found');
        break;
}
