<?php
require_once './Model/adminModel.php';
require_once './View/adminUserView.php';
require_once './Model/userModel.php';
require_once "./Helpers/authHelper.php";

class adminController
{
    private $model;
    private $view;
    private $userModel;
    private $authHelper;

    function __construct()
    {
        $this->model = new adminModel();
        $this->view = new adminUserView(); 
        $this->userModel = new userModel(); 
        $this->authHelper = new AuthHelper();

    }

    function assignAdminPermissions()
    {
    }

    function showAdminUsers(){
        $this->authHelper->checkloggedInAdmin();
        $users = $this->userModel->getUsers();
        $this->view->showAdminUsers($users);
    }

    function deleteUser($idUser)
    {
        $this->authHelper->checkloggedInAdmin();
        $this->userModel->deleteUser($idUser);
        $this->view->redirectAdmin();
    }

}
