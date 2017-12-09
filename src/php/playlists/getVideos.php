<?php
	session_start();
	include "connect.php";
	$idPlaylist = $_POST['idPlaylist'];


	$result1 = $connect -> query ("SELECT idVideo FROM favvid WHERE idPlaylist='$idPlaylist'");
	if (!$result1) throw new Exception($connect->error);
	if ($result1->num_rows > 0) {

	    while($row1 = $result1->fetch_assoc()) 
	    {
	    	$idVideo = $row1["idVideo"];
			$result2 = $connect -> query ("SELECT path FROM videos WHERE idVideos='$idVideo'");
				if (!$result2) throw new Exception($connect->error);
				
				if ($result2->num_rows > 0) 
				{

				    while($row2 = $result2->fetch_assoc()) {
				        echo "<iframe width='180' height='128' src='".$row2["path"]."' frameborder='0' allowfullscreen></iframe>";
				    }
				}  
	    }
	}  else 
			  {
			    echo "No videos in playlist!";
			  }

	
		

	//echo "correct";
	$connect->close();
			    	
?>