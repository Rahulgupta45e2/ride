<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>car REntal WEBSITE</title>
    <link rel="stylesheet" href="<?= PATH ?>/style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body> 
<header>
    <a href="#" class="logo"><img src="img/w1.jpeg" alt=""></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="<?= PATH ?>/index.php">home</a></li>
        <li><a href="#ride">ride</a></li>
        <li><a href="/ride&drive/index.php#booking">booking</a></li>
        <li><a href="/ride&drive/index.php#about">about</a></li>
        <li><a href="/ride&drive/index.php#reviews">reviews</a></li>
    </ul>
    <div class="header-btn">
        <?php
        $admin_path_only4admin ='';
        if(isset($_SESSION['role'])){
            $admin_path_only4admin = '/ride&drive/admin/book.php';
        }
        if(!isset($_SESSION['name'])){
            echo '<a href="signup.php" class="sign-up">sign up</a>';
            echo '<a href="login.php" class="sign-in">log-in</a>';
        }else{
            echo '<a href="'. $admin_path_only4admin .'" class="sign-up">'. $_SESSION['name'] .'
            </a>
            ';
            echo '<a href="'. PATH .'/logout.php" class="sign-in">logout</a>';
        }
        ?>
    </div>
</header>