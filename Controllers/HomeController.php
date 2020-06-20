<?php
class HomeController
{
    public function home()
    {
        require_once "views/home.php";
    }

    public function adminPage()
    {
        if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'staff')
           require_once "Views/admin-index.php";
        else header('Location: index.php');   
    }



}