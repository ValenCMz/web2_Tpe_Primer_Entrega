<?php

class productosModel
{
    private $db;

    function __construct()
    {
        //nos conectamos a la base de datos dbname=tpe_web2
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getProductosItems()
    {
        $sentencia = $this->db->prepare("select * From productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function getProductoItem($id)
    {
        $sentencia = $this->db->prepare("select * from productos WHERE id_producto=?");
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }
}
