<?php
	// http://leafo.net/lessphp/docs/
	require "inc/lessc.inc.php";
	$less = new lessc;
	$less->compileFile("assets/css/core.less", "assets/css/core.css");		
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Welcome to XXXX</title>
		
		<link href="assets/css/core.css" rel="stylesheet">
		
		<!--
		<link rel="shortcut icon" href="favicon.ico">
		
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		-->
	</head>
	
	<body>
		<!-- container -->
		<div class="layout-container">
			<!-- print header -->
			<div class="layout-printheader clearfix"><img src="assets/img/global/logo.gif" alt="XXXX logo"></div>
			
			<!-- header -->
			<div class="layout-header">
				<!-- logo -->
				<a href="" class="layout-logo" title="Return to home page"><img src="assets/img/global/logo.gif" alt="XXXX logo"></a>
				
				<!-- navigation -->
				<ul class="layout-navigation">
					<li><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
				</ul>
				
				<!-- search form -->
				<form action="" method="post" class="layout-search-form">
					<input type="text" name="searchterm" placeholder="Search the site">
					<input type="submit" name="submit" value="Go">
				</form>
			</div>
			
			<!-- article -->
			<div class="layout-article">
				<h1>Welcome to XXXX</h1>
				
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				
				<p class="alert">alert</p>
				
				<p class="alert is-error">error</p>
				
				<p class="alert is-notice">notice</p>
				
				<p class="alert is-success">success</p>
				
				<p class="alert is-info">info</p>
				
				<p><a href="" class="btn">btn</a></p>
			</div>
			
			<!-- footer -->
			<div class="layout-footer">
				<ul>
					<li class="first-child"><a href="">Privacy Privacy</a></li>
					<li><a href="">Site Map</a></li>
					<li>&copy; 2012 XXXX</li>
					<li class="last-child">Developed by <a href="">XXXX</a></li>
				</ul>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="assets/js/core.js"></script>
	</body>
</html>