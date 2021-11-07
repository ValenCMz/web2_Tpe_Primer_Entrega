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
        $userEmail = $_POST['email'];
        $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user = $this->model->getUserByEmail($userEmail);
        if(isset($user)){
            $this->view->showRegisterForm("El email que ingreso ya existe, intentelo nuevamente");

            // $this->controllerLogin->verifyLogin();
        }
        
        $insertUser = $this->model->insertUser($userEmail, $userPassword);
    
    }
}
