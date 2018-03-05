<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<title>Venture Cafe - Talent Portal</title>
		<link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
		
	</head>

	<body>
		<h1>Talent Portal- Add post </h1> 
		<img src="<?php echo base_url(); ?>assets/vc.png" alt="Venture Cafe Rotterdam"> <!--this is for adding image to the porject-->


	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->

			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange;">Welcome: <?=$this->session->userdata('name')?></h1>	
					<?php }?>
                
                <form action='insertingpost' method='post'>
                <label>Post Title</label><br>
                <input class='input' type="text" name="title" placeholder="Post Title">
                <label>Description</label><br>
                <input class='input' type="text" name="description" placeholder="Description">
                <label>Tag</label><br>
                <input class='input' type="text" name="tag" placeholder="tag">
                <label>Language</label><br>
                <input class='input' type="text" name="language" placeholder="Language">
                <label>Start Date</label><br>
                <input class='input' type="date" name="startdate" placeholder="Start Date">
                <label>End Date</label><br>
                <input class='input' type="date" name="enddate" placeholder="End Date">
                <label>Link</label><br>
                <input class='input' type="text" name="link" placeholder="Link">
                <label>Number of vacancies</label><br>
                <input class='input' type="number" name="vacanciesnum" placeholder="Number of available vacancies ">
                <label>Filled positions</label><br>
                <input class='input' type="number" name="filledposition" placeholder="Filled  Positions">
                <input class="button-backtohome" type="file" name="image" accept="image/*">
                <input class='button' type="submit" name="login" value="login">
                </from>
	</body>

	</html>