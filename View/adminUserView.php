<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class adminUserView{

    private $smarty; 

        function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showAdminUsers($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/showAdminUsers.tpl');
    }

    function redirectAdmin()
    {
        header("Location: " . BASE_URL . "showAdminUsers");
    }
}