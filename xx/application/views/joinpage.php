<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join Page</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if (isset($logerror)) {
        echo $logerror;
    }
    ?>
    <div>
        <form action="login" method="post">
            <input type="email" name="email" placeholder="Email"> <br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <br><br>
    <div>
    <?php if (isset($errors)) {
        echo $errors;
    }
    ?>
        <form action="register" method="post">
            <input type="text" name="firstname" placeholder="First Name"><br>
            <input type="text" name="lastname" placeholder="Last Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="confirmpassword" placeholder="Confirmpassword"><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>