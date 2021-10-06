<?php
require_once "./Model/productosModel.php";
require_once "./View/productosView.php";
require_once "./Model/categoriasModel.php";
require_once "./Helpers/authHelper.php";


class productosController
{
    private $model;
    private $view;
    private $modelCategorias;
    private $authHelper;

    function __construct()
    {
        $this->model = new productosModel();
        $this->view = new productosView();
        $this->modelCategorias = new categoriasModel();
        $this->authHelper = new AuthHelper();
    }

    function mostrarHome()
    {
        $prodItems = $this->model->getProductosItems();
        $this->view->showHome($prodItems);
    }

    function mostrarDetallesDelProducto($id)
    {
        $producto = $this->model->getProductoItem($id);
        $this->view->mostrarDetalles($producto);
    }

    function listarProductosPorCategoria($id)
    {
        $productosPorCategoria = $this->model->getProductosPorCategoria($id);
        $this->view->verProductosPorCategoria($productosPorCategoria);
    }

    function mostrarFormAgregarProducto()
    {
        $this->authHelper->checkloggedIn();
        $categorias = $this->modelCategorias->getCategoriasItems();
        $prodItems = $this->model->getProductosItems();
        $this->view->mostrarFormDeAgregarProducto($categorias, $prodItems);
    }

    function agregarProducto()
    {
        $this->authHelper->checkloggedIn();
        $this->model->agregarProducto($_POST['color'],  $_POST['talle'], $_POST['stock'], $_POST['precio'], $_POST['id_categoria']);
        $this->view->redirigirAdministracion();
    }

    function borrarProducto($id)
    {
        $this->authHelper->checkloggedIn();
        $this->model->borrarProducto($id);
        $this->view->redirigirAdministracion();
    }

    function mostrarEditarProducto($id)
    {
        $this->authHelper->checkloggedIn();
        $categorias = $this->modelCategorias->getCategoriasItems();
        $this->view->mostrarEditarProducto($id, $categorias);
    }

    function editarProducto()
    {
        $this->authHelper->checkloggedIn();
        $this->model->editarProducto($_POST['idProducto'], $_POST['color'],  $_POST['talle'], $_POST['stock'], $_POST['precio'], $_POST['id_categoria']);
        $this->view->redirigirAdministracion();
    }
}
