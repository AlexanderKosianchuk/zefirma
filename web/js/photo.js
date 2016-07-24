$(document).ready(function(){
	initSlickMouseWheel();
});

function initSlickMouseWheel() {
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
};

function initSlick(slickContainer) {
	slickContainer.slick({
		"lazyLoad":"ondemand",
		"infinite":true,
		"speed":300,
		"variableWidth":true,
		"centerMode":true,
		"dots":true
	});
};