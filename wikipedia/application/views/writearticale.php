<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Result</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<style>
			body {
				text-align: center;
				margin: auto;
                background-color:green;
			}
            li{
                font-size:19px;
                margin:5px;
                display:block;
                text-align:left;
            }
            #message{
                margin:25px;
            }
			#result {
				width: 500px;
                background-color:orange;
				margin: auto;
			}
            span{
                font-size:10px;
                color:blue;
                text-align:right;
            }

		</style>
	</head>

	<body>
	
		
            
			
			<h1>Welcome
			
			</h1>
			<h4>Write on Articale</h4>
			<li><a href="/"><button>Back</button></a></li>

			
				
					<form action="postMessage" method="post">
					   <label>Title</label>
						<textarea name="title" cols="50" rows="2"></textarea><br><br>
						<textarea name="articale" cols="50" rows="10"></textarea>
						<input type="hidden" name="id" value="<?= $_SESSION['id']?>">
						<input type="submit" name="submit" value="Post">
					</form>
			
			

				
				


			
			
		
	</body>

	</html>
