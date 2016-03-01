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
//   var $img = $('img');
//     $(window).on('resize', function () {
//     var viewport = {
//             width   : $(this).width(),
//             height : $(this).height()
//         },
//         ratio     = ($img.height() / $img.width()),
//         imgHeight = Math.floor(viewport.width * ratio);

//     $img.css({
//         width     : viewport.width,
//         height    : imgHeight,
//         marginTop : (imgHeight > viewport.height) ? Math.floor((imgHeight - viewport.height) / 2 * -1) : 0
//     });
// }).trigger('resize');
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
    window.open( $(this).attr('href') );
    return false;
    });
});
//this is for putting names into a search for on the data.php page
$(function () {
  "use strict";
  $('li.tool').on('click', function () { //click on the li. CHANGE TO REFLECT NEW LI
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
        heightStyle: "content",
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

$(function() {
    "use strict";
    $( '.level' ).on('click', function() {
       $.ajax({
        type: "get",
        url: "../ajaxpages/level",
        success: function (mesg) {
            $('.display3').html(mesg);
            }
        });
       return false;
   });
});

$(function() {
    "use strict";
    $( '.country' ).on('click', function() {
       $.ajax({
        type: "get",
        url: "../ajaxpages/country",
        success: function (mesg) {
            $('.display4').fadeIn('2000').html(mesg);
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
    }
    $(window).on('resize', showSize);
    showSize();
});