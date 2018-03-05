<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style>
    body{
        text-align:center;
    }
    </style>
</head>
<body>
    <div class="main-containter">
        <h1>Login and Register</h1>
        <div class="top-container">
            <h2>Login:</h2>
             <?= isset($logerror) ? $logerror : '' ?>
            <form action="login" method="POST">
                <input type="text" name="email-login" placeholder="E-mail">
                <br>
                <br>
                <input type="password" name="password-login" placeholder="Password">
                <br>
                <br>
                <br>
                <input type="submit" name="login">
            </form>
            <br>
            <br>
        </div>
      
            <!-- shortcut of if statement, if it is exist then echo it, or echo nothing -->

        <div type="mid-container">
  <div style="color:red"> <?= isset($error) ? $error : '' ?> </div> 
            <h2> Register Form:</h2>
            <form action="register" method="POST" >
                <input type="text" name="firstname" placeholder="First Name">
                <br>
                <br>
                <input type="text" name="lastname" placeholder="Last Name">
                <br>
                <br>
                <input type="email" name="email" placeholder="E-mail">
                <br>
                <br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <br>
                <input type="password" name="passwordConfirm" placeholder="Confirm Password">
                <br>
                <br>
                <input type="submit" name="" placeholder="">
            </form>
        </div>
    </div>
</body>
</html>