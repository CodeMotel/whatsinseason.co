
/*global jQuery */
/*!
* FitText.js 1.2
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );

// FitText.JS
jQuery("#date-header").fitText(2, { minFontSize: '34px', maxFontSize: '66px' });


// Show or Hide Closed Message
$( document ).ready( function() {
  var now = new Date();
  var currentMonth = now.getMonth();//returns 0-11

  // Markets are Open
  if( currentMonth > 4 && currentMonth < 9 ) {
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
