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
        $this->authHelper->checkloggedInAdmin();
        if(!empty($_POST['newCategory'])){
            $this->model->insertCategory($_POST['newCategory']);     
            $this->view->redirectAdminCategory();
        }
        else{
            $this->view->showErrorMessage('La categoria no se pudo insertar');   
        }
        
    }

    function deleteCategory($id)
    {
        $this->authHelper->checkloggedInAdmin();
        $products = $this->prod_model->getProductsByCategory($id); //modificar
        if (empty($products)) {
            $this->model->deleteCategory($id);
            $this->view->redirectAdminCategory();
        } else {
            $categoryName = $this->model->getCategoryName($id);
            $this->view->warningDeleteProducts($products, $categoryName, $id);
        }
    }

    function showUpdateCategory($id)
    {
        $this->authHelper->checkloggedInAdmin();
        $category = $this->model->getCategories();
        $this->view->showUpdateCategory($id);
    }

    function updateCategory()
    {
        $this->authHelper->checkloggedInAdmin();
        $this->model->getCategories();
        if(!empty($_POST['idCategory']) && !empty($_POST['newCategory'])){
            $this->model->updateCategory($_POST['idCategory'], $_POST['newCategory']);
            $this->view->redirectAdmin();
        }
        else{
            $this->view->showErrorMessage('La categoria no se pudo actualizar');   
        }
    }

    function showAdminCategories()
    {
        $categories = $this->model->getCategories();
        $this->view->showAdminCategories($categories);
    }
}
