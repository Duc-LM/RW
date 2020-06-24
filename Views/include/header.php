<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/posts.css">
    <link rel="stylesheet" href="../resources/css/menu.css">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-collapse navbar-expand-lg navbar-light bg-light " style="padding-left: 5%; padding-right: 5%; margin: 0 auto;">
        <a class="navbar-brand" href="#"><img src="../resources/img/logo.png" alt="logo-brand" width="150" loading="lazy" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?controller=MenuController&action=getAllMenu" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?controller=PostController&action=listPost" class="nav-link">Announcement</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?controller=ReservationController&action=createForm" class="nav-link">Reservation</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?controller=FeedbackController&action=createForm" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=UserController&action=loginForm" class="nav-link">Login</a>
              </li>
            </ul>
        </div>
    </nav>
<!-- Navbar -->