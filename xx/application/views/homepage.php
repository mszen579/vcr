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
<body style="background-color: orange;text-align: center;">
	
	<?php if(isset($_SESSION['id'])){?>
		<a href="/logout"><button>LogOut</button></a>
		<?php echo "Hello"." ". $_SESSION['first_name']?>
		<?php } ?>
		
	<h1>helloCraiglist</h1>
	<ul>
		<li><a href="join">Login|Registeration</a></li>
		<li><a href="">Write Articale</a></li>
	</ul>

</body>
</html>