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
		<h1>Talent Portal - Company Profile </h1> 
		<img src="<?php echo base_url(); ?>assets/vc.png" alt="Venture Cafe Rotterdam"> <!--this is for adding image to the porject-->


	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->

			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange;">Welcome: <?=$this->session->userdata('name')?></h1>	
					<?php }?>
			</div>
			<h2>Your recent activites</h2>
	<?php
	if (isset($listings)){
		
		foreach ($listings as $key ) {
			?>
            
			<table style="color:white; background-color:#5E5E5E ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td><h4 style="color:white">image: </h4><h4 style="color:orange"><?= $key['image']?></h4></td>
			
			<td><h4 style="color:white">Post title:</h4><h4 style="color:orange"><?= $key['title']?></h4></td>
			
			<td><h4 style="color:white">Post description:</h4><h4 style="color:orange"><?= $key['description']?></h4></td>
			
			<td><h4 style="color:white">Post status:</h4><h4 style="color:orange"><?= $key['status']?></h4></td>
			
			<td><h4 style="color:white">Created at:</h4><h4 style="color:orange"><?= $key['created_at']?></h4></td>
			<br>
			</tr>
			</table>
<?php			
		}
	}	?>
    <ul>
    <li style="color:white; font-size:36px;">Navigation</li>
    <li><a href="addpost"><button class='button-company'>Add a vaccancie</button></li>
    <li><a href="editprofile"><button class='button-company'>Edit your profile</button></li>
    </ul>
					<?php if (NULL !== $this->session->userdata('id')) {?>
					<a href="logout"><button class='button-out' type="submit">Logout</button></a>	
					<?php }?>
	<br><br>


	</body>

	</html>
