// FitText.JS
jQuery("#crop-list li span").fitText(1);


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
  $("#about-module").toggleClass("active");
});

$("#city-button").click(function(){
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
    }
  };
  sticky_navigation();
  $(window).scroll(function() {
     sticky_navigation();
  });
  //$('a[href="#"]').click(function(event){
  //  event.preventDefault();
  //});
});