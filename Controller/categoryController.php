<?php
require_once "./Model/categoryModel.php";
require_once "./View/categoryView.php";
require_once "./Helpers/authHelper.php";
require_once "./Model/productModel.php";
require_once "./View/productView.php";

class categoryController
{
    private $model;
    private $view;
    private $authHelper;
    private $prod_model;
    private $prod_view;

    function __construct()
    {
        $this->model = new categoryModel();
        $this->view = new categoryView();
        $this->authHelper = new AuthHelper();
        $this->prod_model = new productModel();
        $this->prod_view = new productView();
    }

    function getCategories()
    {
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }

    function insertCategory()
    {
        $this->authHelper->checkloggedIn();
        $this->model->insertCategory($_POST['newCategory']);
        $this->view->redirectAdmin();
    }

    function deleteCategory($id)
    {
        $this->authHelper->checkloggedIn();
        $products = $this->prod_model->getProductsByCategory($id); //modificar
        if (empty($products)) {
            $this->model->deleteCategory($id);
            $this->view->redirectAdmin();
        } else {
            $categoryName = $this->model->getCategoryName($id);
            $this->view->warningDeleteProducts($products, $categoryName, $id);
        }
    }

    function showUpdateCategory($id)
    {
        $this->authHelper->checkloggedIn();
        $category = $this->model->getCategories();
        $this->view->showUpdateCategory($id);
    }

    function updateCategory()
    {
        $this->authHelper->checkloggedIn();
        $this->model->getCategories();
        $this->model->updateCategory($_POST['idCategory'], $_POST['newCategory']);
        $this->view->redirectAdmin();
    }
}
