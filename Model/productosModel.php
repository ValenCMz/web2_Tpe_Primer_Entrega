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
        $sentencia = $this->db->prepare("SELECT * FROM productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function getProductoItem($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM productos WHERE id_producto=?");
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    function getProductosPorCategoria($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM productos WHERE id_categoria=$id");
        $sentencia->execute(array($id));
        $productosPorCategoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productosPorCategoria;
    }

    function agregarProducto($color, $talle, $stock, $precio, $id_categoria)
    {
        $sentencia = $this->db->prepare("INSERT INTO productos(color, talle, stock, precio, id_categoria) VALUES(?, ?, ?, ?, ?)");
        
        $sentencia->execute(
            array($color, $talle, $stock, $precio, $id_categoria)
        );
        var_dump($color, $talle, $stock, $precio, $id_categoria);
    }

    function borrarProducto($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM productos WHERE id_producto=?");
        $sentencia->execute(array($id));
    }

    function editarProducto($id, $color, $talle, $stock, $precio, $id_categoria)
    {
        $sentencia = $this->db->prepare("UPDATE productos SET color='$color', talle='$talle', stock='$stock', precio='$precio', id_categoria='$id_categoria' WHERE id_producto='$id'");
        $sentencia->execute(
            array($id)
        );
    }
}
