<?php include('server.php')?>
<?php 
//session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from www.enableds.com/products/asterial/asterial-footer/page-full-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:29:18 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Asterial Mobile</title>
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="images/ath.png">
</head>
<body class="theme-light" data-highlight="blue2">
<div id="page">
<div id="page-preloader">
<div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
</div>
<div class="header header-fixed header-logo-app">
<a href="#" class="back-button header-title">Back to pages</a>
<a href="#" class="header-icon header-icon-1 back-button"><i class="fas fa-arrow-left"></i></a>
<a href="#" class="header-icon header-icon-2" data-toggle-theme><i class="fa fa-moon"></i></a>
</div>
<div class="footer-menu footer-5-icons footer-menu-center-icon">
<a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
<a href="report.php" ><i class="fa fa-file"></i><span>report</span></a>
<a href="map.php" class="active-nav"><i class="fa fa-map"></i><span>Map</span></a>
<a href="contact.php"><i class="fa fa-book"></i><span>contact</span></a>
<a href="account.php"><i class="fa fa-user"></i><span>Account</span></a>
<div class="clear"></div>
</div>
<div class="page-content">
<div class="map-full">
<iframe src="https://maps.google.com/?ie=UTF8&amp;ll=-0.432,36.955&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed"></iframe>
<div data-height="cover-header" class="caption ">
<div class="caption-center">
<h1 class="center-text color-white bolder font-30">FULL SCREEN MAPS</h1>
<p class="boxed-text-large under-heading color-white opacity-90 top-10">
Browse Google Maps in Full Screen.<br> Just tap the button to scroll through it.
</p>
<a href="#" class="show-map button button-m button-center-medium bg-highlight button-round-small">ACTIVATE MAP</a>
</div>
<div class="caption-overlay bg-black opacity-80"></div>
</div>
<a href="#" class="hide-map button button-m bg-red2-dark button-round-small">DISABLE MAP</a>
</div><br><br>
</div>
<div class="menu-hider"></div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
