<?php

class registerModel
{
    private $db;

    function __construct()
    {
        //nos conectamos a la base de datos dbname=tpe_web2
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function registrarUsuario($nombre, $clave){
        $sentencia = $this->db->prepare("INSERT INTO users(nombre, clave) VALUES ($nombre,$clave?)");
        $sentencia-> execute(array($nombre, $clave));

    }
}