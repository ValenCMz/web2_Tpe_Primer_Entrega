<?php

class AuthHelper
{

    function __construct()
    {
    }

    function checkloggedIn()
    {
        session_start();
        if (!isset($_SESSION["email"])) {
            header("Location: " . BASE_URL . "home");
        }
    }

    function checkloggedInAdmin(){
        session_start();
        if(!isset($_SESSION['admin'])){
            header("Location: " . BASE_URL . "administration");
        }else{
            if($_SESSION['admin'] !=1){
                var_dump($_SESSION['admin']);
                header("Location: " . BASE_URL . "home");
            }
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
    }
}
