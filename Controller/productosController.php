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

    function listarProductosItems($id)
    {
        $prodItems = $this->model->getProductosItems($id);
        $this->view->mostrarProductos($prodItems);
    }
}
