<?php
require_once "./Model/userModel.php";
require_once "./View/loginView.php";
require_once "./View/productView.php";

class loginController
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new userModel();
        $this->view = new loginView();
    }

    function showLogin()
    {
        $this->view->showLogin();
    }

    function verifyLogin()
    {
        if (!empty($_POST['name']) && !empty($_POST['password'])) {
            $userName = $_POST['name'];
            $userPassword = $_POST['password'];


            $name = $this->model->getUser($userName);
            if ($name && password_verify($userPassword, $name->password)) {
                session_start();

                $_SESSION["name"] = $userName;

                $this->view->redirectHome();
            } else {

                $this->view->showLogin('Acceso denegado. Vuelva a intentar');
            }
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste");
    }
}
