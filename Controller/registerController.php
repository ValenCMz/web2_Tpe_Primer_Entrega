<?php

require_once './Model/userModel.php';
require_once './View/registerView.php';
require_once './Controller/loginController.php';

class registerController
{

    private $model;
    private $view;
    private $controllerLogin;

    function __construct()
    {
        $this->view = new registerView();
        $this->model = new userModel();
        $this->controllerLogin = new loginController();
    }

    function showRegisterForm()
    {
        $this->view->showRegisterForm();
    }

    function registerUser()
    {
        $userName = $_POST['name'];
        $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $user = $this->model->insertUser($userName, $userPassword);

        if (isset($user)) {
            $this->controllerLogin->verifyLogin();
        } else {
            $this->view->showRegisterForm("Inténtelo nuevamente");
        }
    }
}
