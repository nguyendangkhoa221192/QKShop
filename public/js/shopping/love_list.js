/*-----------------------------------------------------------------------------------*/
/*    ADD TO LOVE LIST
/*-----------------------------------------------------------------------------------*/

$(document).ready(function() {
    $('.add_lovelist.btn-add-to-lovelist').on('click', function(event) {
        event.preventDefault();
        var id_product = $(this).data('id');
        var _token = $(this).data('_token');
        $.ajax({
            url: '/shopping/lovelist/add',
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
