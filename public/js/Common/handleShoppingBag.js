window.jQuery = window.$ = jQuery;

// jQuery(document).ready(function() {
//   // Event click for add product to bags
// 	$('.add_bag.btn-add-to-bags').click(function(event) {
// 		var id_product = $(this).data('id');
// 		console.log(id_product);
// 	});
  
// });


/*-----------------------------------------------------------------------------------*/
/*	ADD TO BAG
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
	$('.add_bag.btn-add-to-bags').on('click', function(event) {
		event.preventDefault();
		var id_product = $(this).data('id');
		var _token = $(this).data('_token');
		$.ajax({
			url: '/shopping/cart',
			type: 'POST',
			data: {
				id_product: id_product,
				_token: _token
			}
		})
		.done(function(result) {
			$('.shopping_bag').load(document.URL +  ' .shopping_bag');
		})
		.fail(function(e) {
			console.log(e);
		})
		.always(function(e) {
			// console.log(e.test);
		});
	});
});

/*-----------------------------------------------------------------------------------*/
/*	ADD TO LOVE LIST
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
	$('.add_lovelist.btn-add-to-lovelist').on('click', function(event) {
		event.preventDefault();
		var id_product = $(this).data('id');
		var _token = $(this).data('_token');
		$.ajax({
			url: '/shopping/lovelist',
			type: 'POST',
			data: {
				id_product: id_product,
				_token: _token
			}
		})
		.done(function(result) {
			$('.love_list').load(document.URL +  ' .love_list');
		})
		.fail(function(e) {
			console.log(e);
		})
		.always(function(e) {
			// console.log(e.test);
		});
	});
});