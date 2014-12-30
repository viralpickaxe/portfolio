<?php
  define(PATH,$_GET['path']);
  define(DOCUMENT_ROOT,$_SERVER['DOCUMENT_ROOT']);

  $_page = array(
    'title' => 'err0r',
    'keywords' => 'jamie,davies,web,developer,full,stack,online,freelance,porfilio,modern,code,job,work',
    'description' => 'My name is Jamie Davies, I am a Full Stack Web Developer',
    'file' => '404'
  );

  if(PATH==''){
    $_page['title'] = 'I am Jamie Davies';
    $_page['file'] = 'index';
  }

  include(DOCUMENT_ROOT.'/datas/'.$_page['file'].'.php');
  include(DOCUMENT_ROOT.'/site/page.php');
?>