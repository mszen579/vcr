<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8" />
		<title>Venture Cafe Rotterdam- Talent Portal</title>
		<link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
		
	</head>

	<body>
		<h1>Talent Portal- Add post </h1> 
		<img src="<?php echo base_url(); ?>assets/vc.png" alt="Venture Cafe Rotterdam"> <!--this is for adding image to the porject-->


	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->
<div style="color:white; background-color:#FFA500; width:50%; border-radius:8px;"> <?= isset($error) ? $error : '' ?> </div> <!--this to echo the validation errors -->
<div style="color:white; background-color:#3CB371; width:50%; border-radius:8px;"> <?= isset($noerror) ? $noerror : '' ?> </div> <!--this to echo the successful entry -->
			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange;">Welcome: <?=$this->session->userdata('name')?></h1>	
					<?php }?>
                
                <form action='insertingpost' method='post'>
                <label>Post Title</label><br><br>
                <input class='input' type="text" name="title" placeholder="Post Title">
                <label>Description</label><br><br>
                <input class='input' type="text" name="description" placeholder="Description">
                <label>Tag</label><br><br>
                
                <select class='input' name="tag">
                    <option value="na">N/A</option>
                    <option value="growth">Growth</option>
                    <option value="international">International</option>
                    <option value="talent">Talent</option>
                    <option value="city">City</option>
                    <option value="culture">Culture</option>
                    <option value="digital">Digital</option>
                    <option value="community">Community</option>
                    </select>


                <label>Language</label><br><br>
                <input class='input' type="text" name="language" placeholder="Language">
                <label>Start Date</label><br><br>
                <input class='input' type="date" name="startdate" placeholder="Start Date">
                <label>End Date</label><br><br>
                <input class='input' type="date" name="enddate" placeholder="End Date">
                <label>Link</label><br><br>
                <input class='input' type="text" name="link" placeholder="Link">
                <label>Number of vacancies</label><br><br>
                <input class='input' type="number" name="vacanciesnum" min="1"  placeholder="Number of available vacancies ">
                <label>Filled positions</label><br><br>
                <input class='input' type="number" name="filledposition"  min="1" placeholder="Filled  Positions"><br>
                <input class="button-backtohome" type="file" name="image" accept="image/*"><br>
                <input class='button-company' type="submit" name="add vaccancie" value="Add vaccancie"><br>
                </from>
                </div>
                
                <a href="logout"><button class='button-out' type="submit">Logout</button></a>
                <div>
                    <a href="gobacktoyourprofile"><button class='button-out' type="submit">Back to your profile</button></a>
                </div>
	</body>
      
	</html>