
<?php
require_once 'Model/User.php'; 
class UserController
{   
    public function index()
    {
        require_once "Views/LoginForm.php";
    }
    public function login()
    {
        if (isset($_POST['email'], $_POST['password']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];    
            $userModel = new User();
            $check = $userModel->login($email, $password);
            if ( $check === 0)
            {
                $err = "Wrong email or password! ";
                header('Location: index.php?controller=UserController&action=index');
            } else
            {
                $_SESSION['ROLE'] = "admin";

            };
        }
    }

    public function get_All_Users()
    {
        $userModel = new User();
        $userList = $userModel->get_All_Data();
    }


?>