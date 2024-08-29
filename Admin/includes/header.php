<?php session_start(); ?>
<?php if($_SESSION['admin']==""){
    header('location:index.php');
} ?>
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENTALS</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="shortcut icon" href="images/rent.jpg" type="image/jpg">
</head>
<body>
<nav class="nav">
    <div class="logo">
        <img src="images/logo.png" width="180px" alt="">

    </div>
    <div class="ines">
        <ul>
            <li><?php echo $_SESSION['name']; ?>
                <div class="subtab">
                    <ul>
                        <li><a href="dashboard.php"><img src="images/user.jpeg" width="150px" height="150px"alt=""></IMg></a></li>
                        <li><a href="#">Change password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </div>

            </li>
        </ul>

    </div>
</nav>
