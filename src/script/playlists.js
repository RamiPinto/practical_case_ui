//modal box

var modal = document.getElementById('myModal');
var pic = document.getElementById('addPlaylist');
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
pic.onclick = function() {
	document.getElementById("result").innerHTML = "";
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    
}

//When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        
    }
}

//send to php

$(document).ready(function() 
 {

 	$("#form").submit(function(event)
 	{
 		event.preventDefault();
 		var title = $("#title").val();
 		var submit = $("#add").val();
 		var type = $("input:radio[name=type]:checked").val();
 		$("#result").load("playlists/include.php", {
 			title:title,
			submit:submit,
			type:type
 		});
    });

 	$("#listMy").load("playlists/listMy.php");
 	$("#listFollow").load("playlists/listFollow.php");



	$(document).on('click','.getVideos',function(e){
	    //alert(e.target.id);
	    var idPlaylist = e.target.id;
		$("#videos").load("playlists/getVideos.php", {idPlaylist: idPlaylist});
	});
});
