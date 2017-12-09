<?php
	  session_start();
	  date_default_timezone_set('Europe/Madrid');
	  include 'php/commentForm.php';
	  require_once 'php/connect.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Cartoons-PLAY</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/play_video.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
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
	<?php
    if (!isset($_SESSION['logged']))
	echo "<button type='submit' class='searchButton'><i class='fa fa-search'></i></button>"; //link to anything
    else echo "<button type='submit' class='searchButton'><i class='fa fa-search'></i></button>"; //link to sign in
    ?>
<!--here everything inside play page-->

<div id="playContent">
	
<div id="mainVideo">
	<div id="video">
		
	</div>
	<div id="informVideo">
		
	</div>
	<div id="comments">
		<?php  
            echo "<form method='post' action='php/setComment.php' id='form-set'>
                  <input type='hidden' name='nickname' id='nickname' value='nicknameuser'> 
                  <input type='hidden' name='date' id='date' value='".date('Y-m-d H:i:s')."'>
                  <input type='hidden' name='idVideo' id='idVideo' value='idVideo'>
                  <textarea name='message' id='commentMessage' placeholder='Write a comment...'></textarea><br><br>
                  <button class='button' id='commentButton' type='submit' name='commentSubmit'>Comment</button>
                  <p id='form-message'> </p>
                  </form>";
            echo "<div class='box' id='box'></div>";
            echo "<button class='btn_more' id='btn_more'>More comments</button>";
            ?>
	</div>

<div id="videoRandom">
	

</div>


</div>
</div>
    <script type="text/javascript" src="../script/play_video.js"></script>
</body>
</html>