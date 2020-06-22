<?php
require_once 'Models/Connect.php';
class Feedback extends Connect
{
   
    public function get_All_Data()
    {
        $sql = " SELECT * FROM feedbacks ORDER BY id DESC ";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function create_Feedback($name, $email, $content)
    {
        $sql = "INSERT INTO feedbacks(name,email,content)
                VALUES('$name','$email','$content')";
        return $this->execute($sql);  
    }

}