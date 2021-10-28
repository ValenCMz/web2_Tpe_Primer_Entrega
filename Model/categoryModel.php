<?php

class categoryModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getCategories()
    {
        $query = $this->db->prepare("SELECT * FROM category");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategoryName($id)
    {
        $query = $this->db->prepare("SELECT * FROM category WHERE id_category = ?");
        $query->execute(array($id));
        $categoryName = $query->fetch(PDO::FETCH_OBJ);
        return $categoryName;
    }

    function insertCategory($name)
    {
        //CHEQUEAR EL category(name)
        $query = $this->db->prepare("INSERT INTO category(name) VALUES(?)");
        $query->execute(
            array($name)
        );
    }

    function deleteCategory($id)
    {
        $query = $this->db->prepare("DELETE FROM category WHERE id_category=?");
        $query->execute(array($id));
    }

    function updateCategory($id, $newCategory)
    {
        //chequear
        $query = $this->db->prepare("UPDATE category SET name=? WHERE id_category=?");
        $query->execute(
            array($newCategory, $id)
        );
    }
}
