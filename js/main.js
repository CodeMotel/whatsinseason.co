// FitText.JS
jQuery("#date-header").fitText(2, { minFontSize: '34px', maxFontSize: '66px' });


// Show or Hide Closed Message
$( document ).ready( function() {
  var now = new Date();
  var currentMonth = now.getMonth();//returns 0-11

  // Markets are Open
  if( currentMonth > 3 && currentMonth < 9 ) {
    var element = document.getElementById('closed-msg');
    element.parentNode.removeChild(element);
    $( "#open-msg").css({'display': 'block'});
    $('body').append("<script src='js/food.js'></script>");
  }
  // Markets are Closed
  else {
    $( "#closed-msg").css({'display': 'block'});
    var element = document.getElementById('open-msg');
    element.parentNode.removeChild(element);
  }
});




// Smooth Scroll for Anchor Links
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


// Footer Toggles
$("#about-button").click(function(){
  $("#city-module").removeClass("active");
  $("#about-module").toggleClass("active");
});

$("#city-button").click(function(){
  $("#about-module").removeClass("active");
  $("#city-module").toggleClass("active");
});


// Sticky Footer
$(function() {
  var sticky_navigation_offset_top = $('#current-date').offset().top;
  var sticky_navigation = function(){
    var scroll_top = $(window).scrollTop();
    if (scroll_top > sticky_navigation_offset_top) {
      $('footer').css({ 'bottom':0 });
    } else {
      $('footer').css({ 'bottom':-70});
      $(".footer-toggles").removeClass("active");
    }
  };
  sticky_navigation();
  $(window).scroll(function() {
     sticky_navigation();
  });
});


// Map Styles
// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
      resizeDiv();
  });
  window.onresize = function(event) {
      resizeDiv();
  };
  function resizeDiv() {
      vpw = $(window).width();
      vph = $(window).height();

      // -- Section Width and Height -- //
      $('#map').css({'height': vph - 46 + 'px'});
      $('#map iframe').css({'height': vph - 46 + 'px'});
}

// Map Toggles
$("#map-toggle").click(function(){
  $("#map").toggleClass("active");
});
$("#map-toggle-2").click(function(){
  $("#map").toggleClass("active");
});
// Close Map
$("#map-close").click(function(){
  $("#map").toggleClass("active");
});


/* we need this only on touch devices */
if (Modernizr.touch) {
    /* cache dom references */
    var $body = jQuery('body');

    /* bind events */
    $(document)
    .on('focus', 'input', function(e) {
        $body.addClass('fixfixed');
    })
    .on('blur', 'input', function(e) {
        $body.removeClass('fixfixed');
    });
}
