<?php
include_once 'Models/Menu.php';
class MenuController
{
    public function getAllMenu()
    {
        $menu = new Menu();
        $menu->_connect();
        if (isset($_SESSION['role']))
        {
            $menuList = $menu->get_All_Data();
            require_once 'views/admin-menu.php';
        }
        else
        {
            $appetizerList = $menu->get_All_Category('appetizer');
            $mainDishList  = $menu->get_All_Category('main dish');
            $dessertList  = $menu->get_All_Category('dessert');
            $drinksList = $menu->get_All_Category('drinks');
            require_once 'views/menu.php';
        }
            
    }

    // public function getMenuById()
    // {
    //     $menu = new Menu();
    //     $id = $_GET['id'];
    //     $menu = $menu->get_Menu_By_Id($id);
    //     require_once '';
    // }

    // public function getMenuByCategory()
    // {
    //     $menu = new Menu();
    //     $category = $_GET['category'];
    //     $menu = $menu->get_Menu_By_Category($category);
    //     require_once '';
    // }

    public function createForm()
    {
        require_once 'views/admin-addmenu.php';
    }

    public function createMenu()
    {
        $menu = new Menu();
        $menu->_connect();
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        
        //validation
        $err = array();
        if (empty($name)) $err['name']="Please fill name";
            elseif ($menu->checkName($name)) $err['name']="Existed name";
        if (empty($category)) $err['category']="Please fill category";

        if (!$err)
        {
            $menu->create_Menu($name,$price,$category);
            header('Location: index.php?controller=MenuController&action=getAllMenu');
        }
        else require_once 'views/admin-addmenu.php';
    }

    public function updateForm()
    {
        $menu = new Menu();
        $menu->_connect();
        $post_id = $_GET['post_id'];
        $menuDetail = $menu->get_Menu_By_Id($post_id);
        require_once 'views/admin-menudetails.php';
    }

    public function updateMenu()
    {
        $menu = new Menu();
        $menu->_connect();
        $id = $_GET['post_id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $menu->update_Menu($id,$name,$price,$category);
        header('Location: index.php?controller=MenuController&action=getAllMenu');
    
    }

    public function deleteMenu()
    {
        $menu = new Menu();
        $menu->_connect();
        $id = $_GET['post_id'];
        $menu->delete_Menu($id);
        header('Location: index.php?controller=MenuController&action=getAllMenu');
    }
}