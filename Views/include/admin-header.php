<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../resources/css/font-face.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../resources/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../resources/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../resources/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../resources/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php?controller=HomeController&action=adminPage">
                            <img src="../resources/img/logo.png" alt="logo" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <?php if ($_SESSION['role'] === 'admin') {?>
                        <li>
                            <a href="index.php?controller=UserController&action=getAllUsers">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                    <?php }?>
                        <li>
                        <a href="index.php?controller=ReservationController&action=getAllReservation">
                                <i class="fas fa-book"></i>Reservations</a>
                        </li> 
                        <li>
                            <a href="index.php?controller=MenuController&action=getAllMenu">
                                <i class="fas fa-calendar-o"></i>Menu</a>
                        </li>
                        <li>
                            <a href="index.php?controller=PostController&action=listPostByUser">
                                <i class="fas fa-bullhorn"></i>Post Announcement</a>
                        </li>
                        <li>
                            <a href="index.php?controller=FeedbackController&action=getAllFeedback">
                                <i class="fas fa-comment"></i>Feedback</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php?controller=HomeController&action=adminPage">
                    <img src="../resources/img/logo.png" alt="logo" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <?php if ($_SESSION['role'] === 'admin') {?>
                        <li>
                            <a href="index.php?controller=UserController&action=getAllUsers">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                    <?php }?>    
                        <li>
                            <a href="index.php?controller=ReservationController&action=getAllReservation">
                                <i class="fas fa-book"></i>Reservations</a>
                        </li>
                        <li>
                            <a href="index.php?controller=MenuController&action=getAllMenu">
                                <i class="fas fa-calendar-o"></i>Menu</a>
                        </li>
                        <li>
                            <a href="index.php?controller=PostController&action=listPostByUser">
                                <i class="fas fa-bullhorn"></i>Post Announcement</a>
                        </li>
                        <li>
                            <a href="index.php?controller=FeedbackController&action=getAllFeedback">
                                <i class="fas fa-comment"></i>Feedback</a>
                        </li>
                                           
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <!-- <div class="image">
                                            <img src="../resources/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div> -->
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo ucwords($_SESSION['role'])?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
            
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="index.php?controller=UserController&action=updateForm&user_id=<?php echo $_SESSION['user_id']?>">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="index.php?controller=UserController&action=logOut">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->