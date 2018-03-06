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
    <h1>Add page!</h1>
    <?php if(isset ($errors)){
        echo "$errors";}?>
        <?php if(isset($_SESSION['id'])) {
          echo $_SESSION['id'];
        }
        ?>
 <form action="addlisting" method="post">
   <input type="text" name="title" placeholder="title" >
   <input type="text" name="description" placeholder="description">
   <input type="number" name="price" placeholder="price">
   <input type="text" name="contact" placeholder="contact">
   <input type="text" name="location" placeholder="location">
   <input type="text" name="id" value="<?= $_SESSION['id']?>">
   <input type="submit" value="Add Listing">
 </form>
	
</body>
</html>