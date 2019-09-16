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

<!-- Mirrored from www.enableds.com/products/asterial/asterial-footer/page-vcard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:29:24 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>EMR App</title>
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
<a href="#" class="back-button header-title">Contacts</a>
<a href="#" class="header-icon header-icon-1 back-button"><i class="fas fa-arrow-left"></i></a>
<a href="#" class="header-icon header-icon-2" data-toggle-theme><i class="fa fa-moon"></i></a>
</div>
<div class="footer-menu footer-5-icons footer-menu-center-icon">
<a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
<a href="report.php" ><i class="fa fa-file"></i><span>report</span></a>
<a href="map.php" ><i class="fa fa-map"></i><span>Map</span></a>
<a href="contact.php" class="active-nav"><i class="fa fa-book"></i><span>contact</span></a>
<a href="account.php"><i class="fa fa-user"></i><span>Account</span></a>
<div class="clear"></div>
</div>
<div class="page-content header-clear">
<div class="page-title has-subtitle">
<div class="page-title-left">
<a href="#" class="font-22">V-Card</a>
<span class="color-highlight">Get our Contact</span>
</div>
<div class="page-title-right">
<a href="#"><i class="fab color-facebook fa-facebook-f"></i></a>
<a href="#"><i class="fab color-twitter fa-twitter"></i></a>
<a href="#"><i class="fab color-instagram fa-instagram"></i></a>
</div>
</div>
<div class="divider divider-margins"></div>
<a href="#" data-height="160" class="caption caption-margins round-medium shadow-huge bottom-50">
<div class="caption-bottom left-15 bottom-15">
<h1 class="color-white font-30"><?=$_SESSION["username"]?></h1>
<?php
    $user = $_SESSION['username'];

    $query0 = "SELECT * FROM userprofile WHERE username='$user'";
    $result0 = mysqli_query($db, $query0);

    while($row = mysqli_fetch_array($result0, MYSQLI_NUM)){
        $uemail=$row[2];
        $fname=$row[3];
        $lname=$row[4];
        $idnumb = $row[5];
        $tel =$row[6];
        $dob =$row[7];
    }
?>
<p class="color-white under-heading opacity-70 bottom-0 font-11"><?=$uemail?></p>
</div>
<div class="caption-top top-15 right-15">
<span class="button button-xxs float-right bg-white round-small color-black">Get V-Card</span>
</div>
<div class="caption-overlay bg-black opacity-70"></div>
<div class="caption-bg bg-18"></div>
</a>
<div class="content bottom-50">
<div class="content-title has-border border-highlight bottom-20">
<h5>Phones</h5>
</div>
<div class="vcard-field"><strong>Mobile</strong><a href="tel:+254719 782364">+254 719 782364</a><i class="fa fa-phone"></i></div>
<div class="vcard-field"><strong>Office</strong><a href="tel:+254719 782364">+254719 782 364</a><i class="fa fa-suitcase"></i></div>
</div>
<div class="content bottom-50">
<div class="content-title has-border border-highlight bottom-20">
<h5>Address</h5>
</div>
<div class="vcard-field"><strong>Work</strong><a href="tel:+254719 782364">Kangemi, Nyeri Town <br> 14 Toward Skuta</a><i class="fa fa-map-marker"></i></div>
</div>
<div class="content bottom-50">
<div class="content-title has-border border-highlight bottom-20">
<h5>Email</h5>
</div>
<div class="vcard-field"><strong>Home</strong><a href="mailto:nyerigen@gmail.com">nyerigen@gmail.com</a><i class="fa fa-home"></i></div>
<div class="vcard-field"><strong>Office</strong><a href="mailto:Liz.nyerigen@gmail.com">Liz.nyerigen@gmail.com</a><i class="fa fa-suitcase"></i></div>
</div>
<div class="content bottom-50">
<div class="content-title has-border border-highlight bottom-20">
<h5>Website</h5>
</div>
<div class="vcard-field no-border"><strong>URL</strong><a href="#">www.emerApp.com</a><i class="fa fa-globe"></i></div>
</div>
<div class="content bottom-0">
<div class="content-title has-border border-highlight bottom-20">
<h5>Social Pages</h5>
</div>
<div class="vcard-field"><strong>Facebook</strong><a href="#">Emergecy Reporting</a><i class="fab fa-facebook"></i></div>
<div class="vcard-field"><strong>Twitter</strong><a href="#">@emer.Reporting</a><i class="fab fa-twitter"></i></div>
<div class="vcard-field no-border"><strong>Google Plus</strong><a href="#">@karla.black</a><i class="fab fa-google-plus"></i></div>
</div><br>
<div class="divider divider-margins"></div>
</div>
<div class="menu-hider"></div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
