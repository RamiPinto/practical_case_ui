$(document).on('click', '.video', function() {
        var idVideo = this.id;
        $("#mainVideo").load("play/include.php", {idVideo: idVideo});
});

 $(document).on('click', '#likes', function() {
 	    var video = $("#mainV");
        var srcVideo = video.src;
        alert(srcVideo);
        //$("#mainVideo").load("play/include.php", {idVideo: idVideo});
});
$(document).on('click', '#dislikes', function() {
 	    var video = $("#mainV");
        var srcVideo = video.src;
        alert(srcVideo);
        //$("#mainVideo").load("play/include.php", {idVideo: idVideo});
});
 $(document).on('click', '#sharing', function() {
 	    var video = $("#mainV");
        var srcVideo = video.src;
        alert(srcVideo);
        //$("#mainVideo").load("play/include.php", {idVideo: idVideo});
});
$(document).on('click', '#addTo', function() {
 	    var video = $("#mainV");
        var srcVideo = video.src;
        alert(srcVideo);
        //$("#mainVideo").load("play/include.php", {idVideo: idVideo});
});