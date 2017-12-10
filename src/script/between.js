$(document).on('click','.video',function(e){
      //alert(e.target.id);
      var idVideo = e.target.id;
      window.location.href = "play.php";
      $("#mainVideo").load("play/include.php", {idVideo: idVideo});
  });