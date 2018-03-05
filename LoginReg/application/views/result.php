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
        <a href="logout">
				<button type="submit">Logout</button>
			</a>
		<div class="main-containter">
            
			<?php $userinfo = $this->session->all_userdata(); ?>
			<h1>Welcome
				<?= $userinfo['first_name'] ?>
			</h1>
			<h4>Messages:</h4>

			<div id="result">
				<div>
					<form action="post" method="post">
						<textarea name="message" id="message" cols="50" rows="10"></textarea>
						<input type="submit" name="submit" value="Post">
					</form>
				</div>

				<div>
					<ul>
                        <?php foreach ($posts as $key) { ?>
                           <li><?= $key['message'] . "  <span> " . $key['first_name'] . "  </span> " ?>
						   
						   <a href="show/<?= $key['id'] ?>"><button type="submit">Show</button></a>
						   </li>
                           <?php

																									}
																									?>
                        
					</ul>
				</div>


			</div>
			
		</div>
	</body>

	</html>
