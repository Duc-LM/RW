
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
                header('Location: index.php?controller=UserController&action=logInForm');
            } else
            {
                $user_ = $user->getDataByEmail($email,$password);
                $_SESSION['user_id'] = $user_['id'];
                $_SESSION['role'] = $user_['role'];
                if ( $user_['role'] === 'admin' ||  $_SESSION['role'] === 'staff')
                    header('Location: index.php?controller=HomeController&action=adminPage');
            };
    }

    public function registerForm()
    {
        require_once "Views/RegisterForm.php";
    }

    public function registerHandle()
    {   
        $userModel = new User();
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        if ($userModel->checkEmail($email))
        {
            $updatelog = "Email Existed!";
            header('Location: index.php?controller=UserController&action=registerForm');
        }
        else
        {
            $userModel->create_User($name,$email,$password);
            $success = "Register Successfully";
            header('Location: index.php?controller=UserController&action=logInForm');
        }
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
        if (isset( $_POST['confirm'],$_POST['confirm_password']))
        {
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
      
        if ($confirm_password === $new_password )
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
            $err = "Please fill in password again";
            require_once "views/admin-userdetails.php";
        }  
        }else
        {
            $userModel->update_User_($user_id,$name,$email,$phone); 
            if ($_SESSION['role'] === 'admin')
            {
                $role = $_POST['role'];
                $userModel->changeRole($user_id,$role);
            }
            header('location: index.php?controller=UserController&action=getAllUsers');
            
        }
        
    }

    public function delete()
    {
        $user_id = $_POST['id'];
        $userModel = new User();
        $userModel->delete_User($user_id);
        header('Location: index.php?controller=UserController&action=getAllUsers');
    }
    
}
?>