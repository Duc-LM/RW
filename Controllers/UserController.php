
<?php

class UserController
{   
// LogIn LogOut Register    
    public function logInForm()
    {
        require_once "Views/LoginForm.php";
    }

    public function logIn()
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
                $user = $userModel->getDataByEmail($email);
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                if ( $_SESSION['role'] === 'admin')
                    header('Location: index.php?controller=HomeController&action=adminPage');
                 elseif ( $_SESSION['role'] === 'user')
                 header('Location: index.php?controller=HomeController&action=userPage');
                else header('Location: index.php?controller=UserController&action=logInForm ');
            };
        }
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
        $userList = $userModel->get_All_Data();
        require_once "Views/Admin/UsersList.php";
    }

    public function updateForm()
    {
        $userModel = new User();
        $user = $userModel->getDataById($_GET['user_id']);
        require_once "Views/User/UpdateForm.php";
    }

    public function update()
    {
        $userModel = new User();
        $user_id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
      
        if ($pass1 === $pass2)
            $userModel->update_User($user_id,$name,$email,$pass1);    
        else 
        {
            $err = "Please fill in password again";
            require_once '';
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