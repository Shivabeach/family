/*global $:false */
/* beautify then minify */
$(function () {
    "use strict";
    $('form#ajax').on('submit', function () {
        var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            data = {};
        that.find('[name]').each(function (index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();
            data[name] = value;
        });
        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function (response) {
                $('#display').html(response);
            }
        });
        return false;
    });
});
$(function() {
    "use strict";
    $("#form1").submit(function() {
        var data = $("#form1").serialize();
        alert(data); return false;
        $.ajax({
            url: "/forms/form1",
            data: data,
            type: "POST",
            success: function(msg) {
                if (msg) {
                    $("#display").html(msg).show();
                } else {
                    $("#display").text("nothing came back For some reason");
                }
            }
        });
        return false;
    });
});
$(function() {
    "use strict";
    $('A[rel="external"]')
    .click( function() {
    window.open( $(this).attr('href') );
    return false;
    });
});
//this is for putting names into a search for on the data.php page
$(function () {
  "use strict";
  $('dd').on('click', function () { //click on the li. CHANGE TO REFLECT NEW LI
    var content = $(this).text();//content is the text that you clicked on
 //PLACE THE TEXT INSIDE THE INPUT FIELD, YOU CAN CHANGE YOUR SELECTOR TO TARGET THE RIGHT INPUT
    $('input[name="name"]').val(content);
  });
});
 // use for relative search form
$(function () { 
  "use strict";
  $("#search").submit(function () {
    var data = $('#search').serialize();
    //alert(data); return false;
    $.ajax({
      url: "forms/relative_search", //CHANGE
      data: data,
      type: "POST",
      success: function (msg) {
        $('.display_results').html(msg).show();
      }
    });
    return false;
  });
});

$(function () {
  "use strict";
  $('#clear').on('click', function () {
    $('#display').empty();
  });
});

  $(function() {
    $("dd.tool").tooltip();
  });

  for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'current';
    }
}
$( function() {
    "use strict";
    $(".sf-menu").superfish();
} );