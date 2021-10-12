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

    function redirigirAdministracion()
    {
        header("Location: " . BASE_URL . "administracion");
    }

    function mostrarEditarCategoria($id,$categorias)
    {
        $this->smarty->assign("id_categoria", $id);
        $this->smarty->display('templates/mostrarEditarCategoria.tpl');
    }
}
