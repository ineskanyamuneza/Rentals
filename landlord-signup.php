<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="main">
    <center>
    <fieldset>
        <legend id="imagePreview" width="100px" height="100px" class="img"><img src="images/user.jpeg" alt="" width="100px" height="100px"></legend>
       <?php
       if(isset($_POST['register'])){
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $nationality=$_POST['nationality'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password===$cpassword){
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
                 $fileNewName=uniqid("DP",true).".".$fileActualExt;
                 $destination='dp/'.$fileNewName;
                 $upload=move_uploaded_file($fileTmp,$destination);
                 if($upload){
                //    code for document
                $documentName=$_FILES['document']['name'];
                $documentType=$_FILES['document']['type'];
                $documentTmp=$_FILES['document']['tmp_name'];
                $documentErr=$_FILES['document']['error'];
                $documentSize=$_FILES['document']['size'];
                $documentExt=explode(".",$documentName);
                $documentActualExt=strtolower(end($documentExt));
                $DocumentallowedExt=array('pdf','docx');
                if(in_array($documentActualExt,$DocumentallowedExt)){
                    if($documentErr==0){
                      if($documentSize < 50000000000){
                     $documentNewName=uniqid("PDF",true).".".$documentActualExt;
                     $documentdestination='documents/'.$documentNewName;
                     $documentupload=move_uploaded_file($documentTmp,$documentdestination);
                     if($documentupload){
                        //  $int=mysqli_query($conn,"insert into testingimage(img_id,image) 
                        //  values(null,'".$destination."')");
                        //  if($int){
                        //     echo "Well done dear";
                        //  }else{
                        //     echo "oops! failed to insert";
                        //  }
                     }else{
                        ?>
                        <div class="alert">
                            <h4>Failed to upload your pdf Document to the destination</h4>
                        </div>
                        
                        <?php
                     }
                      }else{
                        ?>
                        <div class="alert">
                            <h4>The uploaded pdf Document file is too big</h4>
                        </div>
                        
                        <?php
                      }
                    }else{
                        ?>
                        <div class="alert">
                            <h4>Something went wrong while uploading your pdf Document file</h4>
                        </div>
                        
                        <?php
                    }
                }else{
                    ?>
                    <div class="alert">
                        <h4>Un supported pdf Document file format</h4>
                    </div>
                    
                    <?php
                }
                // document code ends



                    //  $int=mysqli_query($conn,"insert into testingimage(img_id,image) 
                    //  values(null,'".$destination."')");
                    //  if($int){
                    //     echo "Well done dear";
                    //  }else{
                    //     echo "oops! failed to insert";
                    //  }
                 }else{
                   ?>
                    <div class="alert">
                        <h4>Fail to upload to the destination</h4>
                    </div>
                    
                    <?php
                 }
                  }else{
                    ?>
                    <div class="alert">
                        <h4>The uploaded file is too big</h4>
                    </div>
                    
                    <?php
                  }
                }else{
                    ?>
                    <div class="alert">
                        <h4>Something went wrong while uploading your file</h4>
                    </div>
                    
                    <?php
                }
            }else{
                ?>
                <div class="alert">
                    <h4>Un supported file format</h4>
                </div>
                
                <?php
            }

        }else{
            ?>
                    <div class="alert">
                        <h4>Oops! Password does not mutch</h4>
                    </div>
                    
                    <?php
        }
       }
        ?>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="name" id="" autofocus placeholder="Enter Full Name" required title="Enter your full name">
            <input type="text" name="contact" placeholder="Ex: 0787293050">
            <input type="email" name="email" placeholder="example@gmail.com">
            <div class="radio">
                <input type="radio" name="gender" value="1" id=""><label for="gender">Male</label> <input type="radio" value="Female" name="gender" id="">Female
            </div>
            <label for="dp" class="lable">Profile Picture</label>
            <input type="file" name="file" id="imageUpload" accept="image/*" placeholder="Choose Your Profile">
            <label for="document" class="lable">Upload Your <span style="color:red; font-style:italic;">pdf</span> file that contains National ID, LC 1's Letter </label>
            <input type="file" name="document" placeholder="Select your pdf document">
            <select name="address" id="">
                <option value="">Select your Place of Residence</option>
                <?php 
                $sa=mysqli_query($conn,"select * from tbl_address");
                while($ar=mysqli_fetch_assoc($sa)){
                    ?>
<option value="<?php echo $ar['a_id']; ?>"><?php echo $ar['address']; ?></option>

<?php
                }

                ?>
            </select>

            <select name="nationality" id="">
                <option value="">Select your Country of Origin </option>
                <?php 
                $sa=mysqli_query($conn,"select * from tbl_nationality");
                while($ar=mysqli_fetch_assoc($sa)){
                    ?>
<option value="<?php echo $ar['n_id']; ?>"><?php echo $ar['nationality']; ?></option>

<?php
                }

                ?>
            </select>

            <input type="password" name="password" placeholder="Password" id="">
            <input type="password" name="cpassword" placeholder="Confirm Password" id="">
            <input type="submit" name="register" class="btn" value="Register Now">

        </form>
        <h5>I have changed my mind, <a href="index.php">Back home!</a></h5>
    </fieldset>
    </center>

</div>
</div>
<?php include 'includes/footer.php'; ?>