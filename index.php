<?php 
session_start();
if (isset($_GET['controller'], $_GET['action']))
{
    $controller_url = $_GET['controller'];
    $action =  $_GET['action'];
}
else 
{
    $controller_url = "HomeController";
    $action = "home";
};
    mysqli_connect('localhost','root', 'root', 'rw');
    require_once "Controllers/".$controller_url.".php";
    $controller = new $controller_url;
    $controller->$action();

  
?>