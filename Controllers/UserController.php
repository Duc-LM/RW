
<?php
require_once 'Models/User.php';
class UserController
{   
// LogIn LogOut Register    
    public function logInForm()
    {
        require_once "views/login.php";
    }

    public function logIn()
    {
        $user = new User();
        $user->_connect();

            $email = $_POST['email'];
            $password = $_POST['password'];  
            
            $check = $user->login($email, $password);
            if ( $check === 0)
            {
                $err = "Wrong email or password! ";
                require_once "views/login.php";
            } else
            {
                $user_ = $user->getDataByEmail($email,$password);
                $_SESSION['user_id'] = $user_['id'];
                $_SESSION['name']= $user_['name'];
                $_SESSION['role'] = $user_['role'];
                if ( $user_['role'] === 'admin' ||  $_SESSION['role'] === 'staff')
                    header('Location: index.php?controller=HomeController&action=adminPage');
            };
    }

    public function registerForm()
    {
        require_once "views/admin-addusers.php";
    }

    public function registerHandle()
    {   
        $userModel = new User();
        $userModel->_connect();
        $email = $_POST['email'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        //validation
        $err = array();
        if ($userModel->checkEmail($email)=== false) $err['email'] = 'Email already exists';
        if ($password !== $confirm_password) $err['password'] = 'The two passwords are not the same';

        if (!$err)
        {
            $userModel->create_User($name,$email,$password,$mobile,$role);
            header('Location: index.php?controller=UserController&action=getAllUsers');
        }
        else require_once "views/admin-addusers.php";
    }

    public function logOut()
    {
        session_destroy();
		header('Location: index.php');
    }

// CRUD
    public function getAllUsers()
    {
        $userModel = new User();
        $userModel->_connect();
        $userList = $userModel->get_All_Data();
        require_once "views/admin-users.php";
    }

    public function updateForm()
    {
        $userModel = new User();
        $userModel->_connect();
        $user = $userModel->getDataById($_GET['user_id']);
        require_once "Views/admin-userdetails.php";
    }

    public function update()
    {
        $userModel = new User();
        $userModel->_connect();
        $user_id = $_GET['user_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['mobile'];
        $new_password =  $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $user = $userModel->getDataById($user_id);

        if ($user['email'] !== $email && $userModel->checkEmail($email) === false) 
        {
            $err = "Email already existed.";
            $user = $userModel->getDataById($_GET['user_id']);
            require_once "Views/admin-userdetails.php";
        }
        elseif ($new_password === $confirm_password)
        {
            $userModel->update_User($user_id,$name,$email,$new_password,$phone);
            if ($_SESSION['role'] === 'admin')
                {
                    $role = $_POST['role'];
                    $userModel->changeRole($user_id,$role);
                }
             header('location: index.php?controller=UserController&action=getAllUsers');
          
        }
        else
        {
            $err = "The two passwords are not the same";
            $user = $userModel->getDataById($user_id);
            require_once "Views/admin-userdetails.php";
        }
        
    }

    public function delete()
    {
        $user_id = $_GET['user_id'];
        $userModel = new User();
        $userModel->_connect();
        $userModel->delete_User($user_id);
        header('Location: index.php?controller=UserController&action=getAllUsers');
    }
    
}
?>