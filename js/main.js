// FitText.JS
jQuery("#date-header").fitText(2, { minFontSize: '34px', maxFontSize: '66px' });


// Show or Hide Closed Message
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