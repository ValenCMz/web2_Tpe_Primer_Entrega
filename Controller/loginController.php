<?php
require_once "./Model/userModel.php";
require_once "./View/loginView.php";

class loginController{

    private $model;
    private $view;

    function __construct()
    {
       // $this->model = new userModel();
        $this->view = new loginView();

    }

    function mostrarLogin()
    {

        $this->view->mostrarFormularioLogin();
    }

    function login()
    {
        if (!empty($_POST['nombre']) && !empty($_POST['clave'])) 
        {
            $userNombre = $_POST['nombre'];
            $userClave = $_POST['clave'];
            $nombre = $this->model->obtenerUsuarios();
            if ($nombre && password_verify($userClave, $nombre->clave)) {
                session_start();
                $_SESSION["nombre"] = $userNombre;
                $this->view->redirigirHome();
            }
        }else{
            $this->view->mostrarLogin('Acceso denegado. Vuelva a intentar');
        }
    }
}