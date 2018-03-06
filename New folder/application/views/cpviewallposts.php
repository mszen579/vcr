<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View All Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
    <script src="main.js"></script>
</head>
<body>
 <h3 style="font-family:arial; color:#E06926">VCR CP/View All Posts</h3>
 <?php
if (isset($listings)){
foreach ($listings as $key)  { 
    ?> 
    <table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td>image:[Assuming an image is posted]<?= $key['image']?></td>
			<td>Post title:<?= $key['title']?></td>
			<td>Post description:<?= $key['description']?></td>
            <td>Post status:<?= $key['status']?></td>
            <input type='hidden' value=<?= $key['id']?>>
            <td><button class='button-out' type="submit">delete</button></td>
			</tr>
			</table>
<?php

}

}
?>



</body>
</html>