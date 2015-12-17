<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="da" dir="ltr" class="ie6 no-js"><![endif]-->
<!--[if IE 7 ]><html lang="da" dir="ltr" class="ie7 no-js"><![endif]-->
<!--[if IE 8 ]><html lang="da" dir="ltr" class="ie8 no-js"><![endif]-->
<!--[if IE 9 ]><html lang="da" dir="ltr" class="ie9 no-js"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da" dir="ltr"><!--<![endif]-->
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>

	<?php include 'includes/styles.php';?>

	<link rel="icon" href="http://www.tajmer.dk/favicon.ico" type="image/x-icon" />
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-12693954-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body class="nav-is-fixed">
