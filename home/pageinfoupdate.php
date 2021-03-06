<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->
<!-- AUTHOR CASPER JOHN ROUND -->
<!-- THIS CONTENT IS NOT TO BE USED PUBLICLY OR UNDER ANY DOMAIN NOT AUTHORIZED TO HOLD THIS CONTENT -->
<!-- PUBLIC RELEASE OF THIS CONTENT IS FORBIDDEN UNLESS GIVEN AUTHORITY BY THE AUTHOR -->
<!-- DISTRIBUTION OF THIS CONTENT IS ALSO FORBIDDEN -->
<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->



<!DOCTYPE html>
<html lang="en-US">

<head>
	<!-- META -->
	<title>Socialnetwk - Create Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Casper Round" />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="Create an account or login to Socialnetwk. Socialnetwk connects you and your friends, allowing you to share any media, and giving you the ability to change the site to how you want it, while connecting any type of social media" />
    <meta name="keywords" content="social,socialnetwk,network,media,community,friends,people,life,skills,pictures,video,films,music,login,register,sign up,artists,facebook,youtube,instagram,twitter,tumblr,google" />
    <meta name="robots" content="noindex,nofollow">
   	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
   	<link rel="shortcut icon" type="image/png" href="http://dev.socialnetwk.com/favicon.ico"/>
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/layout.css" type='text/css'>
	<!-- FONTS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Bad+Script|Tangerine|Great+Vibes|Cinzel+Decorative|Cinzel&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
  <?php
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com');

?>
<?php
	require_once('../connection.php');

	?>
	<?php
error_reporting(E_ERROR);
$page = $_SERVER['PHP_SELF'];
$sec = "0.5";
$db = new mysqli("localhost", "root", "nKyGWryQDhZvcpAzDKWQ", "pdo_ret");
if($db->connect_error) die("Could not connect to MySQL because of error number ".$db->connect_errno.": ".$db->connect_error);
$users = $db->query("SELECT firstname, id, lastname, video, image, text  FROM users");
?>
<?php

$users = $db->query("INSERT INTO sessions (usr_id, status) values (''".$_SESSION['user']['id']."',1')
WHERE not exists(SELECT * FROM sessions where usr_id='".$_SESSION['user']['id']."')")
?>
</head>


<body>
	<div class="Navbar">
			<nav id="navbar">
				<img class="Logo" src="../images/socialnetwk.png"/>
				<form action="search.php" method="GET" >
				<input class="Search" type="text" name="query"  placeholder="Search for people, pages, videos, etc"/>
				</form>
			  <ul>
			    <a href="index.php"><li>Home</li></a>
			    <a href="settings.php"><li>Settings</li></a>
			    <a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><li>Profile</li></a>
			    <a href="help.php"><li>Help</li></a>
			    <a href="discover.php"><li>Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li>Logout</li></a>
			  </ul>
			</nav>
	</div>
	
	
	
	<div class="CreatePageCont">
		<div class="CPageCont1">
			<form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/cpageupinfo.php" enctype="multipart/form-data">
				<fieldset>
					
					<div class="PageDetails">
					<?php 
					$uid = $_POST['uID'];
					$id = $_POST['id'];
					$relation = $_POST['relation'];
					$pagedetailsload = $db->query("SELECT * FROM pages WHERE id='".$id."'");?>
<?php while($pagedetails = $pagedetailsload->fetch_object()): ?>
		
					<center><h4>Editing: <?= $pagedetails->pname ?></h4></center>
					<h5>Name</h5>
				<input class="CPageInput" name="pname"  type="text"value="<?= $pagedetails->pname ?>"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Details</h5>
				<textarea class="CPageInput" name="pdetails" style="height:100px;resize:none;" type="text"><?= $pagedetails->pdetails ?></textarea>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>About</h5>
				<textarea class="CPageInput" name="pabout"  style="height:100px;resize:none;"type="text"><?= $pagedetails->pabout ?></textarea>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Website</h5>
				<input class="CPageInput" name="pwebsite" type="text"  value="<?= $pagedetails->pwebsite ?>"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Youtube Page</h5>
				<input class="CPageInput" name="pyoutube"  type="text" value="<?= $pagedetails->pyoutube ?>"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Facebook Page</h5>
				<input class="CPageInput" name="pfacebook"  type="text" value="<?= $pagedetails->pfacebook ?>"/>
				<input class="MsgInputHidden" name="id"  type="text" value="<?= $id ?>"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<center><button class="SettingsBtn" style="border:0px;width:40%;height:20px;font-size:12px;">Update!</button></center>
					<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
					<?php endwhile; ?>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	

		
</body>


</html>