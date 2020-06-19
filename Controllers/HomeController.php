<?php
class HomeController
{
    public function home()
    {
        require_once "views/home.php";
    }

    public function adminPage()
    {
        if ($_SESSION['role'] === 'admin')
           require_once "Views/Admin/admin-index.php";
        else header('Location: index.php');   
    }

    public function userPage()
    {
        if ($_SESSION['role'] === 'user')
           require_once "Views/Admin/UserPage.php";
        else header('Location: index.php');   
    }


}