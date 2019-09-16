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
<?php   
    $userl = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username='$userl'";
    $result = mysqli_query($db, $query);
    
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
    $uid=$row[0];
    $uname=$row[1];
}?>
<script>
      if(!navigator.geolocation){
        alert('Your Browser does not support HTML5 Geo Location. Please Use Newer Version Browsers');
      }
      navigator.geolocation.getCurrentPosition(success, error);
      function success(position){
        var latitude  = position.coords.latitude;	
        var longitude = position.coords.longitude;	
        var accuracy  = position.coords.accuracy;
        document.getElementById("lat").value  = latitude;
        document.getElementById("lng").value  = longitude;
        document.getElementById("acc").value  = accuracy;
      }
      function error(err){
        alert('ERROR(' + err.code + '): ' + err.message);
      }
</script>
<body class="theme-light" data-highlight="blue2">
<div id="page">
<div id="page-preloader">
<div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
</div>
<div class="header header-fixed header-logo-app">
<a href="#" class="back-button header-title">Report an Emergency</a>
<a href="#" class="header-icon header-icon-1 back-button"></a>
<a href="#" class="header-icon header-icon-2" data-toggle-theme><i class="fa fa-moon"></i></a>
</div>
<div class="page-content header-clear-large">
<div class="content left-30 right-30">
<form action="report.php" method="post" enctype="multipart/form-data" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
    <input type="text" id="lat" name="lat" style="opacity: 0;"/>
    <input type="text" id="lng" name="lng" style="opacity: 0;"/>
    <?php include('errors.php');?>
    <div class="input-style input-style-1 input-required top-50">
        <label for="image">Select Image</label><br>
        <input type="file" name="image">
    </div>
    <div class="input-style input-style-1 input-required top-50">
        <span>Title</span>
        <em>(required)</em>
        <input type="name" name="title" placeholder="insert Brief Title">
    </div>
    <div class="input-style input-style-1 input-required top-50">
        <span>Category</span>
        <em>(required)</em>
        <select type="name" name="category">
            <option  value="Bites">Bites</option>
            <option  value="Fructure">Fructure</option>
            <option  value="Poisoning">Poisoning</option>
            <option  value="Injuries">Injuries</option>
            <option  value="Burns">Burns</option>
        </select>
    </div>
    <div class="input-style input-style-1 input-required">
        <span>Desciption</span>
        <em>(required)</em>
        <textarea type="name" name="description" placeholder="insert a brief description"></textarea>
    </div>
    <div class="input-style input-style-1 input-required">
        <span>Location</span>
        <em>(required)</em>
        <input type="name" name="location" placeholder="Insert your Location">
    </div>
    <input name="username" value="<?=$uname?>" style="opacity: 0;"/>
    <input name="userid" value="<?=$uid?>"  style="opacity: 0;"/>

    <div class="clear"></div>
    <button type="submit" name="report_em" class="back-button button button-full button-m round-small shadow-huge bg-highlight top-50 bottom-50" style="width:100%">REPORT EMERGENCY</button>
    <div class="clear"></div><br>
</form>
</div>
</div>
<div class="menu-hider"></div>
<div class="footer-menu footer-5-icons footer-menu-center-icon">
<a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
<a href="report.php"  class="active-nav" ><i class="fa fa-file"></i><span>report</span></a>
<a href="map.php"><i class="fa fa-map"></i><span>Map</span></a>
<a href="contact.php"><i class="fa fa-book"></i><span>contact</span></a>
<a href="account.php"><i class="fa fa-user"></i><span>Account</span></a>
<div class="clear"></div>
</div>
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
