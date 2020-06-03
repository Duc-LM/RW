<?php 
class User extends BaseConnect
{
    public function get_All_Data()
    {
        $sql = " SELECT * FROM users ORDER BY role ASC";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function get_User_By_Id($user_id)
    {
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
	    $this->execute($sql);
	    if ($this->num_rows() != 0)
		    $data = mysqli_fetch_array($this->result);
	    else
		    $data = 0;
	    return $data;
    }

    public function create_User($name, $email, $password)
    {
        $sql = "INSERT INTO `users`(name, email,password, role) VALUES ('$name', '$email','md5($password)','user')";
        return $this->execute($sql);
    }

    public function update_User($user_id, $name, $email, $password)
    {
        $sql = "   UPDATE users
                    SET  name = '$name', email  = '$email', password = '$password'
                    WHERE id = '$user_id'  ";

        return $this->execute($sql);
    }

    public function delete_User($user_id)
    {
        $sql = "DELETE FROM users
                WHERE id = '$user_id' ";
        return $this->execute($sql);
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        return mysqli_num_rows($this->execute($sql));
    }

    public function getDataByEmail($email)
    {
	    $sql = "SELECT * FROM users WHERE email = '$email'";
	    $this->execute($sql);
	    if ($this->num_rows() != 0)
		 $data = mysqli_fetch_array($this->result);
	    else
		    $data = 0;
	    return $data;
    }

    public function checkEmail($email)
    {
        $sql = "select * from users where email = '$email'";
		$this->execute($sql);
		if($this->num_rows()===0){
			return false;
		}else{
			return true;
		}
    }

    public function getDataById($user_id)
    {
	$sql = "SELECT * FROM users WHERE id = '$user_id'";
	$this->execute($sql);
	    if ($this->num_rows() != 0)
		    $data = mysqli_fetch_array($this->result);
	    else
		    $data = 0;
	return $data;
    }   

  

}
