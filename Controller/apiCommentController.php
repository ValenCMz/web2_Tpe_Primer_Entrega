<?php
require_once "./Model/apiCommentModel.php";
require_once "./View/apiCommentView.php";
require_once "Model/userModel.php";
require_once "./Helpers/authHelper.php";


class apiCommentController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new apiCommentModel();
        $this->view = new apiCommentView();
        $this->userModel = new userModel();
        $this->authHelper = new authHelper();
    }

    function getComments()
    {
        $comments = $this->model->getComments();
        return $this->view->response($comments, 200);
    }

    function getCommentsByProduct($params = []){
        $productId = $params[':ID'];
        $comments = $this->model->getCommentsByProduct($productId);
        if($comments){
            foreach ($comments as $comment){
                $comment->id_author = ($this->userModel->getUserById($comment->id_author))->email;
            }
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

    function insertComment($params = []) 
    {
        $this->authHelper->checkloggedIn();
        $body = $this->getBody();   
        $id = $this->model->insertComment($body->content, $body->score, $body->id_author, $body->id_product);
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id=$id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
        }

    }
 /**
     * Devuelve el body del request
     */
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
    

    function deleteComment($params = [])
    {
        $this->authHelper->checkloggedInAdmin();
        $idComment = $params[':ID'];
        $comment = $this->model->getComment($idComment);
        if($comment){
            $this->model->deleteComment($idComment);
            return $this->view->response("El comentario con el id=$idComment se eliminó", 200);
        }else{
            return $this->view->response("El comentario con el id=$idComment no se encontro", 400);
        }
    }
}
    

    


