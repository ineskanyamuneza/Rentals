<?php include 'includes/Config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
</head>
<body>
    <center>
        <br><br>
        <?php 
         if(isset($_POST['upload'])){
            $fileName=$_FILES['file']['name'];
            $fileType=$_FILES['file']['type'];
            $fileTmp=$_FILES['file']['tmp_name'];
            $fileErr=$_FILES['file']['error'];
            $fileSize=$_FILES['file']['size'];
            $fileExt=explode(".",$fileName);
            $fileActualExt=strtolower(end($fileExt));
            $allowedExt=array('png','jpg','jpeg');
            if(in_array($fileActualExt,$allowedExt)){
                if($fileErr==0){
                  if($fileSize < 50000000000){
                 $fileNewName=uniqid("Profile",true).".".$fileActualExt;
                 $destination='testingimage/'.$fileNewName;
                 $upload=move_uploaded_file($fileTmp,$destination);
                 if($upload){
                     $int=mysqli_query($conn,"insert into testingimage(img_id,image) 
                     values(null,'".$destination."')");
                     if($int){
                        echo "Well done dear";
                     }else{
                        echo "oops! failed to insert";
                     }
                 }else{
                    echo "Faile to upload to the destination";
                 }
                  }else{
                    echo "The uploaded file is too big";
                  }
                }else{
                    echo "Something went wrong while uploading your file";
                }
            }else{
                echo "Un supported file format";
            }
          
         }
        ?>
        <br><br>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" id=""> <br> <br>
        <input type="submit" name="upload" value="UPLOAD FILE">
    </form>
    <br>
    <br>
    <br>
    <?php $se=mysqli_query($conn,"select * from testingimage");
    while($rt=mysqli_fetch_array($se)){
      ?>
<div style="float:left">
        <img src="<?php echo  $rt['image']; ?>" width="250" height="" alt="">
    </div>
      <?php
    }
    ?>
    
    </center>
</body>
</html>