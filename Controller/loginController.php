<?php
require_once "./Model/userModel.php";
require_once "./View/loginView.php";
require_once "./View/productView.php";
require_once "./Helpers/authHelper.php";

class loginController
{

    private $model;
    private $view;
    private $helper;

    function __construct()
    {
        $this->model = new userModel();
        $this->view = new loginView();
        $this->helper = new AuthHelper;
    }

    function showLogin()
    {
        $this->view->showLogin();
    }

    function verifyLogin()
    {
        
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            $user = $this->model->getUserByEmail($userEmail);
            
            if ($user && password_verify($userPassword, $user->password)) {
    
                session_start();
                $_SESSION["email"] = $userEmail;
                $_SESSION['admin'] = $user->admin;
                $_SESSION['id'] = $user->id_user;
                $this->view->redirectHome();
            } else {
                $this->view->showLogin('Acceso denegado. Vuelva a intentar');
            }
           
                
        }
        
    }

    function verifyAdmin(){
        
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste");
    }
}
