<?php
require_once 'Models/Comment.php';
class CommentController
{

    public function createComment()
    {
        $comment = new Comment();
        $comment->_connect();
        $post_id = $_GET['post_id'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $comment->createComment($post_id,$name,$email,$content);
        $com = $comment->getCommentId($name,$email,$content);
        $comment->createPost_Comment($post_id,$com['id']);
        header('Location: index.php?controller=PostController&action=listPost');
    }

}