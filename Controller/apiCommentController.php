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

    function getCommentsByProduct($params = []){
        $productId = $params[0];
        $comments = $this->model->getCommentsByProduct($productId);
        if($comments){
            return $this->view->response($comments, 200);
        }else{
            return $this->view->response("Los comentarios de el producto con el id=$productID no estan disponibles", 404);
        }
    }

    function getComment($params = [])
    {
       $idComment = $params[':ID'];
       $comment = $this->model->getComment($idComment);
       if($comment){
        return $this->view->response($comment, 200);
       }else{
        return $this->view->response("El comentario con el id=$idComment no se encontro", 400);
       }
    }
}
