<?php 
session_start();
//connect DB
require_once 'Model/BaseConnect.php';
$conn = new BaseConnect();
$conn->connect();


if (isset($_GET['controller'], $_GET['action']))
{
    $controller_url = $_GET['controller'];
    $action =  $_GET['action'];
}
else 
{
    $controller_url = "HomeController";
    $action = "home";
}
require_once "Controller/".$controller_url.".php";
    $controller = new $controller_url;
    $controller->$action();
?>