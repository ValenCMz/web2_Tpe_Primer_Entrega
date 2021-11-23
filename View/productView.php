<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class productView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($products, $isAdmin, $user)
    {
        $this->smarty->assign('user', $user);
        $this->smarty->assign('isAdmin', $isAdmin);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/home.tpl');
    }

    function showProductDetail($product, $idUser, $isAdmin)
    {
      
        $this->smarty->assign('idUser', $idUser);
        $this->smarty->assign('isAdmin', $isAdmin);
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/productDetail.tpl');
    }
    
    function showProductsByCategory($productsByCategory, $categoryName)
    {
        $this->smarty->assign('categoryName', $categoryName);
        $this->smarty->assign('productsByCategory', $productsByCategory);
        $this->smarty->display('templates/productsByCategories.tpl');
    }

    function showInsertProductForm($categories, $products, $denied = '')
    {
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("denied", $denied);
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
