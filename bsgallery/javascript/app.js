$( document ).ready(function() {
  console.log('rdy boi !');
  $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove(); 
});

// KEEP SHOOTING: stop dropdown animation :w jquery var + onfunc
/*
$('#dropdown-play').on('hide.bs.dropdown', function () {
    return false;
});
*/


// AUDIO
var audio_shoot = new Audio("../audio/shoot.ogg");
var audio_reload = new Audio("../audio/reload.ogg");

function reload() {
	audio_reload.play();
}

function shoot() {
	audio_shoot.play();
}


// CALL TO ACTION TIMER BUTTON

var time = 10;
var x = setInterval(function(){
	
	if(time <= 0){
		//document.getElementByClass("call-to-act-link").addClass("hide");
		$("a").addClass("hide");
		document.getElementById("calltoact").innerHTML = "Too late.. :/";
	}
	else{
		document.getElementById("calltoact").innerHTML = "Journey deal ends in  " + time + " seconds ... " ;
		time--;
	}
},1000);