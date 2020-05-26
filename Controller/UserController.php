<<<<<<< HEAD
<?php
require_once 'Model/User.php'; 
class UserController
{   
    public function get_All_Users()
    {
    
        $userModel = new User();
        $userList =$userModel->get_All_Data();
    }

    public function hello()
    {
        echo "dung roi do";
    }
=======
<?php 
class UserController {
    
>>>>>>> 78e7ef9d0fbc98f06d536f416c9862ade0cce93a
}
?>