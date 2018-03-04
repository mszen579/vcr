<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<title>Craigslist</title>
		<link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
		
	</head>

	<body>
		<h1>Start your selling here...</h1> 
		<img src="<?php echo base_url(); ?>assets/vc.png" alt="Venture Cafe Rotterdam"> <!--this is for adding image to the porject-->


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
