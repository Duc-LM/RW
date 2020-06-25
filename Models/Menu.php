<?php
require_once 'Models/Connect.php';
class Menu extends Connect
{
    public function get_All_Data()
    {
        $sql = " SELECT * FROM menus ";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function create_Menu($name, $price, $category)
    {
        $sql = "INSERT INTO menus(name,price,category)
                    VALUES ('$name','$price', '$category')";
        return $this->execute($sql);            
    }

    public function get_Menu_By_Category($category)
    {
        $sql = "SELECT * FROM menus  
                 WHERE category = '$category'";
	  $this->execute($sql);
      if ($this->num_rows() === 0)
          $data = 0;
      else
          while ($datas = $this->getData())
              $data[] = $datas;
      return $data;
    }

    public function update_Menu($id, $name, $price, $category)
    {
        $sql = "   UPDATE menus
                    SET name = '$name', price = '$price', category = '$category'
                    WHERE id = '$id'  ";
        return $this->execute($sql);
    }

    public function get_All_Category()
    {
        $sql = " SELECT category FROM menus ";
        $this->execute($sql);
        if ($this->num_rows() === 0)
            $data = 0;
        else
            while ($datas = $this->getData())
                $data[] = $datas;
        return $data;
    }

    public function get_Menu_By_Id($id)
    {
        $sql = "SELECT * FROM menus WHERE id = '$id'";
	    $this->execute($sql);
	    if ($this->num_rows() != 0)
		    $data = mysqli_fetch_array( $this->execute($sql));
	    else
		    $data = 0;
	    return $data;
    }

    public function delete_Menu($id)
    {
        $sql = "DELETE FROM menus
                WHERE id = '$id' ";
        return $this->execute($sql);            
    }

    public function checkName($name)
    {
        $sql = "select * from menus where name = '$name'";
		$this->execute($sql);
		if($this->num_rows()===0){
			return false;
		}else{
			return true;
		}
    }

    
    
}