<?php

class categoriasModel
{
    private $db;

    function __construct()
    {
        //nos conectamos a la base de datos dbname=tpe_web2
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getCategoriasItems()
    {
        $sentencia = $this->db->prepare("SELECT * FROM categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
}
