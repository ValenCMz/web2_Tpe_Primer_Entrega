<?php

class userModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getUser($name)
    {
        $query = $this->db->prepare('SELECT * FROM user WHERE name=?');
        $query->execute([$name]);
        $user =  $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
