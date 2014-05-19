$(document).ready(function(){
	$('#teamLogin').on('click', function(){

		$('body:not(#header)').css('background', 'url(img/bkg.png) no-repeat center center fixed');
		$('body:not(#header)').css('-webkit-background-size', 'cover');
		$('body:not(#header)').css('-moz-background-size', 'cover');
		$('body:not(#header)').css('-o-background-size', 'cover');
		$('body:not(#header)').css('background-size', 'cover');


		$('#loginTab').css("display","block");
		$('#one01Tab').css("display","none");

	});

	$('#one0one').on('click',function(){

		$('body:not(#header)').css('background', 'url(img/bkg.png) no-repeat center center fixed');
		$('body:not(#header)').css('-webkit-background-size', 'cover');
		$('body:not(#header)').css('-moz-background-size', 'cover');
		$('body:not(#header)').css('-o-background-size', 'cover');
		$('body:not(#header)').css('background-size', 'cover');

		
		$('#loginTab').css("display","none");
		$('#one01Tab').css("display","block");

		
	});
	
});


