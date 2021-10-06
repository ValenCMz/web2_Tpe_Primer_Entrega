<?php

class userModel
{
    private $db;

    function __construct()
    {
        //nos conectamos a la base de datos dbname=tpe_web2
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function obtenerUsuarios($nombre){
        $query = $this->db->prepare('SELECT * FROM users WHERE nombre =?');
        $query->execute([$nombre]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}