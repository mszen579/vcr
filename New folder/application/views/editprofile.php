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
		<h1>Talent Portal- Edit Profile </h1> 
		<img src="<?php echo base_url(); ?>assets/vc.png" alt="Venture Cafe Rotterdam"> <!--this is for adding image to the porject-->


	 <div style="color:white; background-color:red; width:15%; border-radius:4px; text-align:center; margin:auto; "> <?= isset($errorlogin) ? $errorlogin : '' ?> </div> <!--this to echo the validation errors -->

			<div> 
			<?php if (NULL !== $this->session->userdata('id')) {?>
				<h1 style="color:darkorange;">Welcome: <?=$this->session->userdata('name')?></h1>	
					<?php }?>
                    <h2>current profile information:</h2>
                    <?php
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
			<table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td><?= $key['name']?></td>
			<td><?= $key['email']?></td>
			<td><?= $key['address']?></td>
            <td><?= $key['contact']?></td>
            <td><?= $key['about']?></td>
			</tr>
			</table>

			<form action='editnewinfo' method='post'>
			<h2>Edit your information</h2>
			<input class='input' type="text" name="email" value=<?= $key['email']?>>
			<input class='input' type="text" name="address" value=<?= $key['address']?>>
			<input class='input' type="text" name="contact" value=<?= $key['contact']?>>
			<input class='input' type="text" name="about" value=<?= $key['about']?>>
			<br>
            <button class='button-out' type="submit">Edit</button>
			</form>
        <?php }} ?>
					<?php if (NULL !== $this->session->userdata('id')) {?>
					<a href="logout"><button class='button-out' type="submit">Logout</button></a>	
					<?php }?>
	<br><br>


	</body>

	</html>