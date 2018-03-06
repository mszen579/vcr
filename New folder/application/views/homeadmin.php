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

<div style="color:white; background-color:#FFA500; width:50%; border-radius:8px;"> <?= isset($error) ? $error : '' ?> </div> <!--this to echo the validation errors -->
<div style="color:white; background-color:#3CB371; width:50%; border-radius:8px;"> <?= isset($noerror) ? $noerror : '' ?> </div> <!--this to echo the successful entry -->
                <div>
                <?php if ( $this->session->userdata('admin_level')==1) {?>
                <h2>Add new admin</h2>
                        <form action="registeradmin" method="POST"> 
                                <input class='input' type="text" name="name" placeholder="name">
                                <br>
                                <input class='input' type="email" name="email" placeholder="email">
                                <br>
                                <input class='input' type="password" name="password" placeholder="password">
                                <br>
                                <input class='input' type="password" name="passwordConfirm" placeholder="Retype your password">
                                <br>
                                    <select class='input' name="level">
                                    <option value="0">Normal Admin</option>
                                    <option value="1">Super Admin</option>
                                    </select>
                                <br>
                                <input class='button' type="submit" name="Create" value="Create">
                        </form>
                <?php }?>
                </div>
                <h1>This is the home page for the admin</h1>
<h2>Pending Posts</h2>
<?php
 if (isset($message)) {
    echo $message;
}
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
			<table style="color:#e06a26; background-color:#434343 ;width:50%; border-radius:4px; text-align:center; margin:auto; ">
			<tr>
			<td>image:[Assuming an image is posted]<?= $key['image']?></td>
			<td>Post title:<?= $key['title']?></td>
			<td>Post description:<?= $key['description']?></td>
            <input type='hidden' value=<?= $key['id']?>>
            <td><a href="editpost/<?= $key['id'] ?>"><button class='button-out' type="edit">Edit</button></a></td>
            <td><a href="approvepost/<?= $key['id'] ?>"><button class='button-out' type="approve">Approve</button></a></td>
            <td><a href="rejectpost/<?= $key['id'] ?>"><button class='button-out' type="reject">Reject</button></a></td>
			</tr>
			</table>
<?php			
		}
	}	?>	

            <a href="viewcompanies"><button class='button-out' type="view">View Companies and Partners</button></a>
            <a href="viewposts"><button class='button-out' type="view">View All posts</button></a><br>
            <a href="logoutcp"><button class='button-out' type="submit">Logout</button></a>	
            

</body>
</html>




					
					