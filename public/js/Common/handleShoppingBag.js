window.jQuery = window.$ = jQuery;

jQuery(document).ready(function() {
	$('.add_bag').click(function(event) {
		var id_product = $('.add_bag').attr("data-id");
		console.log(id_product);
	});
});