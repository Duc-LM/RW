<?php
class HomeController
{
    public function home()
    {
        require_once "Views/Home.php";
    }

    public function adminPage()
    {
        if ($_SESSION['role'] === 'admin')
           require_once "Views/Admin/AdminPage.php";
        else header('Location: index.php');   
    }

    public function userPage()
    {
        if ($_SESSION['role'] === 'user')
           require_once "Views/Admin/UserPage.php";
        else header('Location: index.php');   
    }


}