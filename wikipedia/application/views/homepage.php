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
		<?php echo "Hello"." ". $_SESSION['username']?>
		<?php } ?>
	
	
		
	<h1>Wikipedia</h1>
	<?php
	 foreach ($details as $key){
         echo $key['title']."<br>";}?>
        
	  
	<li><a href="/"><button>Back</button></a></li>
	<ul>
		<li><a href="join">Login|Registeration</a></li><br><br>
		<li><a href="postarticale">Write Articale</a></li>
	</ul>

</body>
</html>