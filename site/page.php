<!DOCTYPE html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
  <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $_page['title'] ?></title>

    <meta name="keywords" content="<?= $_page['keywords'] ?>">
    <meta name="description" content="<?= $_page['description'] ?>" />

    <!-- Icons -->
    <meta name="theme-color" content="#0099FF">
    <link rel="shortcut icon" href="/favicon.ico?new=new">
    <link rel="apple-touch-icon" sizes="333x333" href="/assets/img/profilepics/333.png">
    <link rel="apple-touch-icon" sizes="192x192" href="/assets/img/profilepics/192.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/profilepics/152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/profilepics/144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/profilepics/120.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/profilepics/72.png">
    <link rel="apple-touch-icon" sizes="96x96" href="/assets/img/profilepics/96.png">
    <link rel="apple-touch-icon" sizes="64x64" href="/assets/img/profilepics/64.png">
    <link rel="apple-touch-icon" sizes="32x32" href="/assets/img/profilepics/32.png">
    <link rel="apple-touch-icon" sizes="16x16" href="/assets/img/profilepics/16.png">
    <link rel="icon" sizes="333x333" href="/assets/img/profilepics/333.png">
    <link rel="icon" sizes="192x192" href="/assets/img/profilepics/192.png">
    <link rel="icon" sizes="152x152" href="/assets/img/profilepics/152.png">
    <link rel="icon" sizes="144x144" href="/assets/img/profilepics/144.png">
    <link rel="icon" sizes="120x120" href="/assets/img/profilepics/120.png">
    <link rel="icon" sizes="72x72" href="/assets/img/profilepics/72.png">
    <link rel="icon" sizes="96x96" href="/assets/img/profilepics/96.png">
    <link rel="icon" sizes="64x64" href="/assets/img/profilepics/64.png">
    <link rel="icon" sizes="32x32" href="/assets/img/profilepics/32.png">
    <link rel="icon" sizes="16x16" href="/assets/img/profilepics/16.png">
    <meta name="msapplication-TileColor" content="#0099FF" />
    <meta name="msapplication-TileImage" content="/assets/img/profilepics/144.png" />

    <!-- Open Graph Tags -->
    <meta property="fb:app_id" content="401937653302924" />
    <meta property="og:title" content="<?= $_page['title'] ?>" />
    <meta property="og:site_name" content="iamjamiedavies.com" />
    <meta property="og:type" content="website" />
    <meta property="og:namespace" content="iamjamiedavies" />
    <meta property="og:image" content="http://iamjamiedavies/assets/img/profilepics/333.png" />
    <meta property="og:description" content="<?= $_page['description'] ?>" />

    <!-- Twitter Card Tags -->
    <meta property="twitter:card" content="summary" />
    <meta property="twitter:site" content="@viralpickaxe" />
    <meta property="twitter:title" content="<?= $_page['title'] ?>" />
    <meta property="twitter:description" content="<?= $_page['description'] ?>" />
    <meta property="twitter:image" content="http://iamjamiedavies/assets/img/profilepics/333.png" />

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
        <li><a href="http://github.com/viralpickaxe" target=_blank data-jobtitleprefix="an" data-jobtitle="Open Source Developer">GitHub <span class="icon-github"></span></a></li>
        <li><a href="http://twitter.com/viralpickaxe" target=_blank data-jobtitleprefix="an" data-jobtitle="Avid Tweeter">Twitter <span class="icon-twitter"></span></a></li>
        <li><a href="http://www.linkedin.com/in/viralpickaxe" target=_blank data-jobtitleprefix="a" data-jobtitle="Bid'nis Guy">LinkedIn <span class="icon-linkedin"></span></a></li>
      </ul>
    </header>

    <?php include(DOCUMENT_ROOT.'/pages/'.$_page['file'].'.php') ?>

    <footer>
      <div class="container">
        © <?= date("Y") ?> Jamie Davies.
      </div>
    </footer>

  </body>
  <script src="assets/js/script.min.js"></script>
  <script src="assets/js/pages/<?= $_page['file'] ?>.min.js"></script>
</html>