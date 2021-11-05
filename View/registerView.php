<?php

class registerView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showRegisterForm($mensaje = '')
    {
        $this->smarty->assign("mensaje", $mensaje);
        $this->smarty->display('templates/registerForm.tpl');
    }

    function redirectHome()
    {
        header("Location: " . BASE_URL . "home");
    }
}
