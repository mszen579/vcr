<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ShowPage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<style>
			body {
				text-align: center;
				margin: auto;
                background-color:lightblue;
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
                background-color:lightgreen;
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
      
      <h3>User: <?= $onemessage['first_name'] . " " . $onemessage['last_name'] ?></h3>
      <h3>Message: <?= $onemessage['message'] ?> </h3>

      <a href="/"><button type="submit">Back</button></a>
      <a href="/delete/<?= $onemessage['id'] ?>"><button type="submit">Delete</button></a>


	</body>

	</html>
