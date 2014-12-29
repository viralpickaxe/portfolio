<!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo $_page['title']; ?></title>
    <meta name="keywords" content="<?php echo $_page['keywords']; ?>">
    <meta name="description" content="<?php echo $_page['description']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53337086-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header>
      <ul class="leadin">
        <li>Hey there, I'm <strong>Jamie Davies</strong>,</li>
        <li>I'm <span id="jobtitle-prefix">a</span> <strong id="jobtitle" data-jobtitleprefix="a" data-jobtitle="Full Stack Web Developer">Full Stack Web Developer</strong></li>
      </ul>
      <ul class="links">
        <li><a href="http://github.com/viralpickaxe" target=_blank data-jobtitleprefix="an" data-jobtitle="Open Source Developer">GitHub</a></li>
        <li><a href="http://twitter.com/viralpickaxe" target=_blank data-jobtitleprefix="an" data-jobtitle="Avid Tweeter">Twitter</a></li>
        <li><a href="http://www.linkedin.com/in/viralpickaxe" target=_blank data-jobtitleprefix="a" data-jobtitle="Bid'nis Guy">LinkedIn</a></li>
      </ul>
    </header>

    <?php include(DOCUMENT_ROOT.'/pages/'.$_page['pagefile']); ?>

    <footer>
      <div class="container">
        © 2014 Jamie Davies.
      </div>
    </footer>

  </body>
  <script src="assets/js/script.min.js"></script>
  <script src="assets/js/pages/<?php echo $_page['jsfile']; ?>.min.js"></script>
</html>