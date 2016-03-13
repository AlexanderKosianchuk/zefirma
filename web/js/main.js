$(document).ready(function(){

	$(".dropdown").on("click", function(event){
		console.log($(event.target).parent("li").hasClass("open"));
	    if($(event.target).parent("li").hasClass("open")) {
	    	$(".slick-container").css("z-index", 0);
	    	$(".embed-responsive").css("z-index", 0);
	    } else {
	    	$(".slick-container").css("z-index", -1);
	    	$(".embed-responsive").css("z-index", -1);
	    }
	});
	
	$(document).on("click", function(e) {
		if(!$(e.target).is('.navbar')) {
	    	$(".slick-container").css("z-index", 0);
	    	$(".embed-responsive").css("z-index", 0);
		}
	});
});