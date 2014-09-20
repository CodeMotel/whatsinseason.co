// (function ($, window, document, undefined) {

//   'use strict';

//   $(function () {

//   });

// })(jQuery, window, document);





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

}