<?php

class userModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
    }

    function getUserByEmail($email)
    {
        $query = $this->db->prepare('SELECT * FROM user WHERE email=?');
        $query->execute([$email]);
        $user =  $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute();
        $users =  $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function insertUser($email, $password)
    {
        $query = $this->db->prepare("INSERT INTO user(email, password) VALUES(?, ?)");
        $query->execute(
            array($email, $password)
        );

        $user =  $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
