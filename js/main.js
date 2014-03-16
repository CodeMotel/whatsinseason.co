// FitText.JS
jQuery("#crop-list li span").fitText(1.1);


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