<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class productosView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function mostrarProductos($productos)
    {
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/listaItems.tpl');
    }
}
