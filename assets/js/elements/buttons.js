$(document).ready( function (){
  $("button").each( function(){
    $(this).append("<div class='ripple'></div>");
  });


  $("button").click(function(e){
    var clicked = $(this),
    offset = clicked.offset(),
    relativeX = (e.pageX - offset.left),
    relativeY = (e.pageY - offset.top),
    width = clicked.width(),
    ripple = clicked.find('.ripple');

    ripple.addClass("notransition");
    ripple.css({"top" : relativeY, "left": relativeX});
    ripple[0].offsetHeight;
    ripple.removeClass("notransition");

    clicked.addClass("hovered");
    ripple.css({ "width": width * 2, "height": width*2, "margin-left": -width, "margin-top": -width });

    setTimeout(function(){
      ripple.addClass("notransition");
      ripple.attr("style", "");
      ripple[0].offsetHeight;
      clicked.removeClass("hovered");
      ripple.removeClass("notransition");
    }, 400);
  });
});