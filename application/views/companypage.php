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
		<h1>Talent Portal- this company page </h1> 
		<img src="<?php echo base_url(); ?>assets/vc.png" alt="Venture Cafe Rotterdam"> <!--this is for adding image to the porject-->


	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->

			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange;">Welcome: <?=$this->session->userdata('name')?></h1>	
					<?php }?>
			</div>
	<?php
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
            <h2>You recent activites : </h2>
			<table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td>image:[Assuming an image is posted]<?= $key['image']?></td>
			<td>Post title:<?= $key['title']?></td>
			<td>Post description:<?= $key['description']?></td>
			</tr>
			</table>
<?php			
		}
	}	?>
    <ul>
    <li>Settings:</li>
    <li><a href="addpost">add a post</li>
    <li><a href="editprofile">Edit profile</li>
    </ul>
					<?php if (NULL !== $this->session->userdata('id')) {?>
					<a href="logout"><button class='button-out' type="submit">Logout</button></a>	
					<?php }?>
	<br><br>


	</body>

	</html>
