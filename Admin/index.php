<<<<<<< HEAD
<?php include 'includes/config.php'; ?> 
=======
<?php
include 'includes/config.php';?>
>>>>>>> 9daf753f14d2653f8dd8fbe29b496629ab0d7718
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="images/rent.png.jpg" type="image/jpg">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body bgcolor="white">
    <div class="container">
<center>
    <fieldset>
        <legend><img src="images/rent.jpg" width="100" height="100" alt=""></legend>
        <?php 
        if(isset($_POST['login'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $select=mysqli_query($conn,"select * from tbl_admin where Email='".$email."' and pass='".$password."'");
            if($row=mysqli_fetch_array($select)){
                session_start();
                $_SESSION['admin']=$row['admin_id'];
                $_SESSION['name']=$row['userName'];
                $_SESSION['Email']=$row['Email'];
                header('location:dashboard.php');
            }else{
                ?>
<div class="alert">
    <h4>Password or Email is incorrect!</h4>
</div>

<?php

            }
        }
        ?>
        <form  method="post">
            <input type="email" name="email" placeholder="example@gmail.com" required title="please enter your email" autofocus id="">
            <input type="password" name="password"  placeholder="password" required title="please enter your password" id="">
            <input type="submit" name="login" value="Login" class="btn">
</form>
         </fieldset>
</center>
    </div>
    
</body>
</html>