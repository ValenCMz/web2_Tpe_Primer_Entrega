<?php
require_once 'Controller/productosController.php';
require_once 'Controller/categoriasController.php';
require_once 'Controller/loginController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$productosController = new productosController();
$categoriasController = new categoriasController();
$loginController = new loginController();

switch ($params[0]) {
    case 'home':
        $productosController->mostrarHome();
        break;
    case 'detallesProducto':
        $productosController->mostrarDetallesDelProducto($params[1]);
        break;
    case 'verCategorias':
        $categoriasController->listarCategoriasItems();
        break;
    case 'productosPorCategoria':
        $productosController->listarProductosPorCategoria($params[1]);
        break;
    case 'administracion':
        $productosController->mostrarFormAgregarProducto();
        break;
    case 'agregarProducto':
        $productosController->agregarProducto();
        break;
    case 'borrarProducto':
        $productosController->borrarProducto($params[1]);
        break;
    case 'mostrarEditarProducto':
        $productosController->mostrarEditarProducto($params[1]);
        break;
    case 'editarProducto':
        $productosController->editarProducto();
        break;
    case 'agregarCategoria':
        $categoriasController->agregarCategoria();
        break;
    case 'borrarCategoria':
        $categoriasController->borrarCategoria($params[1]);
        break;
    case 'mostrarEditarCategoria':
        $categoriasController->mostrarEditarCategoria($params[1]);
        break;
    case 'editarCategoria':
        $categoriasController->editarCategoria();
        break;
    case 'mostrarFormularioLogin':
        $loginController->mostrarLogin();
        break;
    case 'login':
        $loginController->verificacionDelogin();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'eliminarProductos':
        $productosController->eliminarProductos($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
