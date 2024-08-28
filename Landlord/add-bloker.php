<?php include 'includes/header.php';
?>
<div class="container">
    <div class="sidebar">
        <h1>Dashboard</h1>
        <?php include 'includes/sidebar.php';?>
    </div>
    <div class="main-content">
        <h1>ADD BLOKER</h1>
        <div class="card">
         <center>
         <form action="" method="post">
            <input type="text" name="name" id="" autofocus placeholder="Enter Bloker Name" required>
            <input type="tel" name="contact" id="" placeholder="Ex:0787293050" required>
            <input type="email" name="email" id="" placeholder="Ex:luckyazor11@gmail.com" required>
            <input type="text" name="nin" id="" placeholder="National Identification Number (NIN)" required>
            <input type="text" name="password" id="" value="<?php
echo substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 10);
?>" readonly required>


            <input type="submit" value="Add" class="btn">

         </form>
         </center>
        
        </div>
    </div>
</div>
<?php include 'includes/footer.php';
?>