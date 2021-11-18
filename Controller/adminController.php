<?php
require_once './Model/adminModel.php';
require_once './View/adminUserView.php';
require_once './Model/userModel.php';
require_once "./Helpers/authHelper.php";

class adminController
{
    private $adminModel;
    private $view;
    private $userModel;
    private $authHelper;

    function __construct()
    {
        $this->adminModel = new adminModel();
        $this->view = new adminUserView(); 
        $this->userModel = new userModel(); 
        $this->authHelper = new AuthHelper();

    }

    function showAdminUsers(){
        $this->authHelper->checkloggedInAdmin();
        $users = $this->userModel->getUsers();
        $this->view->showAdminUsers($users);
    }

    function deleteUser($idUser)
    {
        $this->authHelper->checkloggedInAdmin();
        $this->userModel->deleteUser($idUser);
        $this->view->redirectAdmin();
    }

    function setAdmin($idUser, $userAdmin){
        $this->authHelper->checkloggedInAdmin();
        if($idUser){
            if($userAdmin == "1"){
                $this->adminModel->removeAdmin($idUser);
                $this->view->redirectAdmin();

            }else{
                 $this->adminModel->giveAdmin($idUser);
                 $this->view->redirectAdmin();
            }
        }
    }

}
