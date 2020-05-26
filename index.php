<?php 
session_start();
<<<<<<< HEAD

//connect DB
require_once 'Model/BaseConnect.php';
$conn = new BaseConnect();
$conn->connect();


if (isset($_GET['controller'], $_GET['action']))
{
    $controller_url = $_GET['controller'];
    $action =  $_GET['action'];
    require_once "Controller/".$controller_url.".php";
    $controller = new $controller_url;
    $controller->$action();

}
else require_once('Views/home.php');

=======
if (isset($_GET['controller'], $_GET['action']))
{
    $controller = $_GET['controller'];
    $action =  $_GET['action'];
    $controller->$action;
}
else require_once('view/home.php');
>>>>>>> 78e7ef9d0fbc98f06d536f416c9862ade0cce93a
?>