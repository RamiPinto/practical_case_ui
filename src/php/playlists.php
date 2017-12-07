<?php
	session_start();
	if (!isset($_SESSION['logged']))
	{
		header('Location: in/signIn.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Cartoons-PLAYLISTS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/playlists.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
<!-- <ul class="topnav">
	<?php
 //    if (!isset($_SESSION['logged'])) { echo "<li><a class='active' href='#home'> <img class='proPic' src='../images/Profile_pic.png' alt='R_proPic'>";}
 //    else {echo "<li><a class='active' href='index.php'> <img class='proPic' src='".$_SESSION['photopath']."'>"; }
 //    echo "<a href='index.php'>TeleTubbie</a> <img class='redHand' src='../images/red_hand.png' alt='R_redHand'></a></li>";
	// if (!isset($_SESSION['logged']))
	//   {echo "<li><a class='active' href='in/signIn.php'> <img class='signIn' src='../images/sign_in.png' alt='R_signIn'></a></li>";}
	// if (isset($_SESSION['logged'])) { echo "<li><a href='signOut.php'>Sign Out</a></li>";}//here picture of sign out
	// echo "<li><a class='active' href='index.php'> <img class='menu' src='../images/menu.png' alt='R_menu'> </a></li>";
	?>
</ul> -->
<!-- <div class="row">

	<input type="search" name="search" placeholder="LET'S EXPLORE! ">
	<?php
 //    if (!isset($_SESSION['logged']))
	// echo "<button type='submit' class='searchButton'><i class='fa fa-search'></i></button>"; //link to anything
 //    else echo "<button type='submit' class='searchButton'><i class='fa fa-search'></i></button>"; //link to sign in
    ?>
</div> -->

<!--here everything inside playlists page-->

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Create a new playlist</h2>
    </div>
    <div class="modal-body">
    <form method="post" action="#" id="form">
    <br>
      <input type="text" name="title" id="title" placeholder="Enter the title of new playlist">
      <br>
      <input type="radio" name="type" id="type1" value="Private">
      <label for="type1">Private</label><br>
      <input type="radio" name="type" id="type2" value="Public">
      <label for="type2">Public</label><br>
      <input type="radio" name="type" id="type3" value="Collaborative list">
      <label for="type3">Collaborative list</label><br>
      <span id="result"></span>
      <input type="submit" class="button" name="add" id="add" value="Add"><br><br>
    </form>
    </div>
  </div>
</div>

<img src='../images/plus.png' id='addPlaylist'> Create playlist

<div id="listPlaylist"  >
	<div  id="myPlaylist">
		My Playlists

		<div id="listMy"> </div>

	</div>

	<div id="followPlaylist">
	    Following Playlists
		<div id="listFollow"> </div>
	</div>

</div>

<div id="currentPlaylist" style="float: right; margin-right: 500px; ">
	Current Playlists<br>
	   Select your playlist to see videos here!
	   <div id="videos"> </div>

</div>


  <!-- Footer -->
      <br>
        <p class="l"><a class="link" href="#news">Copyright</a></p><p class="l">|</p>
        <p class="l"><a class="link" href="#news">About Us</a></p><p class="l">|</p>
        <p class="l"><a class="link" href="#news">Contact</a></p>
        <br>
<script type="text/javascript" src="../script/playlists.js"></script>
</body>
</html>