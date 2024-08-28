<?php include 'includes/header.php';
?>
<div class="container">
    <div class="sidebar">
        <h1>Dashboard</h1>
        <?php include 'includes/sidebar.php';?>
    </div>
    <div class="main-content">
        <h1>ADD ADDRESS</h1>
        <div class="card">
         <center>
         <form action="" method="post">
            <input type="text" name="address" id="" autofocus placeholder="Enter Address" required>
            <input type="submit" value="Add" class="btn">

         </form>
         </center>
        
        </div>
    </div>
</div>
<?php include 'includes/footer.php';
?>