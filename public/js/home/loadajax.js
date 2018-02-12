(function($) {
  load_view("/topic", "GET", "#test_top", []);
}(jQuery));

function load_view(url, method, field_id, param = []) {
  $.ajax({
    url: url, //+= '?_=' + (new Date()).getTime()
    method: method,
    data: {param},
    timeout: 10000,
    datatype: "html",
    cache: false,
    success: function(result) {
      console.log(result);
      $(field_id).html(result);
    }
  });
}
