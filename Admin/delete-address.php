<?php 
include 'includes/Config.php';
$delete=mysqli_query($conn,"delete from tbl_address where a_id='".$_GET['a']."'");
if($delete){
    header('location:add-address.php');
}else{
    echo "failed to delete, click <a href='add-address.php'>here</a> to try again.";
}
?>