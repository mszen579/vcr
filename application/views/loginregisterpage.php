<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Craigslist - Register Page</title>
    <style>

.button {
    background-color: #3E5C99;
    border: none;
    color: white;
    border-radius:4px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.input {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    </style>
</head>
<body>
    <div class="main-containter">
        <h2 style="text-align:center; font-family:arial; color:#3b5998">WELCOME TO Craigslist, IF YOU HAVE ACCOUNT PLEASE LOGIN, OR REGISTER TO START SELLING AND BUYING</h2>
        <div class="top-container">

 
   <!--///////////////////////////////////////////////////////////////////////////////////////// -->

        <div type="boxform">

  <div style="color:white; background-color:#FFA500; width:50%; border-radius:8px;"> <?= isset($error) ? $error : '' ?> </div> <!--this to echo the validation errors -->
  <div style="color:white; background-color:#3CB371; width:50%; border-radius:8px;"> <?= isset($noerror) ? $noerror : '' ?> </div> <!--this to echo the successful entry -->

            <h3 style="font-family:arial; color:#3b5998">SINGUP AREA</h3>

            <form action="register" method="POST" >
                <input class='input' type="text" name="firstname" placeholder="First Name">
                <br>
                <input class='input' type="text" name="lastname" placeholder="Last Name">
                <br>
                <input class='input' type="email" name="email" placeholder="E-mail">
                <br>
                <input class='input' type="password" name="password" placeholder="Password">
                <br>
                <input class='input' type="password" name="passwordConfirm" placeholder="Confirm Password">
                <br>
                <input class='button' type="submit" value="Register" placeholder="">
            </form>
        </div>
    </div>

 <p>-----------------------------------------------------------------------------------------------------------------------------</p>  
         <!--///////////////////////////////////////////////////////////////////////////////////////// -->
      
         <h3 style="font-family:arial; color:#3b5998">LOGIN AREA</h3>

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

<a href='/'><button>back to home page</button></a>


</body>
</html>