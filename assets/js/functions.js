/*global $:false,
window:false */
/* beautify then minify */

$(document).ajaxError(function (e, xhr, settings, error) {
    "use strict";
  console.log(error);
});

  $(function() {
     "use strict";
    $( ".dialog" ).dialog({
        maxWidth: 1000,
        width: 800,
        modal: true,
        autoOpen: false
    });
    $( ".opener" ).click(function() {
       $( ".dialog" ).dialog( "open" );
    });
  });

  $(function() {
     "use strict";
    $( ".dialog1" ).dialog({
        maxWidth: 500,
        minHeight: 300,
        modal: true,
        autoOpen: false
    });
    $( ".opener1" ).click(function() {
       $( ".dialog1" ).dialog( "open" );
    });
  });

  $(function() {
     "use strict";
    $( ".dialog2" ).dialog({
        maxWidth: 500,
        minHeight: 300,
        modal: true,
        autoOpen: false
    });
    $( ".opener2" ).click(function() {
       $( ".dialog2" ).dialog( "open" );
    });
  });

  $(function() {
     "use strict";
    $( ".dialog3" ).dialog({
        minHeight: 300,
        maxWidth: 500,
        modal: true,
        autoOpen: false
    });
    $( ".opener3" ).click(function() {
       $( ".dialog3" ).dialog( "open" );
    });
});
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
            },
            error: function () {
                alert('Sumptin not right');
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
            url: "/forms/form1",
            data: data,
            type: "POST",
            success: function(msg) {
                if (msg) {
                    $("#display").html(msg);
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
    window.open( $(this).attr('href'),
    rel="noopener noreferrer");
    return false;
    var newWnd = window.open();
    newWnd.opener = null;
    });
});
//this is for putting names into a search for on the data.php page
$(function () {
  "use strict";
  $('li.inliner').on('click', function () { //click on the li. CHANGE TO REFLECT NEW LI
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
    "use strict";
    $("dd.tool").tooltip();
  });

  $(function () {
    "use strict";
    $("#tabs").tabs( {
        active: 0,
        heightStyle: "auto",
        event: "mouseover"
    });
  });

  for (var i = 0; i < document.links.length; i++) {/*this highlights the current active link*/
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'current';
    }
}
$(function() {
    "use strict";
    $(".sf-menu").superfish();
});
$(function() {
    "use strict";
    $('a#top').click(function () {
      $(document.body).animate({scrollTop: 0}, 800);
      return false;
    });
});
$(window).on('scroll', function(){
        var $timeline_block = $(".cd-timeline-block");
        $timeline_block.each(function(){
        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        }
    });
  });
// controller ajaxpages - page datapages
$(function() {
    "use strict";
    $( '.rel_count' ).on('click', function() {
       $.ajax({
        type: "get",
        url: "../ajaxpages/inDatabase",
        success: function (mesg) {
            $('.display1').html(mesg);
            }
        });
       return false;
    });
});
// controller ajaxpages - page datapages
$(function() {
    "use strict";
    $( '.ages' ).on('click', function() {
       $.ajax({
        type: "get",
        url: "../ajaxpages/ages",
        success: function (mesg) {
            $('.display2').html(mesg);
            }
        });
       return false;
   });
});
// controller ajaxpages - page datapages
$(function(){
    "use strict";
    $( '.level' ).on('click', function() {
       $.ajax({
        type: "get",
        url: "../ajaxpages/level",
        success: function (mesg) {
            $('.display3').html(mesg).delay('9000').fadeOut('9000');
            }
        });
       return false;
   });
});
// controller ajaxpages - page datapages
$(function() {
    "use strict";
    $( '.country' ).on('click', function() {
       $.ajax({
        type: "get",
        url: "../ajaxpages/country",
        success: function (mesg) {
            $('.display4').fadeIn('2000').html(mesg).delay('19000').fadeOut('5000');
            }
        });
       return false;
   });
});

$(function () {
    'use strict';
    function showSize() {
        $('#size').html('HEIGHT : ' + $(window).height() + '<br>WIDTH : ' + $(window).width());
        $('#size2').html('HEIGHT : ' + screen.height + '<br>WIDTH : ' + screen.width);
        $('#size3').html('HEIGHT : ' + $('.main-content').height() + '<br>WIDTH : ' + $('.main-content').width());
    }
    $(window).on('resize', showSize);
    showSize();
});
// $(function() {
//     "use strict";
//     $.ajax({
//       data: someData,
//       dataType: 'json',
//       url: '/path/to/script'
//     }).done(function(data) {
//     // If successful
//       console.log(data);
//     }).fail(function(jqXHR, textStatus, errorThrown) {
//     // If fail
//       console.log(textStatus + ': ' + errorThrown);
//     });
//     return false;
//   });
$(function () {
    $("tr.stripes:even").addClass("stripe");
    $("tr.stripes:odd").addClass("stripe1");
});

$(function () {
    'use strict';
    $(".check").validate({
        rules:{
            man: {
                required: true,
                minlength: 5
            },
            woman: {
                required: true,
                minlength: 3
            },
            year: {
                required: true,
                digit: true,
                maxlength: 4,
                minlength: 4
            },
            state: {
                required: true,
                maxlength: 15
            },
            kids: {
                required: true,
                digit: true,
                maxlength: 2,
                minlength: 1
            },
            family: {
                required: true
            },
            relation: {
                maxlength: 50,
                minlength: 15
            }
        },
        messages: {
            man: {
                required: "Field Required",
                minlength: "5 of them please"
            },
            woman: {
                required: "Field Required",
                minlength: "5 of them please"
            },
            year: {
                required: "Field required",
                digit: "Digits only"
            },
            state: {
                required: "Field required",
                maxlength: "Answer too long"
            },
            kids: {
                required: "Field required",
                digit: "Gotta be numbers",
                maxlength: "Post too long",
            },
            family: {
                required: "This field required"
            },
            relation: {
                maxlength: "Seems a bit long eh?",
                minlength: "a bit short today?"
            }
        }
    });
});
