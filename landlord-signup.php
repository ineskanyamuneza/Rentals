<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="main">
    <center>
    <fieldset>
        <legend><img src="images/user.jpeg" alt="" width="100px" height="100px"></legend>
        <form method="post">
            <input type="text" name="name" id="" autofocus placeholder="Enter Full Name" required title="Enter your full name">
            <input type="text" name="contact" placeholder="Ex: 0787293050">
            <input type="email" name="email" placeholder="example@gmial.com">
            <input type="file" name="dp" placeholder="Choose Your Profile">
            <input type="file" name="document" placeholder="Select your pdf document">
            <select name="address" id="">
                <option value="">Select your Place of Residence</option>
                <option value="">Kabalagala</option>
                <option value="">Kampala</option>
            </select>

            <div class="radio">
                <input type="radio" name="gender" value="1" id="">Male <input type="radio" value="Female" name="gender" id="">Female
            </div>

            <select name="nationality" id="">
                <option value="">Select your Country of Origin </option>
            </select>

            <input type="text" name="password" placeholder="Password" id="">
            <input type="text" name="cpassword" placeholder="Confirm Password" id="">
            <input type="submit" class="btn" value="Register Now">


        </form>
        <h5>I have changed my mind, <a href="index.php">Back home!</a></h5>
    </fieldset>
    </center>

</div>
</div>
<?php include 'includes/footer.php'; ?>