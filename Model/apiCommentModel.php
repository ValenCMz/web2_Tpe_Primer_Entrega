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
}
