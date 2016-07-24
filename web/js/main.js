$(document).ready(function(){
	$(".dropdown").on("click", function(event){
	    if($(event.target).parent("li").hasClass("open")) {	    	
	    	$(document).trigger("click");
	    } else {
	    	$(".slick-container").css("z-index", -1);
	    	$(".embed-responsive").css("z-index", -1);
	    	$('.body-content').css('padding-top', 50);
	    }
	});
	
	$(document).on("click", function(e) {
		if(!$(e.target).is('.navbar')) {
	    	$(".slick-container").css("z-index", 0);
	    	$(".embed-responsive").css("z-index", 0);
	    	$('.body-content').css('padding-top', 0);
		}
	});
});

