<?php

class adminModel
{

    private $db;

    function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_web2;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function giveAdmin($idUser){
        $query = $this->db->prepare("UPDATE user SET admin = 1 WHERE id_user = ?;");
        $query->execute(
            array($idUser)
        );
    }

    function removeAdmin($idUser){
        $query = $this->db->prepare("UPDATE user SET admin=0 WHERE id_user=?");
        $query->execute(
            array($idUser)
        );
    }
}
