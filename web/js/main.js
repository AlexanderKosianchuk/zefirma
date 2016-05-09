$(document).ready(function(){
	$(".dropdown").on("click", function(event){
		console.log($(event.target).parent("li").hasClass("open"));
	    if($(event.target).parent("li").hasClass("open")) {
	    	$(".slick-container").css("z-index", 0);
	    	$(".embed-responsive").css("z-index", 0);
	    	$('.body-content').css('padding-top', 0);
	    } else {
	    	$(".slick-container").css("z-index", -1);
	    	$(".embed-responsive").css("z-index", -1);
	    	$('.body-content').css('padding-top', 40);
	    }
	});
	
	$(document).on("click", function(e) {
		if(!$(e.target).is('.navbar')) {
	    	$(".slick-container").css("z-index", 0);
	    	$(".embed-responsive").css("z-index", 0);
	    	$('.body-content').css('padding-top', 0);
		}
	});
	
	var videos = $('.embed-responsive-item');
	var elCount = videos.length;
	var elToLoad = 0;
	var streamsCount = 3;
	
	var loadVideo = function(item) {
		if(item < elCount) {
			var $el = videos.eq(item);
			var src = $el.data('src');
			$el.attr('src', src).load(function(event) {
				item += streamsCount;
				loadVideo(item);
			});	
		}
	};
	
	//few streams loadind
	loadVideo(elToLoad);
	loadVideo(elToLoad + 1);
	loadVideo(elToLoad + 2);

});
