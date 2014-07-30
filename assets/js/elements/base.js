$(document.body).flowtype({
  minFont   : 25,
  maxFont   : 50,
});

$('header .links a').hover(function(){
  $('header #jobtitle-prefix').html($(this).attr('data-jobtitleprefix'));
  $('header #jobtitle').html($(this).attr('data-jobtitle'));
},function(){
  $('header #jobtitle-prefix').html($('header #jobtitle').attr('data-jobtitleprefix'));
  $('header #jobtitle').html($('header #jobtitle').attr('data-jobtitle'));
});