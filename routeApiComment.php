<?php
require_once 'libs/Router.php';
require_once 'Controller/apiCommentController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comment', 'GET', 'apiCommentController', 'getComments');
$router->addRoute('comment/product/:ID', 'GET', 'apiCommentController', 'getCommentsByProduct');
$router->addRoute('comment/:ID', 'GET', 'apiCommentController', 'getComment');

// rutea
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);

    
