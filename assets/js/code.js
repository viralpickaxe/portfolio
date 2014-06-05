function macbookMargin(){
  var margintop;
  margintop = (($(window).height()-$('.macbook-container').height())/2)-20;
  if(margintop<10){
    margintop = 10;
  }
  $('.macbook-container').css('margin-top',margintop);
}

function fitText(){
  $('.name').fitText(0.6);
  $('.role').fitText(1.3);
}

$(document).ready(function(){
  macbookMargin();
  fitText();
});

$( window ).resize(function() {
  macbookMargin();
});