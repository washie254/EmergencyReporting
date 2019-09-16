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

<!-- Mirrored from www.enableds.com/products/asterial/asterial-footer/index-landing-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:30:26 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>EMR APP</title>
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
<div class="page-content">
<div class="page-title has-subtitle">
<div class="page-title-left">
<span class="page-date uppercase color-highlight"></span>
<a href="#">EMR App</a>
</div>
<!-- <div class="page-title-centre">
<a href="#" data-toggle-theme><i class="fa fa-user"></i></a>
</div> -->
<div class="page-title-right">
<a href="#"><?=$_SESSION["username"]?></a>
<a href="#" data-toggle-theme><i class="fa fa-user"></i></a>
<a href="index.php?logout='1'" style="color: red;">logout</a>
<a href="#" data-toggle-theme><i class="fa fa-moon"></i></a>
</div>
<div class="footer-menu footer-5-icons footer-menu-center-icon">
<a href="index.php" class="active-nav"><i class="fa fa-home"></i><span>Home</span></a>
<a href="report.php" ><i class="fa fa-file"></i><span>report</span></a>
<a href="map.php"><i class="fa fa-map"></i><span>Map</span></a>
<a href="contact.php"><i class="fa fa-book"></i><span>contact</span></a>
<a href="account.php"><i class="fa fa-user"></i><span>Account</span></a>
<div class="clear"></div>
</div>
</div>
<div class="divider divider-margins"></div>
<div class="grid-icons grid-icons-2">
<a href="report.php" class="bg-theme round-medium shadow-huge scale-hover">
<i class="fa fa-file color-yellow1-dark"></i>
<span class="color-theme">Report Emergency</span>
</a>
<a href="tel:+254719782364" class="bg-theme round-medium shadow-huge scale-hover">
<i class="fa fa-phone color-red1-dark"></i>
<span class="color-theme">HotLine</span>
</a>
<a href="map.php" class="bg-theme round-medium shadow-huge scale-hover">
<i class="fa fa-map color-green1-dark"></i>
<span class="color-theme">Maps</span>
</a>
<a href="settings.php" class="bg-theme round-medium shadow-huge scale-hover">
<i class="fa fa-cog color-blue2-dark"></i>
<span class="color-theme">Settings</span>
</a>
<a href="account.php" class="bg-theme round-medium shadow-huge scale-hover">
<i class="fa fa-user color-magenta1-dark"></i>
<span class="color-theme">Account</span>
</a>
<a href="contact.php" class="bg-theme round-medium shadow-huge scale-hover">
<i class="fa fa-envelope color-blue1-dark"></i>
<span class="color-theme">Contact</span>
</a>
</div>
<div class="clear"></div>
<div class="divider divider-margins top-20"></div>
<div class="content center-text bottom-0">
<p class="bottom-0">
<!-- <a href="#" class="scale-hover bg-theme icon icon-m color-facebook icon-circle shadow-huge"><i class="fab fa-facebook-f"></i></a>
<a href="#" class="scale-hover bg-theme left-15 right-15 icon icon-m color-phone icon-circle shadow-huge"><i class="fa fa-phone"></i></a>
<a href="#" class="scale-hover bg-theme icon icon-m color-twitter icon-circle shadow-huge"><i class="fab fa-twitter"></i></a> -->
</p>
<p class="font-10 top-0 bottom-0 opacity-30">Copyright <span class="copyright-year"></span>. Al Rights Reserved</p>
</div>
</div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
