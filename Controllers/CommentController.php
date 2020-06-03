<?php

class CommentController
{
    public function createForm()
    {
        require '';
    }

    public function createComment()
    {
        $comment = new Comment();
        $post_id = $_GET['post_id'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];

        //validation 
        $err = array();
        if (empty($name)) $err['name'] = "Please fill name";
        if (empty($email)) $err['email'] = "Please fill email";
        if (empty($content)) $err['content'] = "Please comment";

        if (!$err)
        {
            $comment->createComment($post_id,$name,$email,$content);
            require_once '';
        }
        else require_once '';
    }

    public function updateForm()
    {
        $comment = new Comment();
        $id = $_GET['id'];
        $comment = $comment->get_Comment_By_Id($id);
        require_once '';
    }

    public function updateComment()
    {
        $comment = new Comment();
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];

        //validation 
        $err = array();
        if (empty($name)) $err['name'] = "Please fill name";
        if (empty($email)) $err['email'] = "Please fill email";
        if (empty($content)) $err['content'] = "Please comment";

        if (!$err)
        {
            $comment->updateComment($id,$name,$email,$content);
            require_once '';
        }
        else require_once '';
    }

    public function deleteComment()
    {
        $comment = new Comment();
        $id = $_GET['id'];
        $comment->deleteComment($id);
        require_once '';
    }

    public function getCommentByPost()
    {
        $comment = new Comment();
        $post_id = $_GET['id'];

        $comment = $comment->get_All_Data_Of_Post($post_id);
        require_once '';
    }
}