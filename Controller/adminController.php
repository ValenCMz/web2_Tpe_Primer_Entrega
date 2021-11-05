<?php
require_once './Model/adminModel.php';
require_once '';

class adminController
{
    private $model;

    function __construct()
    {
        $this->model = new adminModel();
    }

    function assignAdminPermissions()
    {
    }
}
