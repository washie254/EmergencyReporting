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

<!-- Mirrored from www.enableds.com/products/asterial/asterial-footer/page-profile-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:29:24 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Account</title>
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
<a href="#" class="back-button header-title">Back </a>
<a href="#" class="header-icon header-icon-1 back-button"><i class="fas fa-arrow-left"></i></a>
<a href="#" class="header-icon header-icon-2" data-toggle-theme><i class="fa fa-moon"></i></a>
</div>
<div class="footer-menu footer-5-icons footer-menu-center-icon">
<a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
<a href="report.php" ><i class="fa fa-file"></i><span>report</span></a>
<a href="map.php"><i class="fa fa-map"></i><span>Map</span></a>
<a href="contact.php"><i class="fa fa-book"></i><span>contact</span></a>
<a href="account.php" class="active-nav"><i class="fa fa-user"></i><span>Account</span></a>
<div class="clear"></div>
</div>
<div class="page-content header-clear-large">
<div class="profile-header">
<div class="profile-left">
<h1><?=$_SESSION["username"]?><i class="fa fa-check-circle color-highlight"></i></h1>
<p>
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
<?=$fname?>  <?=$lname?><br>
<?=$uemail?><br>
<?=$tel?><br>
<b>ID:</b> <?=$idnumb?><br>
<b>DOB:</b> <?=$dob?>

 
</p>
<a href="#" class="color-theme">0 <span> Reported </span></a>
<a href="#" class="color-theme">0 <span> Solved</span></a>
<div class="clear"></div>
</div>
<div class="profile-right">
<a href="#">
<img src="images/empty.png" data-src="images/user.png" class="preload-image shadow-large">
</a>
</div>
</div>
<div class="content bottom-0">
<div class="one-half">
<a href="report.php" class="button button-xs round-small shadow-large bg-highlight button-full bottom-30">Report Emergency</a>
</div>
<div class="one-half last-column">
<a href="#" class="button button-xs round-small shadow-large button-border button-full border-highlight color-highlight bg-transparent bottom-0">Update Profile</a>
</div>
<div class="clear"></div>
</div>
<div class="divider divider-margins bottom-0"></div>
<div class="content gallery-view-controls">
    <!-- <a href="#" class="gallery-view-2-activate"><i class="fa fa-user"></i></a>
    <div class="clear"></div> -->
</div>

<div class="content bottom-20">
<div class="content">
		<h2>Account operations</h2>
		<p>
			awesome stuff 
		</p>
		<div class="divider bottom-0"></div>
		<a href="#" data-dropdown="dropdown-1" class="dropdown-style-1">
			<i class="fa fa-shield-alt color-red1-light"></i>
			<p class="color-theme">Reported Emergencies</p>
			<i class="fa dropdown-icon fa-angle-down color-theme"></i>
		</a>
			
		<div class="dropdown-content" id="dropdown-1">
			<div class="link-list link-list-1 link-list-no-border">
                <p> Reported emergencies</p>
                <?php
                    $query1 = "SELECT * FROM emergency WHERE username='$user'";
                    $result1 = mysqli_query($db, $query1);

                    while($row = mysqli_fetch_array($result1, MYSQLI_NUM)){

                        echo '
                            <div class="content bottom-0">
                                <a href="#" class="clear">
                                    <div class="one-half small-half">
                                        <div data-height="95" class="caption round-small shadow-huge">
                                            <div class="caption-image">
                                                <img src="EmergencyImages/'.$row[3].'" class="responsive-image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="one-half large-half last-column">
                                        <h5 class="color-theme"><b>'.$row[5].'<b> | </b>'.$row[12].' </h5>
                                        <span class="under-heading font-10 color-highlight"><b> ON: '.$row[10].'</b></span>
                                        <p class="font-12">
                                            '.$row[6].' 
                                        </p>
                                        
                                    </div>
                                </a>
                            </div>
                        ';
                    }
                ?>
			</div>
		</div>
        <div class="divider bottom-0"></div>
        
		<a href="#" data-dropdown="dropdown-2" class="dropdown-style-1">
			<i class="fa fa-envelope color-blue2-dark"></i>
			<p class="color-theme">Update Profile</p>
			<i class="fa dropdown-icon fa-angle-down color-theme"></i>
		</a>
		
		<div class="dropdown-content" id="dropdown-2">
			<div class="link-list link-list-1 link-list-no-border">
				
			</div>
		</div>
		<div class="divider bottom-0"></div>
		
		<a href="#" data-dropdown="dropdown-3" class="dropdown-style-1">
			<i class="fa fa-phone color-green1-dark"></i>
			<p class="color-theme">Phones</p>
			<i class="fa dropdown-icon fa-angle-down color-theme"></i>
		</a>
		
		<div class="dropdown-content" id="dropdown-3">
			<div class="link-list link-list-1 link-list-no-border">
				<a href="tel: +1 234 567 890"><i class="fa color-green1-dark fa-home"></i><span>Tap to Call Home</span><i class="fa fa-angle-right"></i></a>
				<a href="tel: +2 234 567 890"><i class="fa color-brown1-dark fa-briefcase"></i><span>Tap to Call Business</span><i class="fa fa-angle-right"></i></a>
				<a href="tel: +3 234 567 890"><i class="fa color-gray2-dark fa-building"></i><span>Tap to Call Office</span><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="menu-hider"></div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
