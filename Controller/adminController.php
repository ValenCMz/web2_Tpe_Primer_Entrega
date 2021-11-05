<?php
require_once './Model/adminModel.php';
require_once './View/adminUserView.php';
require_once './Model/userModel.php';

class adminController
{
    private $model;
    private $view;
    private $userModel;

    function __construct()
    {
        $this->model = new adminModel();
        $this->view = new adminUserView(); 
        $this->userModel = new userModel(); 
    }

    function assignAdminPermissions()
    {
    }

    function showAdminUsers(){
        $users = $this->userModel->getUsers();
        $this->view->showAdminUsers($users);
    }
}
