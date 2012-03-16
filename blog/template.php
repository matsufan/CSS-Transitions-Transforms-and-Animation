<?
include($_SERVER['DOCUMENT_ROOT']."/constants.php");

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title><?= $post_title ?></title>
		<meta name="description" content="<?= $post_description ?>" />
		<meta name="google-site-verification" content="zTH7hEgeKVTkOu0F5bO5Guw9iRHWBJdCX0RpMASGZVI" />		
		<link rel="stylesheet" href="/styles/default.css" media="screen" />		
<script>
window.google_analytics_uacct = "UA-16444273-1";
</script>		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		<script src="/js/modernizr-newest.min.js"></script>
		<script type="text/javascript" src="/js/prettify.js"></script>

		<script>
			$(document).ready(function() {
				$('.hover').bind('touchstart touchend', function(e) {
					e.preventDefault();
					$(this).toggleClass('hover_effect');
				});
			});
		</script>
		
		<link rel=alternate type=application/atom+xml href=/feed.xml />		
		
	</head>		
	<body onload="prettyPrint()">		

<!-- BuySellAds.com Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds.com Ad Code -->

	<div id="top_ads">
<!-- BuySellAds.com Zone Code -->
<div id="bsap_1273358" class="bsarocks bsap_6db88c5a69495071ea29eb766bc6ddf6"></div>
<!-- End BuySellAds.com Zone Code -->
	</div>

	<header>
		<h1><a href="/blog/">CSS/HTML news, techniques and information</a></h1>
	</header>	

	<section id="blog_post">
		<p>&laquo; Back to the main <a href="/">CSS transitions tutorial</a></p>		
		<?= $post_content ?>
				<? include($_SERVER['DOCUMENT_ROOT']."/disqus.php"); ?>	

	</section>
	<? include($_SERVER['DOCUMENT_ROOT']."/footer.php");?>

	</body>
</html>