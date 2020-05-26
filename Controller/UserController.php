
<?php
require_once 'Model/User.php'; 
class UserController
{   
    public function get_All_Users()
    {
    
        $userModel = new User();
        $userList =$userModel->get_All_Data();
    }

?>