<?php

class AuthHelper
{

    function __construct()
    {
    }

    function checkloggedIn()
    {
        session_start();
        if (!isset($_SESSION["nombre"])) {
            header("Location: " . BASE_URL . "mostrarFormularioLogin");
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
    }
}
