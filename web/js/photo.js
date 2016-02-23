$(document).ready(function(){
	
	setTimeout(function(){
		var photoContainer = $('.slick-container')
		
		/*===================================*/
		/*SLICK CAROUSEL*/
		/*===================================*/

		photoContainer.mousewheel(function(event, delta) {
			
			if($(document).scrollTop() > 150){
				event.stopPropagation();
				event.preventDefault();
				
				if(delta > 0){
					photoContainer.slick('slickNext');
				} else {
					photoContainer.slick('slickPrev');
				}
			}
		});
		}, 500
	);	
});