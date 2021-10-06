<?php
require_once "./Model/registerModel.php";
require_once "./View/registerView.php";

class registerController {

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new registerModel();
        $this->view = new registerView();
    }

    function mostrarFormularioRegistro(){

        $this->view->mostrarFormularioRegistro();
    }

    function registrarUsuario(){
        if (!empty($_POST['nombre']) && !empty($_POST['clave'])) {
            $userNombre = $_POST['nombre'];
            $userClave = password_hash($_POST['clave'], PASSWORD_BCRYPT); 
        
        }
        $this->model->registrarUsuario($userNombre, $userClave);
        $this->view->redirigirHome();

    }


}