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

/*-----------------------------------------------------------------------------------*/
/*	Handle action in shopping bag
/*-----------------------------------------------------------------------------------*/

function changeQty(argument) {
	var data = argument.value;
	$.ajax({
		headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
		url: '/shopping/cart/update',
		type: 'POST',
		data: {
			data: data
		},
	})
	.done(function() {
		// console.log("success");
	})
	.fail(function() {
		// console.log("error");
	})
	.always(function() {
		// console.log("complete");
	});
	
}

$(document).on('click', '.product-remove', function(event) {
	event.preventDefault();
	/* Act on the event */
	var rowid = $(this).data('rowid');
	var _token = $(this).data('_token');
	$.ajax({
		headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
		url: '/shopping/cart/remove',
		type: 'POST',
		data: {
			rowid: rowid,
			_token: _token
		},
	})
	.done(function(result) {
		console.log(result['isSuccess']);
		console.log(result['total']);
		$('.' + rowid).remove();
		$('.bag_total .total td').html('$' + result['total']);
		$('.bag_total .cart-subtotal td').html('$' + result['subtotal']);
	})
	.fail(function($error) {
		// console.log($error);
		// console.log('Error, Please try again!');
	})
	.always(function() {
	});
	
});