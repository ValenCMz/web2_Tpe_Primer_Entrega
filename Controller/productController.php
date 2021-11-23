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
        $isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
        $user = $_SESSION;
        $prodItems = $this->model->getProducts();
        $this->view->showHome($prodItems, $isAdmin, $user);
    }

    function showProductDetail($id)
    {
        session_start();
        $idUser = isset($_SESSION['id']);
        $isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
        $product = $this->model->getProduct($id);
        $this->view->showProductDetail($product, $idUser, $isAdmin);
    }

    function getProductsByCategory($id)
    {
        $categoryName = $this->modelCategory->getCategoryName($id);
        $productsByCategory = $this->model->getProductsByCategory($id);
        $this->view->showProductsByCategory($productsByCategory, $categoryName);
    }

    function showInsertProductForm()
    {
        $this->authHelper->checkloggedInAdmin();
        $categories = $this->modelCategory->getCategories();
        $products = $this->model->getProducts();
        $this->view->showInsertProductForm($categories, $products);
    }

    function insertProduct()
    {
        $this->authHelper->checkloggedInAdmin();
        $this->model->insertProduct($_POST['color'],  $_POST['size'], $_POST['stock'], $_POST['price'], $_POST['id_category']);
        $this->view->redirectAdmin();
    }

    function deleteProduct($id)
    {
        $this->authHelper->checkloggedInAdmin();
        $this->model->deleteProduct($id);
        $this->view->redirectAdmin();
    }

    function showUpdateProduct($id)
    {
        $this->authHelper->checkloggedInAdmin();
        $categories = $this->modelCategory->getCategories();
        $this->view->showUpdateProduct($id, $categories);
    }

    function updateProduct()
    {
        $this->authHelper->checkloggedInAdmin();
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
