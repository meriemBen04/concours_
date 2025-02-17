// Swticher Cookie Base
/**
 * Styleswitch stylesheet switcher built on jQuery
 * Under an Attribution, Share Alike License
 * By Kelvin Luck ( http://www.kelvinluck.com/ )
 * Thanks for permission! 
 **/

// DEMO Swticher Base
jQuery('.switcher-icon').click(function(){
	if(jQuery('.demo_changer').hasClass("active")){
		jQuery('.demo_changer').animate({"inset-inline-end":"-270px"},function(){
			jQuery('.demo_changer').removeClass("active");
		});
	}else{
		jQuery('.demo_changer').animate({"inset-inline-end":"0px"},function(){
			jQuery('.demo_changer').addClass("active");
		});
	} 
});
  
jQuery('.page').click(function(){
	if(jQuery('.demo_changer').hasClass("active")){
		jQuery('.demo_changer').animate({"inset-inline-end":"-270px"},function(){
			jQuery('.demo_changer').removeClass("active");
		});
	}
	
});


// ______________ Cover-image
$(".cover-image").each(function () {
	var attr = $(this).attr('data-bs-image-src');
	if (typeof attr !== typeof undefined && attr !== false) {
		$(this).css('background', 'url(' + attr + ') center center');
	}
});
    