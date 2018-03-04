 <?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type = "text/css" href = "<?php echo base_url() ?>assets/main.css"/> <!--this is for adding css file to the porject-->
    <script src="main.js"></script>
</head>
<body>

                <div> 
                    <?php $loginfoadmin = $this->session->all_userdata(); ?>
                    <div>
                    <h1 style="color:darkorange;">Welcome:
                    <?= $loginfoadmin['admin_name']  .'    Your user ID is: ' .$loginfoadmin['admin_id'] ?> &nbsp; &nbsp;		

                </div>

    <h1>This is the home page for the admin</h1>

            
            <a href="logoutcp"><button class='button-out' type="submit">Logout</button></a>	
            

</body>
</html>



