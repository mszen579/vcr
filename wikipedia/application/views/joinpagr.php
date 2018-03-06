<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>
	<h1>Join Us!</h1>
	<div>
		<form action="login" method="post">
	    	<input type="text" name="username" placeholder="User_name"><br>
	        <input type="password" name="password" placeholder="Password"><br>
			<input type="submit" value="Login">
		</form>
		<?php if(isset($logerror)){
			echo $logerror;}?>
    </div>
    <br>
    <div>
		<?php if(isset($errors)){
			echo $errors;}?>
		<form action="register" method="post">
			<input type="text" name="username" placeholder="User_name"><br>
			<input type="email" name="email" placeholder="Email"><br>
			<input type="text" name="age" placeholder="Your_Age"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="confirmpassword" placeholder="Confirmpassword"><br>
			<input type="submit" value="Register">
		</form>
	</div>


</body>
</html>