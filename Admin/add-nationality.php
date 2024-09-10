<?php include 'includes/header.php';
?>
<div class="container">
    <div class="sidebar">
        <h1>Dashboard</h1>
        <?php include 'includes/sidebar.php';?>
    </div>
    <div class="main-content">
        <h1>ADD NATIONALITY</h1>
        <div class="card">
         <center>
         <form  method="post">
            <?php 
            if(isset($_POST['add'])){
            $nationality=$_POST['nationality'];
            $select=mysqli_query($conn,"select * from tbl_nationality where nationality='$nationality'");
            if($row=mysqli_fetch_array($select)){
                ?>
                <div class="alert">
                    <h4>Oops! <?php echo $nationality; ?> is already there!</h4>
                </div>
                
                <?php
            }else{
                $insert=mysqli_query($conn,"insert into tbl_nationality(n_id,nationality) values(null,'$nationality')");
                if($insert){
                    ?>
                    <div class="success">
                        <h4>Congs <?php echo $nationality; ?> added successfuly!</h4>
                    </div>
                    
                    <?php
                }else{
                    ?>
                    <div class="alert">
                        <h4>Oops! <?php echo $nationality; ?> failed to insert...!</h4>
                    </div>
                    
                    <?php
                }

            }
                        }
            ?>
            <input type="text" name="nationality" id="" autofocus placeholder="Enter Nationality" required>
            <input type="submit" value="Add" name="add" class="btn">

         </form>
         <table border="1px">
            <tr>
                <th colspan="3" class="th">NATIONALITY</th>
            </tr>
            <tr>
               <th>#</th> 
               <th>NATIONALITY</th>
               <th>Action</th>
            </tr>
           <?php
        
           $count=0; //    so[ do] isfbb kbibldhpi noshoihsblo bosdhgpihe;pgihn
           $ines=mysqli_query($conn,"select * from tbl_nationality order by(n_id) DESC limit 3");
           while($rlt=mysqli_fetch_array($ines)){
            $count++;
          ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $rlt['nationality']; ?></td>
            <td><a href="#" ><div class="edit">Edit</div></a> <a href="delete-nationality.php?n=<?php echo $rlt['n_id']; ?>" onclick="return confirm('Are you sure you want to delete <?php echo $rlt['nationality']; ?>');"><div class="delete">Delete</div></a> </td>
          </tr>
          <?php
           }
           ?>
            </table>
         </center>
         
        </div>
    </div>
</div>
<?php include 'includes/footer.php';
?>