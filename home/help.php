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
	<title>Socialnetwk</title>
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
<link href='http://fonts.googleapis.com/css?family=Pontano+Sans:regular' rel='stylesheet' type='text/css'>
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
</head>
<style>
		html {
	width:100%;
	height:100%;
	padding:0px;
	margin:0px;
}
body {
	position: fixed;
	color:#efefef;

	height:100%;
	width:100%;
		padding:0px;
	margin:0px;
	    	background: #092756;
 background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top, rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%);
}
.container {
	font-family: 'Pontano Sans', sans-serif;
}
</style>

<body>
	<div class="Navbar">
			<nav id="navbar">
				<img class="Logo" src="../images/socialnetwk.png"/>
				<form action="search.php" method="GET" >
				<input class="Search" type="text" name="query"  placeholder="Search for people, pages, videos, etc"/>
				</form>			  <ul>
			    <a href="index.php"><li>Home</li></a>
			    <a href="settings.php"><li>Settings</li></a>
			    <a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><li>Profile</li></a>
			    <a href="help.php"><li  class="active">Help</li></a>
			    <a href="discover.php"><li>Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li>Logout</li></a>
			  </ul>
			</nav>
	</div>
		<div class="container">
		
<h2>Your Profile</h2><br>
<HR SIZE="6"COLOR="yellow"WIDTH="80%"COLOR="white"></HR>
<h3 style="color:white"><b><li>Uploading profile image</li></b></h3>
<h5 style="color:white">Uploading a profile image is very simple, just go to www.socialnetwk.com/change-profile-picture.php </h5>
<h5 style="color:white">Or either click on the blank image on the main page, and it will redirect you to the upload form </h5>

<h3 style="color:white"><b><li>Changing background image</li></b></h3>
<h5 style="color:white">Find a background you want to use, copy the url and make sure that it's an image file. For example </h5>
<h5 style="color:white">www.socialnetwk.com/logo.jpg    paste it into the background theme www.socialnetwk.com/profile-update.php</h5>
<h5 style="color:white">Or you can click on the user image <a href="profile-update.php" style="color:white"><span style="color:#3498DB" class="glyphicon glyphicon-user btn-lg"></span></a> on the left hand side</h5>
<h3 style="color:white"><b><li>Changing profile details</li></b></h3>
<h5 style="color:white">Just go to <a href="profile-update.php" style="color:white"><span style="color:#3498DB" class="glyphicon glyphicon-user btn-lg"></span></a> on the left hand side as before, for changing the background theme, and change the apropiate details of your account.</h5>
<h2 style="color:white">Uploading/Posting</h2>
<HR SIZE="6"COLOR="yellow"WIDTH="80%"COLOR="white"></HR>
<h3 style="color:white"><b><li>Uploading media</li></b></h3>
<h5 style="color:white">Uploading various types of media is on the main page, after you login. You can upload</h5>
<h5 style="color:white">any type of media, such as videos, music, pictures, text, links etc</h5>
<h3 style="color:white"><b><li>Posting on your wall</li></b></h3>
<h5 style="color:white">To post on your wall/timeline, go to the home page <a href="main.php" style="color:white"><span style="color:#3498DB" class="glyphicon glyphicon-home btn-lg"></span></a> and use your navbar to post various types of media</h5>

<h2 style="color:white">Creating a Page</h2>
<HR SIZE="6"COLOR="yellow"WIDTH="80%"COLOR="white"></HR>
<h3 style="color:white"><b><li>Create an Event</li></b></h3>
<h5 style="color:white">Creating an event is very simple, click on the <a href="new-event.php" style="color:white"><span style="color:#3498DB" class="glyphicon glyphicon-flag btn-lg"></span></a>
 event button located on the homepage, and fill in the details for your given event.</h5>
<h5 style="color:white">Invite friends, family, members.</h5>

<h3 style="color:white"><b><li>Create a Group</li></b></h3>
<h5 style="color:white">Creating a group is very smilar to creating an Event, just click on the <a href="new-group.php" style="color:white"><span style="color:#3498DB" class="glyphicon glyphicon-th btn-lg"></span></a> button, and fill in the details for your given event.</h5>


		
		</div>





</body>

</html>