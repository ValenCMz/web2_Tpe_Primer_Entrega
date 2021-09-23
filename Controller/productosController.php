<?php
require_once "./Model/productosModel.php";
require_once "./View/productosView.php";

class productosController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new productosModel();
        $this->view = new productosView();
    }

    function listarProductosItems()
    {
        $prodItems = $this->model->getProductosItems();
        $this->view->mostrarProductos($prodItems);
    }

    function mostrarHome()
    {
        $this->view->showHome();
    }
}
