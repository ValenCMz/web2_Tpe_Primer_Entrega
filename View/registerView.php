<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class registerView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function redirigirHome(){

        header("Location: " . BASE_URL . "home");
    }
    
    function mostrarFormularioRegistro(){

        $this->smarty->display('templates/registro.tpl');
    }
}    