<?php

class AuthHelper
{

    function __construct()
    {
    }

    function checkloggedIn()
    {
        session_start();
        if (!isset($_SESSION["name"])) {
            header("Location: " . BASE_URL . "administration");
        }
    }


    function logout()
    {
        session_start();
        session_destroy();
    }
}
