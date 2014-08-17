<?php
  define(PATH,$_GET['path']);
  define(DOCUMENT_ROOT,$_SERVER['DOCUMENT_ROOT']);

  $_page = array(
    'title' => 'err0r',
    'keywords' => 'jamie,davies,web,developer,full,stack,online,freelance,porfilio,modern,code,job,work',
    'description' => 'My name is Jamie Davies, I am a Full Stack Web Developer',
    'pagefile' => '404.php'
  );

  if(PATH==''){
    $_page['title'] = 'Jamie Davies';
    $_page['pagefile'] = 'index.php';
  }

  include(DOCUMENT_ROOT.'/site/page.php');
?>