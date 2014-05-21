$(document).ready(function(e){


	$('#rightArrow').on('click',function(){
		var rightArrowValue = $(this).attr('value');
		//alert(rightArrowValue);
		if (rightArrowValue == 0){
			$('#slide1').css("display","none");
			$('#slide2').css("display","block");
			$('#rightArrow').attr('value', "1");
			$('#leftArrow').css("display","block");
			
		}
		else if (rightArrowValue == 1){
			$('#slide2').css("display","none");
			$('#slide3').css("display","block");
			$('#rightArrow').attr('value', "2");
			$('#leftArrow').css("display","block");
			$('#leftArrow').attr('value', "2");

		}
		else if (rightArrowValue == 2){
			$('#slide3').css("display","none");
			$('#slide4').css("display","block");
			$('#rightArrow').attr('value', "3");
			$('#leftArrow').css("display","block");
			$('#leftArrow').attr('value', "3");
		}
		else if (rightArrowValue == 3){
			$('#slide4').css("display","none");
			$('#slide5').css("display","block");
			$('#rightArrow').attr('value', "4");
			$('#leftArrow').css("display","block");
			$('#leftArrow').attr('value', "4");
			$('#rightArrow').css("display","none");
		}
	});

	$('#leftArrow').on('click',function(){
		var leftArrowValue = $(this).attr('value');

		if (leftArrowValue == 1){
			$('#slide2').css("display","none");
			$('#slide1').css("display","block");
			$('#rightArrow').attr('value', "0");
			$('#leftArrow').css("display","none");
		}
		else if(leftArrowValue == 2){
			$('#slide3').css("display","none");
			$('#slide2').css("display","block");
			$('#rightArrow').attr('value', "1");
			$('#leftArrow').attr('value', "1");
		}
		else if(leftArrowValue == 3){
			$('#slide4').css("display","none");
			$('#slide3').css("display","block");
			$('#rightArrow').attr('value', "2");
			$('#leftArrow').attr('value', "2");
		}
		else if(leftArrowValue == 4){
			$('#slide5').css("display","none");
			$('#slide4').css("display","block");
			$('#rightArrow').attr('value', "3");
			$('#leftArrow').attr('value', "3");
			$('#rightArrow').css("display","block");
		}
	});

	$('#slide5').on('click', function(){
		window.open("https://itunes.apple.com/us/app/crowdsporting/id858814019?mt=8");
	});

	



});


