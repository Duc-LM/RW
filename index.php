<?php 
session_start();
if (isset($_GET['controller'], $_GET['action']))
{
    $controller = $_GET['controller'];
    $action =  $_GET['action'];
    $controller->$action;
}
else require_once('view/home.php');
?>