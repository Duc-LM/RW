<?php
class HomeController
{
    public function home()
    {
        require_once "Views/Home.php";
    }

    public function adminPage()
    {
        if ($_SESSION['ROLE'] === 'admin')
           require_once "Views/Admin/AdminPage.php";
        else header('Location: index.php');   
    }

    public function userPage()
    {
        if ($_SESSION['ROLE'] === 'user')
        require_once "Views/User/UserPage.php";
     else header('Location: index.php');   
    }
}