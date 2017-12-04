<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Cartoons-PLAY</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/index.css">
</head>
<body>
<ul class="topnav">
	<?php
    if (!isset($_SESSION['logged'])) { echo "<li><a class='active' href='#home'> <img class='proPic' src='../images/Profile_pic.png' alt='R_proPic'>";}
    else {echo "<li><a class='active' href='index.php'> <img class='proPic' src='".$_SESSION['photopath']."'>"; }
    echo "<a class='link' href='index.php'>TeleTubbie</a> <img class='redHand' src='../images/red_hand.png' alt='R_redHand'></a></li>";
	if (!isset($_SESSION['logged']))
	  {echo "<li><a class='active' href='in/signIn.php'> <img class='signIn' src='../images/sign_in.png' alt='R_signIn'></a></li>";}
	if (isset($_SESSION['logged'])) { echo "<li><a href='signOut.php'>Sign Out</a></li>";}//here picture of sign out
	echo "<li><a class='active' href='index.php'> <img class='menu' src='../images/menu.png' alt='R_menu'> </a></li>";
	?>
</ul>

<div class="row">
<!-- Search Bar -->
	<input type="search" name="search" placeholder="LET'S EXPLORE! ">
	<button type="submit" class="searchButton"><i class="fa fa-search"></i></button>

<!--here everything inside play page-->


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