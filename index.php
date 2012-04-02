<?php
$item_id = 1;
$item_img = '36gYq';
if (isset($_GET['item']) && $_GET['item'] == 2) {
  $item_id = 2;
  $item_img = 'CRV5M';
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>OG Demo</title>
  <meta name="description" content="">
  <meta property="og:title" content="Item #<?php echo $item_id; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://staging6.arn.com/dotrakoun/ogdemo/img/<?php echo $item_img; ?>.jpg">
  <meta property="og:url" content="http://staging6.arn.com/dotrakoun/ogdemo/?item=<?php echo $item_id; ?>">
  <link rel="canonical" href="http://staging6.arn.com/dotrakoun/ogdemo/?item=<?php echo $item_id; ?>">
  <meta property="og:site_name" content="OG Demo">
  <meta property="fb:admins" content="16109547">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <header>
<h1>Facebook OpenGraph demo</h1>
  </header>
  <div role="main">

  <p><?php if (isset($_GET['item']) && $_GET['item'] == 2) { ?>
viewing with item 2
<?php } else { ?> (default) item 1 <?php } ?></p>

<h2>Like button for item 1</h2>
<p>This likes http://staging6.arn.com/dotrakoun/ogdemo/</p>
<p>See what facebook thinks this link is: <a href="https://developers.facebook.com/tools/debug/og/object?q=http%3A%2F%2Fstaging6.arn.com%2Fdotrakoun%2Fogdemo%2F">Lint the URL</a></p>
<div class="fb-like" data-href="http://staging6.arn.com/dotrakoun/ogdemo/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>

<h2>Like button for item 2</h2>
<p>This likes http://staging6.arn.com/dotrakoun/ogdemo/?item=2</p>
<p>See what facebook thinks this link is: <a href="https://developers.facebook.com/tools/debug/og/object?q=http%3A%2F%2Fstaging6.arn.com%2Fdotrakoun%2Fogdemo%2F%3Fitem%3D2">Lint the URL</a></p>
<div class="fb-like" data-href="http://staging6.arn.com/dotrakoun/ogdemo/?item=2" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
    
  </div>
  <footer>

  </footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=379465548744237";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
