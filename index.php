<?php 
session_start();

//connect DB
require_once 'Model/BaseConnect.php';
$conn = new BaseConnect();
$conn->connect();


if (isset($_GET['controller'], $_GET['action']))
{
    $controller = $_GET['controller'];
    $action =  $_GET['action'];
    $controller->$action();
}
else require_once('Views/home.php');

?>