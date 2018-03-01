<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<title>Craigslist</title>
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<style>
			body {
				text-align: center;
				margin: auto;
                background-color:lightgray;
			}
            li{
                font-size:19px;
                margin:5px;
                display:block;
                text-align:left;
				color:darkgray;
            }
            #message{
                margin:25px;
            }
			#box {
				width: 900px;
                background-color:#3E5C99;
				margin: auto;
				border-radius:8px;
			}

			.button-post {
			background-color: lightgray;
			border: none;
			color: gray;
			border-radius:4px;
			padding: 8px 15px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			box-shadow: 1px 2px orange;
			}

			.button-out {
			background-color: orange;
			border: none;
			color: white;
			border-radius:4px;
			padding: 8px 15px;
			text-align: center;
			text-decoration: none;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			}

			.button-login {
			background-color: #75DB1B;
			border: none;
			color: white;
			border-radius:4px;
			padding: 8px 15px;
			text-align: center;
			text-decoration: none;
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

			.textarea{
			width:50%;
			border:darkgray 3px solid;
			border-radius:8px;
			margin:auto;
			color: #3b5998;
			}
		</style>
	</head>

	<body>
		<h1>Start your selling here...</h1> 
	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->
	<?php $userinfo = $this->session->all_userdata(); ?>
			<div>
		<h1 style="color:darkorange;">Welcome:
		<?= $userinfo['firstname'] .' ' .$userinfo['lastname'] .'    Your user ID is: ' .$userinfo['id'] ?> &nbsp; &nbsp;				

			</div>
					<?php if (NULL !== $this->session->userdata('id')) {?>
					<a href="logout"><button class='button-out' type="submit">Logout</button></a>	
					<?php }?>
	
	<a href="gotologregpage"><button class='button-login'>Login/Register</button></a>


	</body>

	</html>
