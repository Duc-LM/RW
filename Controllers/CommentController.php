<?php
require_once 'Models/Comment.php';
class CommentController
{

    public function createComment()
    {
        $comment = new Comment();
        $comment->_connect();
        $post_id = intval($_GET['post_id']);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $comment->createComment($name,$email,$content);
        $comment_id = intval(($comment->getCommentId($name,$email,$content))['id']);
        $comment->createPost_Comment($post_id,$comment_id);
        header('Location: index.php?controller=PostController&action=listPost');
    }

}