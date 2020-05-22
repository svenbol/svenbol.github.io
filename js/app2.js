$(document).ready(function(){
    console.log('rdy boi !');
    
    $('body').find('div[z-index="999999"]').remove(); 

 
     $(".img-thumbnail").removeClass('hide');
        $( ".img-thumbnail:not("+ id +")").toggleClass('hide');
    });
    
    $('nav nav li a div a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
    
    /* GUNSOUND reload thumbnails */
    $('#btn-reload').click(function(e){
        $(".img-thumbnail").removeClass("hide");
    }); 
    
    
    /*
    $('.contactbutton).click(function(){
        $('.form-div').toggleClass("visibility");
    });
    */
    
    /*
    $('.thumbnail').hover(function(e){
        $(this).child('.overlay').toggleClass('.hidden');
    });
    
    $( ".thumbnail" ).mouseleave(function(e) {
        $(this).child('.overlay').toggleClass('.hidden');
    });
    */
    
    /*
    $('.dropdown-item').click(function(e) {
        var id = $(e.target).attr("id");
    });
*/ 
    
});

// AUDIO
  var audio_shoot = new Audio("./audio/shoot.ogg");
  var audio_reload = new Audio("./audio/reload.ogg");

  function reload() {
    audio_reload.play();
  }

  function shoot() {
    audio_shoot.play();
  }