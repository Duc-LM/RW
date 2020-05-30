<?php
class Menu extends BaseConnect
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

    public function create_Menu($name, $price, $shortDesc, $category, $image)
    {
        $sql = "INSERT INTO menus(name,price,shortDesc,category,image)
                    VALUES ('$name','$price', '$shortDesc', '$category', '$image')";
        return $this->execute($sql);            
    }

    public function get_Menu_By_Category($category)
    {
        $sql = "SELECT * FROM menus WHERE category = '$category'";
	    $this->execute($sql);
	    if ($this->num_rows() != 0)
		    $data = mysqli_fetch_array($this->result);
	    else
		    $data = 0;
	    return $data;
    }

    public function update_Menu($id, $name, $price, $shortDesc, $category, $image)
    {
        $sql = "   UPDATE menus
                    SET name = '$name', price = '$price', shortDesc = '$shortDesc', category = '$category', image = '$image'
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
		    $data = mysqli_fetch_array($this->result);
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

    
}