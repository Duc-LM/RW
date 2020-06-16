<?php


class MenuController
{
    public function getAllMenu()
    {
        $menu = new Menu();
        $appetizerList = $menu->get_All_Category('appetizer');
        $mainDishList  = $menu->get_All_Category('main dish');
        $dessertList  = $menu->get_All_Category('dessert');
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
        $price = $_POST['price'];
        $category = $_POST['category'];
        
        //validation
        $err = array();
        if (empty($name)) $err['name']="Please fill name";
            elseif ($menu->checkName($name)) $err['name']="Existed name";
        if (empty($category)) $err['category']="Please fill category";
        if (!is_numeric($price)) $err['price']="Price must be numeric";

        if (!$err)
        {
            $menu->create_Menu($name,$price,$category);
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
        $price = $_POST['price'];
        $category = $_POST['category'];
      

        //validation
        $err = array();
        if (empty($name)) $err['name']="Please fill name";
        elseif ($menu->checkName($name)) $err['name']="Existed name";
        if (empty($category)) $err['category']="Please fill category";
        if (!is_numeric($price)) $err['price']="Price must be numeric";

        if (!$err)
        {
            $menu->update_Menu($id,$name,$price,$category);
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