<?php include('server.php');?>

<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from www.enableds.com/products/asterial/asterial-footer/page-login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:29:27 GMT -->
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
<div class="header header-fixed header-logo-app">
<a href="#" class="back-button header-title">LOGIN</a>
<a href="#" class="header-icon header-icon-1 back-button"></a>
<a href="#" class="header-icon header-icon-2" data-toggle-theme><i class="fa fa-moon"></i></a>
</div>
<!-- <div class="footer-menu footer-5-icons footer-menu-center-icon">
<a href="pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
<a href="components.html"><i class="fa fa-gift"></i><span>Features</span></a>
<a href="index.html"><i class="fa fa-home"></i><span>Home</span></a>
<a href="media.html"><i class="fa fa-camera"></i><span>Media</span></a>
<a href="page-menu.html"><i class="fa fa-bars"></i><span>Menu</span></a>
<div class="clear"></div>
</div> -->
<div class="page-content header-clear-large">
<div class="content left-30 right-30">
<h1 class="font-30" style="text-align: center;">Welcome</h1><br>
<h2 class="font-16 under-heading color-highlight bold" style="text-align: center;">Please Login to Continue</h2>
<form method="post" action="login.php">
    <style> 
       .error {
            width: 92%; 
            margin: 0px auto; 
            padding: 1px; 
            border: 1px solid #a94442; 
            color: #a94442; 
            background: #f2dede; 
            border-radius: 5px; 
            text-align: left;
        }
    </style>
    <?php include('errors.php');?>
    <div class="input-style input-style-1 input-required top-50">
        <span>Username</span>
        <em>(required)</em>
        <input type="name" name="username" placeholder="Username">
    </div>
    <div class="input-style input-style-1 input-required">
        <span>Password</span>
        <em>(required)</em>
        <input type="password" name="password" placeholder="Password">
    </div>
    <div class="clear"></div>
    <button type="submit" name="login_user" class="back-button button button-full button-m round-small shadow-huge bg-highlight top-50 bottom-50" style="width:100%">LOGIN</button>
    <div style="text-align: center;">
        <a href="register.php">Register an account :)</a></span>
    </div>
</form>
</div>
</div>
<div class="menu-hider"></div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
