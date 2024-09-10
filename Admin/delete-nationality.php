<?php 
include 'includes/Config.php';
$delete=mysqli_query($conn,"delete from tbl_nationality where n_id='".$_GET['n']."'");
if($delete){
    header('location:add-nationality.php');
}else{
    echo "failed to delete, click <a href='add-nationality.php'>here</a> to try again.";
}
?>