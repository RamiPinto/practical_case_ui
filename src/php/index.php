<?php
	session_start();

	//add to all pages wich can be se by logged user
	if (isset($_SESSION['logged']))
	{
		//photo
	    //Here we can change picture and login of the user on all webpages in corresponding places depends on design 
	    //So here is everything what the user can see when he is logged
		// header('Location: in/index.php');
		// exit();
	}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Cartoons-HOME</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/index.css">
</head>
<body>
<!--<p>Home page</p><br><br>-->
    <ul class="topnav">
	  <li><a class="active" href="#home"> <img class="proPic" src="../images/Profile_pic.png" alt="R_proPic"> TeleTubbie <img class="redHand" src="../images/red_hand.png" alt="R_redHand"></a></li>

<!--We need also picture of Sign out here
<a href="signOut.php">Sign Out</a>-->

	  <li><a class="active" href="in/signIn.php"> <img class="signIn" src="../images/sign_in.png" alt="R_signIn"></a></li>
	  <li><a class="active" href="#home"> <img class="menu" src="../images/menu.png" alt="R_menu"> </a></li>
   </ul>

<div class="row">
<!-- Search Bar -->
	<input type="search" name="search" placeholder="LET'S EXPLORE! ">
	<button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
<!-- Menu 1 -->
	    <div class="col-4 col-m-12">
	        <h2>RECOMMENDED VIDEOS</h2>
	    </div>
<!--we dont have search system , it will be just link to our home page for exammple. -->
	    <form action="#">
		    <div class="col-6 col-m-12">   
		    </div>
		    <div class="col-6 col-m-12">
		    </div>
	   </form>
<hr>
<!-- Menu 2 -->
	    <div class="col-6 col-m-12">
	       <h2>MOVIES</h2>
	    </div>

<!-- What this form is for? -->
    <form action="#">
    <div class="col-6 col-m-12">
       <p> </p>
       <br><br><br><br><br><br><br><br>

    </div>
    </form>

<hr>
</div>

  <!-- Footer -->
    <div class="footer">
      <br>
        <p class="l"><a class="link" href="#news">Copyright</a></p><p class="l">|</p>
        <p class="l"><a class="link" href="#news">About Us</a></p><p class="l">|</p>
        <p class="l"><a class="link" href="#news">Contact</a></p>
        <br>
    </div>
</body>
</html>