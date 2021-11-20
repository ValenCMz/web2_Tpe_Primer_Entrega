<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class categoryView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategories($categories)
    {
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/showCategories.tpl');
    }

    function showHome()
    {
        $this->smarty->display('templates/home.tpl');
    }

    function redirectAdmin()
    {
        header("Location: " . BASE_URL . "administration");
    }

    function redirectAdminCategory()
    {
        header("Location: " . BASE_URL . "showAdminCategories");
    }

    function showUpdateCategory($id)
    {
        $this->smarty->assign("id_category", $id);
        $this->smarty->display('templates/showEditableCategory.tpl');
    }

    function warningDeleteProducts($products, $category, $id)
    {

        $this->smarty->assign("category", $category);
        $this->smarty->assign("id", $id);
        $this->smarty->display('templates/warningDeleteProducts.tpl');
    }

    function showAdminCategories($categories)
    {
        $this->smarty->assign("categories", $categories);
        $this->smarty->display('templates/adminCategories.tpl');
    }
}
