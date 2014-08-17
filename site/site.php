<?php
  define(PATH,$_GET['path']);
  define(DOCUMENT_ROOT,$_SERVER['DOCUMENT_ROOT']);

  if(PATH==''){
    $_page = array(
      'title' => 'Title',
      'pagefile' => 'index.php'
    );
  } else {
    $_page = array(
      'title' => 'err0r',
      'pagefile' => '404.php'
    );
  }

  include(DOCUMENT_ROOT.'/site/page.php');
?>