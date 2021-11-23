<?php

class productModel
{
    private $db;

    function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getProducts()
    {
        $query = $this->db->prepare("SELECT * FROM product");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id)
    {
        $query = $this->db->prepare("SELECT * FROM product WHERE id_product=?");
        $query->execute(array($id));
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function getProductsByCategory($id)
    {
        $query = $this->db->prepare("SELECT * FROM product WHERE id_category = ?");
        $query->execute(array($id));
        $productsByCategory = $query->fetchAll(PDO::FETCH_OBJ);
        return $productsByCategory;
    }

    function insertProduct($color, $size, $stock, $price, $id_category)
    {
        $query = $this->db->prepare("INSERT INTO product(color, size, stock, price, id_category) VALUES(?, ?, ?, ?, ?)");
        $query->execute(
            array($color, $size, $stock, $price, $id_category)
        );
        return $this->db->lastInsertId();
    }

    function deleteProduct($id)
    {
        $query = $this->db->prepare("DELETE FROM product WHERE id_product=?");
        $query->execute(array($id));
    }

    function updateProduct($id, $color, $size, $stock, $price, $id_category)
    {
        $query = $this->db->prepare("UPDATE product SET color=?, size=?, stock=?, price=?, id_category=? WHERE id_product=?");
        $query->execute(
            array($color, $size, $stock, $price, $id_category, $id)
        );
    }

    function insertImg($imagen = null , $id_product){
        $pathImg = null;
        if ($imagen){
            $pathImg = $this->uploadImage($imagen);
            $query = $this->db->prepare('INSERT INTO product(img WHERE id_product=?) VALUES(?, ?)');
            $query->execute(array($pathImg , $id_product));
            return $this->db->lastInsertId();

        }
    }   

    private function uploadImage($image){
        $target = 'img/task/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }

}
