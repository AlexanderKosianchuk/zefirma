$(document).ready(function(){	
	var videos = $('.embed-responsive-item');
	var elCount = videos.length;
	var elToLoad = 0;
	var streamsCount = 3;
	
	//few streams loadind
	loadVideo(elToLoad, videos, elCount, streamsCount);
	loadVideo(elToLoad + 1, videos, elCount, streamsCount);
	loadVideo(elToLoad + 2, videos, elCount, streamsCount);
});

function loadVideo (item, videos, elCount, streamsCount) {
	if(item < elCount) {
		var $el = videos.eq(item);
		var src = $el.data('src');
		$el.attr('src', src).load(function(event) {
			item += streamsCount;
			loadVideo(item, videos, elCount, streamsCount);
		});	
	}
};

