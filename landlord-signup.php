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

        }else{
            ?>
                    <div class="alert">
                        <h4>Oops! Password does not mutch</h4>
                    </div>
                    
                    <?php
        }
       }
        ?>
        <form method="post">
            <input type="text" name="name" id="" autofocus placeholder="Enter Full Name" required title="Enter your full name">
            <input type="text" name="contact" placeholder="Ex: 0787293050">
            <input type="email" name="email" placeholder="example@gmail.com">
            <div class="radio">
                <input type="radio" name="gender" value="1" id=""><label for="gender">Male</label> <input type="radio" value="Female" name="gender" id="">Female
            </div>
            <label for="dp" class="lable">Profile Picture</label>
            <input type="file" name="dp" id="imageUpload" accept="image/*" placeholder="Choose Your Profile">
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