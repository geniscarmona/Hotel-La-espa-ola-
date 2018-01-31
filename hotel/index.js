$(document).ready(function(){
   $('.menu').mouseenter(function(){ 
   		$('.lielement').slideDown('fast'); 
   		$('.line-form').slideDown('fast');
   });  
	$('nav').mouseleave(function(){ 
  		$('.lielement').slideUp('fast'); 
  		$('.line-form').slideUp('fast');
  }); 
	$('#menu-reserva').mouseenter(function() { 
		$('form').slideDown('fast');
	}); 
	$('nav').mouseleave(function(){ 
  		$('.formreserva').slideUp('fast');
  });  
	$(window).scroll(function(){
		if($(window).scrollTop() > 60) { 
			$('header').css({"background-color":"rgba(0,0,0,0.3)","position":"fixed"}); 
			$('nav').css({"background-color":"rgba(0,0,0,0.3)","position":"fixed"}); 
		} else { 
			$('header').css({"background-color":"rgba(0,0,0,1)"}); 
			$('nav').css({"background-color":"rgba(0,0,0,1)"}); 
			}  
	});
}); 
