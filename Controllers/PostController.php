<?php
require_once "Models/Post.php";

class PostController
{
    public function listPostByUser()
    {
        $post = new Post();
        $user_id = $_POST['user_id'];
        $listPost = $post->get_All_Data_Of_User($user_id);
        require_once "";
    }

    public function listPost()
    {
        $post = new Post();
        $listPost = $post->get_All_Data();
        require_once "";
    }

    public function createForm()
    {
        require_once "";
    }

    public function createPost()
    {
        $post = new Post();

        $v1 = rand(1111, 9999);
        $v2 = rand(1111, 9999);
        $v3 = $v1 . $v2;
        $v3 = md5($v3);
        $fnm = $_FILES["image"]["name"];
        $dst = "./images/" . $v3 . $fnm;
        $image = "images/" . $v3 . $fnm;

        $title = trim($_POST['title']);
        $author = trim($_POST['author']);
        $content = trim($_POST['content']);
        $tag = $_POST['tag'];

        // validation
        $err = array();
        if (empty($title)) $err['title'] = "Please fill tittle";
        if (empty($author)) $err['author'] = "Please fill author name";
        if (empty($content)) $err['content'] = "Please fill content";
        if (empty($fnm )) $err['image']='Please choose image';

        //
        if (!$err)
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], $dst);
            $post->create_Post($title,$_SESSION['user_id'], $author, $content, $tag, $image);
            require_once "";
        }
        else require_once "";
    }

    public function updateForm()
    {
        require_once "";
    }

    public function updatePost()
    {

    }
}