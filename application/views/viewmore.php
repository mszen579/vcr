<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Venture Cafe Rotterdam - Talent Portal</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\main.css"> <!--this is for adding css file to the porject-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--this is for adding css file to the porject-->
</head>



<header>
		<div class="header">
    <div id=squar></dive>
    <div class="talnt">Talent Portal</div>
	 <img src="<?php echo base_url(); ?>assets\images\vc.png" alt="vc.png">
    <div class="list">
    <ul>
    <li class="dropdown">
    <a href="https://venturecaferotterdam.org/thursday-gatherings/future/" class="dropbtn">Thursday Gatherings</a>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">International</a>
    <div class="dropdown-content">
      <a href="https://venturecaferotterdam.org/innovation-visitor-bureau/">Innovation Visitor Bureau</a>
      <a href="https://venturecaferotterdam.org/startup-visa/">Startup Visa</a>
      <a href="https://venturecaferotterdam.org/venture-cafe-global-network/">Venture Cafe Global<br>Network</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Community</a>
    <div class="dropdown-content">
      <a href="https://venturecaferotterdam.org/news/">News</a>
      <a href="https://venturecaferotterdam.org/launchtime-podcast/">Launchtime Podcast</a>
      <a href="https://venturecaferotterdam.org/startup-celebrations/">Startup Celebrations</a>
      <a href="https://venturecaferotterdam.org/get-involved/">Get Involved</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="https://venturecaferotterdam.org/who-we-are/">About Us</a>
      <a href="https://venturecaferotterdam.org/team/">Team</a>
      <a href="https://venturecaferotterdam.org/credo/">Credo</a>
      <a href="https://venturecaferotterdam.org/sponsor/">Support Venture Cafe</a>
      <a href="https://venturecaferotterdam.org/contact/">Contact</a>
    </div>
   
  </li>
</ul>
</div>

</header>




<body>
    <div class="main-containter">
      <br>
      
        <div class="top-container">

 
   <!--///////////////////////////////////////////////////////////////////////////////////////// -->

        <div type="boxform">

    <div style="color:white; background-color:#FFA500; width:50%; border-radius:8px; text-align:center;"> <?= isset($error) ? $error : '' ?> </div> <!--this to echo the validation errors -->
  <div style="color:white; background-color:#3CB371; width:50%; border-radius:8px; text-align:center;"> <?= isset($noerror) ? $noerror : '' ?> </div> <!--this to echo the successful entry -->

            <h3 style="font-family:arial; color:#E06926; text-align: center">More info on the post </h3>

           	<?php
	if (isset($listings)){
		foreach ($listings as $key ) {
			?>
            <div class="viewpost">
            <h2><?= $key['title']?></h2>
            <h2><?= $key['description']?></h2>
            <hr>
            <h2>About the company</h2>
            <h3><?= $key['name']?> - <?= $key['type']?></h3>
            <h3><?= $key['about']?></h3>
            <hr>
            <h4>Contact them : </h4>
            <h4><?= $key['contact']?> - Email: <?= $key['email']?> </h4>
            <h4><?= $key['address']?></h4>
            </div>
            <?php			
		}
	}	?>
 <p>-----------------------------------------------------------------------------------------------------------------------------</p>  
         <!--///////////////////////////////////////////////////////////////////////////////////////// -->


<a href='/'><button class="buttonout">back to home page</button></a>


</body>



<footer class="footer">
<p>© Copyright 2018</p>
<a href="gotologregpage">Companies and Orgnizations</a>
<a href="https://venturecaferotterdam.org/credo/">Credo</a>
<a href="https://venturecaferotterdam.org/sponsor/">Support</a>
<a href="https://venturecaferotterdam.org/contact/">Contact</a>
<a href="https://twitter.com/VentureCafeRdam">
    <span class="fa fa-twitter"></span>
  </a>
  <a href="https://www.facebook.com/VentureCafeRotterdam/">
    <span class="fa fa-facebook"></span>
  </a>
  <a href="https://www.linkedin.com/company/venturecaferotterdam">
    <span class="fa fa-linkedin"></span>
  </a>
  <a href="https://www.instagram.com/venturecaferotterdam/">
    <span class="fa fa-instagram"></span>
  </a>
</footer>

</html>