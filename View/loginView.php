<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class loginView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }


    function showLogin($denied = '')
    {
        $this->smarty->assign('denied', $denied);
        $this->smarty->display('templates/login.tpl');
    }

    function redirectHome()
    {
        header("Location: " . BASE_URL . "home");
    }
}
