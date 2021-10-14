<?php
require_once "./Model/categoriasModel.php";
require_once "./View/categoriasView.php";
require_once "./Helpers/authHelper.php";

class categoriasController
{
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new categoriasModel();
        $this->view = new categoriasView();
        $this->authHelper = new AuthHelper();
    }

    function listarcategoriasItems()
    {
        $categItems = $this->model->getCategoriasItems();
        $this->view->mostrarCategorias($categItems);
    }

    function agregarCategoria()
    {
        $this->authHelper->checkloggedIn();
        $this->model->agregarCategoria($_POST['nueva_categoria']);
        $this->view->redirigirAdministracion();
    }

    function borrarCategoria($id)
    {
        $this->authHelper->checkloggedIn();
        $this->model->borrarCategoria($id);
        $this->view->redirigirAdministracion();
    }

    function mostrarEditarCategoria($id)
    {
        $this->authHelper->checkloggedIn();
        $categorias = $this->model->getCategoriasItems();
        $this->view->mostrarEditarCategoria($id, $categorias);
    }

    function editarCategoria()
    {
        $this->authHelper->checkloggedIn();
        $this->model->getCategoriasItems();
        $this->model->editarCategoria($_POST['idCategoria'], $_POST['nueva_categoria']);
        $this->view->redirigirAdministracion();
    }
}
