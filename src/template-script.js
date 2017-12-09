$(document).ready(function(){

    $(window).scroll(function checkOffset() {

        if($('.menu').offset().top + $('.menu').height()
                                               >= $('.footer').offset().top - 0){
            $('.menu').css('bottom', '170px');

          }
        if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top)
            $('.menu').css('bottom', 'auto'); // restore when you scroll up
    });


      $("#boy1").mouseover(function(){
        if ($(this).css('opacity') != '1'){
            $(this).animate({'opacity':1});
          }
      });
      var action = 1;
      $("#boy1").click(function(){
        if(action==1){
            $("#home").css("visibility","visible");
            $(this).animate({'opacity':1});
            action = 2;
        }
        else{
          $("#home").css("visibility","hidden");
          $(this).animate({'opacity':0.5});
          action=1;
        }
      });

      $("#boy1").mouseout(function(){
        if ($(this).css('opacity') == '1'){
            $("#home").css("visibility","hidden");
            $(this).animate({'opacity':0.5});

          }
      });

      $("#boy2").mouseover(function(){
        if ($(this).css('opacity') != '1'){
            $(this).animate({'opacity':1});
          }
      });
      var action = 1;
      $("#boy2").click(function(){
        if(action==1){
            $("#help").css("visibility","visible");
            $(this).animate({'opacity':1});
            action = 2;
        }
        else{
          $("#help").css("visibility","hidden");
          $(this).animate({'opacity':0.5});
          action=1;
        }
      });

      $("#boy2").mouseout(function(){
        if ($(this).css('opacity') == '1'){
            $("#help").css("visibility","hidden");
            $(this).animate({'opacity':0.5});

          }
      });

      $("#girl").mouseover(function(){
        if ($(this).css('opacity') != '1'){
            $(this).animate({'opacity':1});
          }
      });
      var action = 1;
      $("#girl").click(function(){
        if(action==1){
            $("#list").css("visibility","visible");
            $(this).animate({'opacity':1});
            action = 2;
        }
        else{
          $("#list").css("visibility","hidden");
          $(this).animate({'opacity':0.5});
          action=1;
        }
      });

      $("#girl").mouseout(function(){
        if ($(this).css('opacity') == '1'){
            $("#list").css("visibility","hidden");
            $(this).animate({'opacity':0.5});

          }
      });

  $("#menu").click(function(){
    if ($(".person").css('opacity') == '1'){
        $(".person").animate({'opacity':0.5})
        $("#home").css("visibility","hidden");
        $("#list").css("visibility","hidden");
        $("#help").css("visibility","hidden");
      }
      else{
        $(".person").animate({'opacity':1})
        $("#home").css("visibility","visible");
        $("#list").css("visibility","visible");
        $("#help").css("visibility","visible");}
  });



});
