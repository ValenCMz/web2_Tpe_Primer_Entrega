<?php
require_once "./Model/apiCommentModel.php";
require_once "./View/apiCommentView.php";

class apiCommentController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new apiCommentModel();
        $this->view = new apiCommentView();
    }

    function getComments()
    {
        $comments = $this->model->getComments();
        return $this->view->response($comments, 200);
    }
}
