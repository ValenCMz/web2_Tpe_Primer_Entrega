<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class productosView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($productos)
    {
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/home.tpl');
    }

    function mostrarDetalles($producto)
    {
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('templates/detallesProducto.tpl');
    }

    function verProductosPorCategoria($productosPorCategoria)
    {
        $this->smarty->assign('productosPorCategoria', $productosPorCategoria);
        $this->smarty->display('templates/productosPorCategoria.tpl');
    }

    function mostrarFormDeAgregarProducto($categorias, $prodItems)
    {
        $this->smarty->assign("categorias", $categorias);
        $this->smarty->assign("productos", $prodItems);
        $this->smarty->display('templates/administrarBaseDeDatos.tpl');
    }

    function redirigirAdministracion()
    {
        header("Location: " . BASE_URL . "administracion");
    }
}
