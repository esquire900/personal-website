
function scroll(location){
	if(location == "top"){
		// $('html,body').animate({scrollTop: 0}, 800);
		if($('#resume').is(':visible'))
			$('#resume').slideUp(800);
		if($('#music').is(':visible'))
			$('#music').slideUp(800);
		if($('#code').is(':visible'))
			$('#code').slideUp(800);
		$(".side").fadeOut(500);
        $(".top").slideDown(800);
		return true;
	}
	if($('#resume').is(':visible'))
		$('#resume').slideUp(800);
	if($('#music').is(':visible'))
		$('#music').slideUp(800);
	if($('#code').is(':visible'))
		$('#code').slideUp(800);
	$('#'+location).delay(50).slideDown(800);
	
	if($(window).scrollTop() == 0){
		// $('html,body').animate({scrollTop: $("#"+location).offset().top - 50}, 800);
		$(".side").delay(800).fadeIn(1000);
        $(".top").slideUp(1000);
		$("#"+location).height(screen.height - 200);
		$("#"+location).css('max-height', window.height - 200 + 'px');
		if(location == "code"){
			// loadChart();
		}
	}
}