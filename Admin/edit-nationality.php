<?php include 'includes/header.php';
?>
<div class="container">
    <div class="sidebar">
        <h1>Dashboard</h1>
        <?php include 'includes/sidebar.php';?>
    </div>
    <div class="main-content">
        <h1>UPADATE NATIONALITY</h1>
        <div class="card">
         <center>
         <form  method="post">
            <?php 
            if(isset($_POST['update'])){
            $nationality=$_POST['nationality'];
            $select=mysqli_query($conn,"select * from tbl_nationality where nationality='$nationality'");
            if($row=mysqli_fetch_array($select)){
                ?>
                <div class="alert">
                    <h4>Oops! <?php echo $nationality; ?> is already there!</h4>
                </div>
                
                <?php
            }else{
                $u=mysqli_query($conn,"update tbl_nationality set nationality='".$nationality."' where n_id='".$_GET['u']."'");
                if($u){
                 header('location:add-nationality.php');
                }else{
                    ?>
                    <div class="alert">
                        <h4>Oops! <?php echo $nationality; ?> failed to Update...!</h4>
                    </div>
                    
                    <?php
                }

            }
                        }
            ?>
              <?php
          $s=mysqli_query($conn,"select * from tbl_nationality where n_id='".$_GET['u']."'");
          $r=mysqli_fetch_array($s);
          
          ?>
            <input type="text" name="nationality" id="" autofocus value="<?php echo $r['nationality'] ?>" required>
            <input type="submit" value="Update" name="update" class="btn">

         </form>
         </center>
         
        </div>
    </div>
</div>
<?php include 'includes/footer.php';
?>