$(document).ready(function(){
	$('a').on('click', function(event) {
		var $el = $(this);
		var isSPA = ($el.data('is-spa') || $el.parent().data('is-spa'))
			&& ($el.attr('href') != '#');
		
		if (isSPA) {
			event.preventDefault();
			event.stopPropagation();
				
			$.ajax({
				url: $el.attr('href'),
				dataType: 'json'
			}).done(function(resp) {
				$('section').empty().append(resp.html);
				
				var videos = $('.embed-responsive-item');
				if(videos.length > 0) {
					var elCount = videos.length;
					var elToLoad = 0;
					var streamsCount = 3;
					
					//few streams loadind
					loadVideo(elToLoad, videos, elCount, streamsCount);
					loadVideo(elToLoad + 1, videos, elCount, streamsCount);
					loadVideo(elToLoad + 2, videos, elCount, streamsCount);
				}

				var slickContainer = $('.slick-container');
				if(slickContainer.length > 0) {
					initSlick(slickContainer);
					initSlickMouseWheel();
					slickContainer.slick('slickGoTo', 0);
				}
				
		    	$('.navbar-toggle').trigger('click');
		    	
				window.history.pushState({"html":resp.html,"pageTitle":resp.title},"", $el.attr('href'));
			}).fail(function(resp) {
				debugger;
				window.location.href = $el.attr('href');
			});					
		}
	});

});
