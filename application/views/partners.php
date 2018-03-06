<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Craigslist - Register Page</title>
<link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
</head>
<body>
    <div class="main-containter">
        <h2 style="text-align:center; font-family:arial; color:#5E5E5E">If You Have Account Please Login, Or Register To Start Posting</h2>
        <div class="top-container">

 
   <!--///////////////////////////////////////////////////////////////////////////////////////// -->

        <div type="boxform">

    <div style="color:white; background-color:#FFA500; width:50%; border-radius:8px;"> <?= isset($error) ? $error : '' ?> </div> <!--this to echo the validation errors -->
  <div style="color:white; background-color:#3CB371; width:50%; border-radius:8px;"> <?= isset($noerror) ? $noerror : '' ?> </div> <!--this to echo the successful entry -->

            <h3 style="font-family:arial; color:#E06926">SINGUP AREA</h3>

            <form action="register" method="POST" enctype='multipart/form-data'>
                <input class='input' type="text" name="name" placeholder="name">
                <br>
                <input class='input' type="email" name="email" placeholder="email">
                <br>
                <input class='input' type="password" name="password" placeholder="password">
                <br>
                <input class='input' type="password" name="passwordConfirm" placeholder="retype your password">
                <br>
                <input class='input' type="text" name="address" placeholder="company address">
                <br>
                    <select class='input' name="type">
                    <option value="Startup">Startup</option>
                    <option value="Service provider">Service provider</option>
                    <option value="Government">Government</option>
                    <option value="Academia">Academia</option>
                    <option value="Corporate">Corporate</option>
                    </select>
                <br>
                <input class='input' type="text" name="contact" placeholder="contact">
                <br>
                <input class='input' type="text" name="about" placeholder="about the company">
                <select class='input' name="trusted">
                       <option value="company">Company</option>
                       <option value="trusted">Trusted Educational Partner</option>
               </select>
                <br>
                <label>Image should not excceed 512KB and name shouldnot contain charecters or spaces</label> <br>
                <input class="button-backtohome" type="file" name="image">
                <input class='button' type="submit" name="register" value="Register">
            </form>
        </div>
    </div>

 <p>-----------------------------------------------------------------------------------------------------------------------------</p>  
         <!--///////////////////////////////////////////////////////////////////////////////////////// -->
      
         <h3 style="font-family:arial; color:#E06926">LOGIN AREA</h3>

<?= isset($logerror) ? $logerror : '' ?>

<form action="login" method="POST">
   <input class='input' type="email" name="email-login" placeholder="E-mail">
   <br>
   <input class='input' type="password" name="password-login" placeholder="Password">
   <br>
   <br>
   <input class='button' type="submit" name="login" value="login">
</form>
<br>
<br>
</div>
<p>--------------------------------------------------------------------------------------------------------------------------------</p>

<a href='/'><button class="button-backtohome">back to home page</button></a>


</body>
</html>