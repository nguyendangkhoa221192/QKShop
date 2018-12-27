/*-----------------------------------------------------------------------------------*/
/*    Handle action in shopping bag
/*-----------------------------------------------------------------------------------*/

function changeQty(argument) {
    var quantity = argument.value;
    var rowId    = argument.data('rowId');
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/shopping/cart/update_qty',
        type: 'POST',
        data: {
            rowId: rowId,
            quantity: quantity
        },
    })
    .done(function(result) {
        console.log(result);
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
    })
    .always(function() {
    });
    
});
