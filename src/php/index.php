<?php
	session_start();
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
	<script src="../script/index.js"></script>
</head>

<body>
<!--<p>Home page</p><br><br>-->
<ul class="topnav">
	<?php
    if (!isset($_SESSION['logged'])) { echo "<li><a class='active' href='#home'> <img class='proPic' src='../images/Profile_pic.png' alt='R_proPic'>";}
    else {echo "<li><a class='active' href='index.php'> <img class='proPic' src='".$_SESSION['photopath']."'>"; }
    echo "<li><a href='index.php'>TeleTubbie</a></li> <a><li><img class='redHand' src='../images/red_hand.png' alt='R_redHand'></a></li>";
    echo "<li><a><input type='search' name='search' placeholder='LET\\'S EXPLORE! '></a></li>";
	echo "<li><a><button type='submit' class='searchButton'><i class='fa fa-search'></i></button></a></li>";
	if (!isset($_SESSION['logged']))
	  {echo "<li><a class='active' href='in/signIn.php'> <img class='signIn' src='../images/sign_in.png' alt='R_signIn'></a></li>";}
	if (isset($_SESSION['logged'])) { echo "<li><a href='signOut.php'>Sign Out</a></li>";}//here picture of sign out
	echo "<li><a class='active' href='index.php'> <img class='menu' src='../images/menu.png' alt='R_menu'> </a></li>";
	?>
</ul>

<div class="row">
<!-- Search Bar 
	<input type="search" name="search" placeholder="LET'S EXPLORE! ">
	<button type="submit" class="searchButton"><i class="fa fa-search"></i></button> -->
<!-- Menu 1 -->
	    <div class="col-12 col-m-12">
	        <h2>RECOMMENDED VIDEOS</h2>
	        <a href="play.php"><img class='videoThumbnail' id="spongebobCartoon" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	        <a href="play.php"><img class='videoThumbnail' id="powerrangerCartoon" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	        <a href="play.php"><img class='videoThumbnail' id="bobthebuilderCartoon" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	        <a href="play.php"><img class='videoThumbnail' id="tomandjerryCartoon" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	        <a href="play.php"><img class='videoThumbnail' id="thomasthetrainCartoon" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	        <!--<iframe width="180" height="128" src="https://www.youtube.com/embed/Q-W1kj4vHRk" frameborder="0" allowfullscreen></iframe>-->
	        <!--<iframe width="180" height="128" src="https://www.youtube.com/embed/ghU3y03ZYn0" frameborder="0" allowfullscreen></iframe>-->
	        <!--<iframe width="180" height="128" src="https://www.youtube.com/embed/-gwLBCoeJ14" frameborder="0" allowfullscreen></iframe>-->
	        <!--<iframe width="180" height="128" src="https://www.youtube.com/embed/wL2QbYey1Nk" frameborder="0" allowfullscreen></iframe>-->
	        <!--<iframe width="180" height="128" src="https://www.youtube.com/embed/OzbGrnw3Ofo" frameborder="0" allowfullscreen></iframe>-->


	        <!--<a href="play.php">play</a>
	        <a href="playlists.php">playlists</a>-->
	    </div>
	    
<!--we dont have search system , it will be just link to our home page for example. -->
	   
<!-- Menu 2 -->
	    <div class="col-12 col-m-12">
	       <h2>MOVIES</h2>
	       <a href="play.php"><img class='videoThumbnail' id="bobthebuilderMovie" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	       <a href="play.php"><img class='videoThumbnail' id="rudolphreindeerMovie" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	       <a href="play.php"><img class='videoThumbnail' id="frostysnowmanMovie" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	       <a href="play.php"><img class='videoThumbnail' id="babestoylandMovie" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	       <a href="play.php"><img class='videoThumbnail' id="casperghostMovie" src='../images/spongebobSquarepants.webp' alt='R_vidThumbnail'></a>
	       <!-- <iframe width="180" height="240" src="https://www.youtube.com/embed/pX9irV_3C4o" frameborder="0" allowfullscreen></iframe>
	       <iframe width="180" height="240" src="https://www.youtube.com/embed/gNXOSyZG04I" frameborder="0" allowfullscreen></iframe>
	       <iframe width="180" height="240" src="https://www.youtube.com/embed/miVpeR6lrLg" frameborder="0" allowfullscreen></iframe>
	       <iframe width="180" height="240" src="https://www.youtube.com/embed/BT0V3EoQCgA" frameborder="0" allowfullscreen></iframe>
	       <iframe width="180" height="240" src="https://www.youtube.com/embed/QvYXpIURigc" frameborder="0" allowfullscreen></iframe> -->
	    </div>

<!-- What this form is for? -->
    

</div>

  <!-- Footer -->
   <!--  <div class="footer">
        <p class="l"><a class="link" href="#news">Copyright</a></p><p class="l">|</p>
        <p class="l"><a class="link" href="#news">About Us</a></p><p class="l">|</p>
        <p class="l"><a class="link" href="#news">Contact</a></p>
    </div> -->
</body>
</html>