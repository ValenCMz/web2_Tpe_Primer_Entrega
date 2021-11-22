<?php

class apiCommentModel
{
    private $db;

    function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getComments()
    {
        $query = $this->db->prepare("SELECT * FROM comment");
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function getComment($idComment){
        $query = $this->db->prepare("SELECT * FROM comment WHERE id_comment=?");
        $query->execute(array($idComment));
        $comment = $query->fetch(PDO::FETCH_OBJ);
        return $comment;
    }

    function getCommentsByProduct($idProduct){
        $query = $this->db->prepare("SELECT * FROM comment WHERE id_product=?");
        $query->execute(array($idProduct));
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function insertComment($content, $score, $idUser, $idProduct){
        $query = $this->db->prepare("INSERT INTO comment(content, score, id_author, id_product) VALUES (?,?,?,?)");
        $query->execute(array($content, $score, $idUser, $idProduct));
        return $this->db->lastInsertId();
    }
}
