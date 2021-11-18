<?php
require_once 'Controller/productController.php';
require_once 'Controller/categoryController.php';
require_once 'Controller/loginController.php';
require_once 'Controller/registerController.php';
require_once 'Controller/adminController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$productController = new productController();
$categoryController = new categoryController();
$loginController = new loginController();
$registerController = new registerController();
$adminController = new adminController();


switch ($params[0]) {
    case 'home':
        $productController->showHome();
        break;
    case 'productDetail':
        $productController->showProductDetail($params[1]);
        break;
    case 'showCategories':
        $categoryController->getCategories();
        break;
    case 'productsByCategory':
        $productController->getProductsByCategory($params[1]);
        break;
    case 'administration':
        $productController->showInsertProductForm();
        break;
    case 'insertProduct':
        $productController->insertProduct();
        break;
    case 'deleteProduct':
        $productController->deleteProduct($params[1]);
        break;
    case 'showEditableProduct':
        $productController->showUpdateProduct($params[1]);
        break;
    case 'updateProduct':
        $productController->updateProduct();
        break;
    case 'insertCategory':
        $categoryController->insertCategory();
        break;
    case 'deleteCategory':
        $categoryController->deleteCategory($params[1]);
        break;
    case 'showEditableCategories':
        $categoryController->showUpdateCategory($params[1]);
        break;
    case 'updateCategory':
        $categoryController->updateCategory();
        break;
    case 'showLogin':
        $loginController->showLogin();
        break;
    case 'login':
        $loginController->verifyLogin();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'deleteUser':
        $adminController->deleteUser($params[1]);
        break;
    case 'showRegister':
        $registerController->showRegisterForm();
        break;
    case 'register':
        $registerController->registerUser();
        break;
    case 'showAdminCategories':
        $categoryController->showAdminCategories();
        break;
    case 'showAdminUsers':
        $adminController->showAdminUsers();
        break;
    case 'setAdmin':
        $adminController->setAdmin($params[1], $params[2]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
