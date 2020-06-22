<?php
require_once 'Models/Post.php';
require_once 'Models/Comment.php';
class PostController
{
    public function listPostByUser()
    {
        $post = new Post();
        $post->_connect();
        if ($_SESSION['role'] === 'admin')
            $postList = $post->get_All_Data();
        else{
            $user_id = $_SESSION['user_id'];
            $postList = $post->get_All_Data_Of_User($user_id);
        };
        require_once 'views/admin-posts.php';
    }

    public function listPost()
    {
        $post = new Post();
        $post->_connect();
        $postList = $post->get_All_Data();
        require_once "views/posts.php";
    }
    public function viewPost()
    {
        $Post = new Post();
        $Comment = new Comment();
        $Post->_connect();
        $Comment->_connect();
        $post = $Post->get_Post_By_Id($_GET['id']);
        $commentList = $Comment->get_Comment_From_Post($_GET['id']);
        require "views/posts-details.php";  
    }

    public function createForm()
    {
        require_once 'views/admin-addpost.php';
    }

    public function createPost()
    {
        $post = new Post();
        $post->_connect();
        $v1 = rand(1111, 9999);
        $v2 = rand(1111, 9999);
        $v3 = $v1 . $v2;
        $v3 = md5($v3);
        $fnm = $_FILES["image"]["name"];
        $dst = "./images/" . $v3 . $fnm;
        $image = "images/" . $v3 . $fnm;

        $title = ($_POST['title']);
        $author = ($_POST['author']);
        $content =  $_POST['content'];
        $tag = $_POST['tag'];
            move_uploaded_file($_FILES["image"]["tmp_name"], $dst);
            $post->create_Post($title,$_SESSION['user_id'], $author, $content, $tag, $image);
            header('Location: index.php?controller=PostController&action=listPostByUser');

    }

    public function updateForm()
    {
        $Post = new Post();
        $Post->_connect();
        $post = $Post->get_Post_By_Id($_GET['id']);
        require "views/admin-editpost.php";        
    }

    public function updatePost()
    {
        $Post = new Post();
        $Post->_connect();
        $v1 = rand(1111, 9999);
        $v2 = rand(1111, 9999);
        $v3 = $v1 . $v2;
        $v3 = md5($v3);
        $fnm = $_FILES["image"]["name"];
        $dst = "./images/" . $v3 . $fnm;
        $image = "images/" . $v3 . $fnm;

        $title = ($_POST['title']);
        $author = ($_POST['author']);
        $content =  $_POST['content'];
        $tag = $_POST['tag'];

        $post = $Post->get_Post_By_Id($_GET['id']);
        unlink($post['image']);
        $Post->update_Post($_GET['id'],$title,$author,$content,$tag,$image);
        header('Location: index.php?controller=PostController&action=listPostByUser');
    }

    public function deletePost()
    {
        $post = new Post();
        $post_id = $_GET['id'];
        $post->delete_Post($post_id);
        require_once '';
    }

    // public function changeStatus()
    // {
    //     $post = new Post();
    //     $post_id = $_GET['id'];
    //     $status = $_POST['status'];
    //     $post->change_Status($post_id,$status);
    //     require_once '';
    // }
}