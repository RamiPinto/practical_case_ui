<?php
	session_start();
	include "connect.php";
	$idVideo = $_POST['idVideo'];
	$result = $connect -> query ("SELECT * FROM videos WHERE idVideos='$idVideo'");
	if (!$result) throw new Exception($connect->error);
    $row = $result->fetch_assoc();
	    	echo 
	    	"<div id='main'><img id='mainV' src='".$row["path"]."' ></div>
		     <div id='informVideo'>title: ".$row["title"]."
		     likes: ".$row["likes"]."
		     dislikes: ".$row["dislikes"]."
		     views: ".$row["views"]."
		     description: ".$row["description"]." </div>
		     <div id='comments'></div>";
	        // echo "<form method='post' action='php/setComment.php' id='form-set'>
	        //           <input type='hidden' name='nickname' id='nickname' value='nicknameuser'> 
	        //           <input type='hidden' name='date' id='date' value='".date('Y-m-d H:i:s')."'>
	        //           <input type='hidden' name='idVideo' id='idVideo' value='idVideo'>
	        //           <textarea name='message' id='commentMessage' placeholder='Write a comment...'></textarea><br><br>
	        //           <button class='button' id='commentButton' type='submit' name='commentSubmit'>Comment</button>
	        //           <p id='form-message'> </p>
	        //           </form>";
	        // echo "<div class='box' id='box'></div>";
	        // echo "<button class='btn_more' id='btn_more'>More comments</button>
			//</div>";    
		
	//$connect->close();		    	
?>