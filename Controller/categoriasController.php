<?php
require_once "./Model/categoriasModel.php";
require_once "./View/categoriasView.php";

class categoriasController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new categoriasModel();
        $this->view = new categoriasView();
    }

    function listarcategoriasItems()
    {
        $categItems = $this->model->getcategoriasItems();
        $this->view->mostrarcategorias($categItems);
    }
}