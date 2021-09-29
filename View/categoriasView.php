<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class categoriasView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function mostrarCategorias($categorias)
    {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/listaCategorias.tpl');
    }

    function showHome()
    {
        $this->smarty->display('templates/home.tpl');
    }
}
