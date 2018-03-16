// window.jQuery = window.$ = jQuery;

jQuery(document).ready(function() {
  // Event click for add product to bags
	$('.add_bag.btn-add-to-bags').click(function(event) {
		var id_product = $(this).data('id');
		console.log(id_product);
	});
  
});