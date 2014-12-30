$(document).ready(function(){

});

$('.profilephoto').on('mouseenter',function(){
  $(this).attr('src',$(this).data('second'));
}).on('mouseleave',function(){
  $(this).attr('src',$(this).data('first'));
})