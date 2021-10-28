<?php
require_once "./Model/productModel.php";
require_once "./View/productView.php";
require_once "./Model/categoryModel.php";
require_once "./Helpers/authHelper.php";


class productController
{
    private $model;
    private $view;
    private $modelCategory;
    private $authHelper;

    function __construct()
    {
        $this->model = new productModel();
        $this->view = new productView();
        $this->modelCategory = new categoryModel();
        $this->authHelper = new AuthHelper();
    }

    function showHome()
    {
        session_start();
        $prodItems = $this->model->getProducts();
        $this->view->showHome($prodItems);
    }

    function showProductDetail($id)
    {
        $product = $this->model->getProduct($id);
        $this->view->showProductDetail($product);
    }

    function getProductsByCategory($id)
    {
        $categoryName = $this->modelCategory->getCategoryName($id);
        $productsByCategory = $this->model->getProductsByCategory($id);
        $this->view->showProductsByCategory($productsByCategory, $categoryName);
    }

    function showInsertProductForm()
    {
        $this->authHelper->checkloggedIn();
        $categories = $this->modelCategory->getCategories();
        $products = $this->model->getProducts();
        $this->view->showInsertProductForm($categories, $products);
    }

    function insertProduct()
    {
        $this->authHelper->checkloggedIn();
        $this->model->insertProduct($_POST['color'],  $_POST['size'], $_POST['stock'], $_POST['price'], $_POST['id_category']);
        $this->view->redirectAdmin();
    }

    function deleteProduct($id)
    {
        $this->authHelper->checkloggedIn();
        $this->model->deleteProduct($id);
        $this->view->redirectAdmin();
    }

    function showUpdateProduct($id)
    {
        $this->authHelper->checkloggedIn();
        $categories = $this->modelCategory->getCategories();
        $this->view->showUpdateProduct($id, $categories);
    }

    function updateProduct()
    {
        $this->authHelper->checkloggedIn();
        $this->model->updateProduct($_POST['idProduct'], $_POST['color'],  $_POST['size'], $_POST['stock'], $_POST['price'], $_POST['id_category']);
        $this->view->redirectAdmin();
    }

    function deleteProducts($id)
    {
        $products = $this->model->getProductsByCategory($id);
        foreach ($products as $product) {
            $id_product = $product->id_product;
            $this->model->deleteProduct($id_product);
        }
        $this->modelCategory->deleteCategory($id);
        $this->view->redirectAdmin();
    }
}
