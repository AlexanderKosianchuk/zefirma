$(document).ready(function(){
	
	console.log("1");
	
	setTimeout(function(){
		var photoContainer = $('.PhotoContainer').slick({
			lazyLoad: 'ondemand',
			  dots:true,
			  infinite: true,
			  speed: 300,
			  variableWidth: true,
			  centerMode: true,
		});
		
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