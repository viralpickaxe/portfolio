$(document).ready(function(){
  var margintop;
  margintop = ($(window).height()-$('.macbook-container').height())/2;
  $('.macbook-container').css('margin-top',margintop);
});

$( window ).resize(function() {
  var margintop;
  margintop = ($(window).height()-$('.macbook-container').height())/2;
  $('.macbook-container').css('margin-top',margintop);
});