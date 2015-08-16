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
        //alert(data); return false;
        $.ajax({
            url: "forms/form1",
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
