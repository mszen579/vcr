<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View All companies and Partners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
    <script src="main.js"></script>
</head>
<body>
 <h3 style="font-family:arial; color:#E06926">VCR CP/View All companies and Partners</h3>
 <?php
 if (isset($message)) {
    echo $message;
}
if (isset($listings)){
foreach ($listings as $key)  { 
    ?> 
    <table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto;">
    <tr>
    <td>Company id:<?= $key['id']?></td>
    <td>Company name:<?= $key['name']?></td>
    <td>Company email:<?= $key['email']?></td>
    <td>Company Address:<?= $key['address']?></td>
	<td>Company Type:<?= $key['type']?></td>
    <td><a href="deletecompany/<?= $key['id']?>"<button class='button-out' type="delete">Delete</a></button></td>
	</tr>
    </table>

<?php

}

}
?>



</body>
</html>