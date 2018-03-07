<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Show filtered posts</title>
	</head>

	<body>
<h3 style="font-family:arial; color:#E06926">View filtered Posts</h3>
 <?php
if ($post !== NULL){
foreach ($post as $key)  { 
    ?> 
    <table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td>Image: <?= $key['image']?></td>
			<td>Post title:<?= $key['title']?></td>
			<td>Post description:<?= $key['description']?></td>
            <td>Post status:<?= $key['status']?></td>
            <input type='hidden' value=<?= $key['id']?>>
			</tr>
			</table>
<?php
}
}
?>
<a href='http://localhost'>back to homepage</a>

	</body>

	</html>