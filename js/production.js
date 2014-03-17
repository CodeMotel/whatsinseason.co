
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
jQuery("#date-header").fitText(2, { minFontSize: '26px', maxFontSize: '66px' });


// Show or Hide Closed Message
// Apples
$( document ).ready( function() {
      var now = new Date();
      var currentMonth = now.getMonth();//returns 0-11
      //based on month hide or show your div
      if( currentMonth > 4 && currentMonth < 9 ) {
      var element = document.getElementById('closed-msg');
      element.parentNode.removeChild(element);

      } else {
      $( "#closed-msg").css({'display': 'block'});
      }
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
  var sticky_navigation_offset_top = $('#crop-wrap').offset().top;
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