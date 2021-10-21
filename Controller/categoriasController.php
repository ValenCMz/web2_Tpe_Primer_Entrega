<?php
require_once "./Model/categoriasModel.php";
require_once "./View/categoriasView.php";
require_once "./Helpers/authHelper.php";
require_once "./Model/productosModel.php";
require_once "./View/productosView.php";

class categoriasController
{
    private $model;
    private $view;
    private $authHelper;
    private $prod_model;
    private $prod_view;

    function __construct()
    {
        $this->model = new categoriasModel();
        $this->view = new categoriasView();
        $this->authHelper = new AuthHelper();
        $this->prod_model = new productosModel();
        $this->prod_view = new productosView();
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
        $products = $this->prod_model->getProductosPorCategoria($id);
        if (empty($products)) {
            $this->model->borrarCategoria($id);
            $this->view->redirigirAdministracion();
        }else{
            $categoria = $this->model->getNombreCategoria($id);
            $this->view->warning_delete_prod($products, $categoria, $id);
        }
    }

    function mostrarEditarCategoria($id)
    {
        $this->authHelper->checkloggedIn();
        $categorias = $this->model->getCategoriasItems();
        $this->view->mostrarEditarCategoria($id);
    }

    function editarCategoria()
    {
        $this->authHelper->checkloggedIn();
        $this->model->getCategoriasItems();
        $this->model->editarCategoria($_POST['idCategoria'], $_POST['nueva_categoria']);
        $this->view->redirigirAdministracion();
    }
}
