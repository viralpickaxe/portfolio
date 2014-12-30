$(document).ready(function(){

});

$('.key li').on('mouseenter',function(){
  var type = $(this).data('type');
  $('.skills ul li.' + type).addClass('highlight');
  $('.skills ul li:not(.' + type + ')').addClass('shade');
}).on('mouseleave',function(){
  var type = $(this).data('type');
  $('.skills ul li').removeClass('highlight shade');
});