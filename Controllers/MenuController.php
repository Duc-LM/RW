<?php


class MenuController
{
    public function getAllMenu()
    {
        $menu = new Menu();
        $menuList = $menu->get_All_Data();
        require_once '';
    }

    public function getMenuById()
    {
        $menu = new Menu();
        $id = $_GET['id'];
        $menu = $menu->get_Menu_By_Id($id);
        require_once '';
    }

    public function getMenuByCategory()
    {
        $menu = new Menu();
        $category = $_GET['category'];
        $menu = $menu->get_Menu_By_Category($category);
        require_once '';
    }

    public function createForm()
    {
        require_once '';
    }

    public function createMenu()
    {
        $menu = new Menu();

        $name = $_POST['name'];
        $shortDesc = $_POST['shortDesc'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $v1 = rand(1111, 9999);
        $v2 = rand(1111, 9999);
        $v3 = $v1 . $v2;
        $v3 = md5($v3);
        $fnm = $_FILES["image"]["name"];
        $dst = "./images/" . $v3 . $fnm;
        $image = "images/" . $v3 . $fnm;

        //validation
        $err = array();
        if (empty($name)) $err['name']="Please fill name";
            elseif ($menu->checkName($name)) $err['name']="Existed name";
        if (empty($shortDesc)) $err['shortDesc']="Please fill short description";
        if (empty($category)) $err['category']="Please fill category";
        if (empty($fnn)) $err['image']="Please choose image";
        if (!is_numeric($price)) $err['price']="Price must be numeric";

        if (!$err)
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], $dst);
            $menu->create_Menu($name,$price,$shortDesc,$category,$image);
            require_once "";
        }
        else require_once '';
    }

    public function updateForm()
    {
        require_once '';
    }

    public function updateMenu()
    {
        $menu = new Menu();
        $id = $_GET['id'];
        $name = $_POST['name'];
        $shortDesc = $_POST['shortDesc'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $v1 = rand(1111, 9999);
        $v2 = rand(1111, 9999);
        $v3 = $v1 . $v2;
        $v3 = md5($v3);
        $fnm = $_FILES["image"]["name"];
        $dst = "./images/" . $v3 . $fnm;
        $image = "images/" . $v3 . $fnm;

        //validation
        $err = array();
        if (empty($name)) $err['name']="Please fill name";
        elseif ($menu->checkName($name)) $err['name']="Existed name";
        if (empty($shortDesc)) $err['shortDesc']="Please fill short description";
        if (empty($category)) $err['category']="Please fill category";
        if (empty($fnn)) $err['image']="Please choose image";
        if (!is_numeric($price)) $err['price']="Price must be numeric";

        if (!$err)
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], $dst);
            $menu->update_Menu($id,$name,$price,$shortDesc,$category,$image);
            require_once "";
        }
        else require_once '';
    }

    public function deleteMenu()
    {
        $menu = new Menu();
        $id = $_GET['id'];
        $menu->delete_Menu($id);
        require_once '';
    }
}