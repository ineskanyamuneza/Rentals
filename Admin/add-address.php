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
            <?php 
            if(isset($_POST['add'])){
            $address=$_POST['address'];
            $select=mysqli_query($conn,"select * from tbl_address where address='$address'");
            if($row=mysqli_fetch_array($select)){
                ?>
                <div class="alert">
                    <h4>Oops! <?php echo $address; ?> is already there!</h4>
                </div>
                
                <?php
            }else{
                $insert=mysqli_query($conn,"insert into tbl_address(a_id,address) values(null,'$address')");
                if($insert){
                    ?>
                    <div class="success">
                        <h4>Congs <?php echo $address; ?> added successfuly!</h4>
                    </div>
                    
                    <?php
                }else{
                    ?>
                    <div class="alert">
                        <h4>Oops! <?php echo $address; ?> failed to insert...!</h4>
                    </div>
                    
                    <?php
                }

            }
                        }
            ?>
            <input type="text" name="address" id="" autofocus placeholder="Enter Address" required>
            <input type="submit" value="Add" name="add" class="btn">

         </form>
         <table border="1px">
            <tr>
                <th colspan="3" class="th">ADDRESS</th>
            </tr>
            <tr>
               <th>#</th> 
               <th>ADRESSES</th>
               <th>Action</th>
            </tr>
           <?php
        
           $count=0; //    so[ do] isfbb kbibldhpi noshoihsblo bosdhgpihe;pgihn
           $ines=mysqli_query($conn,"select * from tbl_address order by(a_id) DESC limit 3");
           while($rlt=mysqli_fetch_array($ines)){
            $count++;
          ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $rlt['address']; ?></td>
            <td><a href="#" ><div class="edit">Edit</div></a> <a href="delete-address.php?a=<?php echo $rlt['a_id']; ?>" onclick="return confirm('Are you sure you want to delete <?php echo $rlt['address']; ?>');"><div class="delete">Delete</div></a> </td>
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