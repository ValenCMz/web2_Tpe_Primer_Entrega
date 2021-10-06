<?php
require_once "./Model/productosModel.php";
require_once "./View/productosView.php";
require_once "./Model/categoriasModel.php";


class productosController
{
    private $model;
    private $view;
    private $modelCategorias;

    function __construct()
    {
        $this->model = new productosModel();
        $this->view = new productosView();
        $this->modelCategorias = new categoriasModel();
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
        $categorias = $this->modelCategorias->getCategoriasItems();
        $prodItems = $this->model->getProductosItems();
        $this->view->mostrarFormDeAgregarProducto($categorias, $prodItems);
    }

    function agregarProducto()
    {
        $this->model->agregarProducto($_POST['color'],  $_POST['talle'], $_POST['stock'], $_POST['precio'], $_POST['id_categoria']);
        var_dump($_POST['color']);
        $this->view->redirigirAdministracion();
    }

    function borrarProducto($id)
    {
        $this->model->borrarProducto($id);
        $this->view->redirigirAdministracion();
    }

    function mostrarEditarProducto($id)
    {
        $categorias = $this->modelCategorias->getCategoriasItems();
        $this->view->mostrarEditarProducto($id, $categorias);
    }

    function editarProducto($id)
    {
        $this->model->editarProducto($id, $_POST['color'],  $_POST['talle'], $_POST['stock'], $_POST['precio'], $_POST['id_categoria']);
        $this->view->redirigirAdministracion();
    }
}
