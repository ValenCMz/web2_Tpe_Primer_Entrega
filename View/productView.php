<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class productView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($products)
    {
        $this->smarty->assign('user', $_SESSION);
        $this->smarty->assign('isAdmin', isset($_SESSION['admin']) && $_SESSION['admin'] == 1);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/home.tpl');
    }

    function showProductDetail($product)
    {
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/productDetail.tpl');
    }

    function showProductsByCategory($productsByCategory, $categoryName)
    {
        $this->smarty->assign('categoryName', $categoryName);
        $this->smarty->assign('productsByCategory', $productsByCategory);
        $this->smarty->display('templates/productsByCategories.tpl');
    }

    function showInsertProductForm($categories, $products)
    {
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->display('templates/administrationDataBase.tpl');
    }

    function redirectAdmin()
    {
        header("Location: " . BASE_URL . "administration");
    }

    function showUpdateProduct($product, $categories)
    {
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("product", $product);
        $this->smarty->display('templates/showUpdateProduct.tpl');
    }
}
