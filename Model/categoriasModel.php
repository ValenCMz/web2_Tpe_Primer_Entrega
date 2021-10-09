<?php

class categoriasModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getCategoriasItems()
    {
        $sentencia = $this->db->prepare("SELECT * FROM categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function getNombreCategoria($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM categorias WHERE id_categoria = ?");
        $sentencia->execute(array($id));
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }

    function agregarCategoria($nuevoId, $nombre)
    {
        $sentencia = $this->db->prepare("INSERT INTO categorias(id_categoria ,nombre) VALUES(?, ?)");
        $sentencia->execute(
            array($nuevoId, $nombre)
        );
    }

    function borrarCategoria($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM categorias WHERE id_categoria=?");
        $sentencia->execute(array($id));
    }
}
