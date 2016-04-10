$(document).ready(function(){
	var category = '';
	$("button.btn-add-video").on("click", function(e) {
		category = $(e.target).data('category');		
	});
	
	$('button#save').on('click', function(e) {
		var value = $('input#url').val();
		$.post({
			url: '/site/add-video',
			data: {
				category: category,
				value: value
			}
		}).done(function(e) {
			location.reload();
		});
	});
	
	$("button.delete").on('click', function(e) {
		if (confirm("Shure want to delete this item?")) {
			var id = $(e.currentTarget).data('id');
			var category = $(e.currentTarget).data('category');
			$.post({
				url: '/site/delete-video',
				data: {
					category: category,
					id: id
				}
			}).done(function(e) {
				location.reload();
			});
		}
	});
	
	$(".url-val").on('dblclick', function(e) {
		var item = $(e.currentTarget);
		var id = $(item.parent()).data('key');
		var category = $(item.parents('table')).data('category');
		var val = item.html();
		item.html('<input id="url-input-val" class="form-control" value="' + val + '"/>');
		$('input#url-input-val')
		.focus()
		.on('focusout', function(e) {
			if (confirm("Shure want to update this item?")) {
				var newUrl = $(e.currentTarget).val();
				$.post({
					url: '/site/update-video',
					data: {
						category: category,
						id: id,
						value: newUrl
					}
				}).done(function(e) {
					location.reload();
				});
			} else {
				item.html(val);
			}
		});
	});
	

});