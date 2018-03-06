 <?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
    <script src="main.js"></script>
</head>
<body>
    

 
 <h3 style="font-family:arial; color:#E06926">VCR Admin LOGIN</h3>

<?= isset($logerror) ? $logerror : '' ?>

<form action="adminlog" method="POST">
   <input class='input' type="email" name="email-login" placeholder="E-mail">
   <br>
   <input class='input' type="password" name="password-login" placeholder="Password">
   <br>
   <br>
   <input class='button-login' type="submit" name="login" value="login">
</form>
<br>
<br>
</div>


</body>
</html>