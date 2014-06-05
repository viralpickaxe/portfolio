$(document).ready(function(){
  var margintop;
  margintop = ($(window).height()-$('.macbook-container').height())/2;
  $('.macbook-container').css('margin-top',margintop);

  $('.name').fitText(0.6);
  $('.role').fitText(1);
});

$( window ).resize(function() {
  var margintop;
  margintop = ($(window).height()-$('.macbook-container').height())/2;
  $('.macbook-container').css('margin-top',margintop);
});