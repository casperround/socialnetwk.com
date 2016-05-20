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
$db = new mysqli("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp", "pdo_ret");
if($db->connect_error) die("Could not connect to MySQL because of error number ".$db->connect_errno.": ".$db->connect_error);
$users = $db->query("SELECT firstname, id, lastname, video, image, text  FROM users");
?>
</head>


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
			    <a href="help.php"><li>Help</li></a>
			    <a href="discover.php"><li   class="active">Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li >Logout</li></a>
			  </ul>
			</nav>
	</div>
	
	
  
  
  
  <style type='text/css'>
  html {
	  width:100%;
	  height:100%;
  }
  body {
	  height:100%;
	  width:100%;
	  	    	background: #092756;
 background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top, rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg, #670d10 0%,#092756 100%);
 background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom, rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg, #670d10 0%,#092756 100%);
  }
.DiscoverViewCnt {
  width:100%;
  height:100%;
  overflow: scroll;
  -webkit-overflow-scrolling: touch;
  position: fixed;
  background:none;
  padding:20px;
  padding-top:150px;
}
.DisSphere {
  width:150px;
  height:150px;
  -webkit-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  box-shadow: 0px 0px 36px 2px rgba(0,0,0,1); 
  display: inline-block;
  border-radius: 100px;
  margin-right:25px;
  margin-left:25px;
  margin-bottom:50px;
  background:#2C3E50;
  padding:10px;
  padding-top:30px;
  text-align: center;
  font-size: 50px;
  -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
}
.DisSphere:hover {
  
  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);

  color:#3498DB;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;


}
a {text-decoration: none;color:white;}
</style>
<div class="DiscoverViewCnt">
<center>
  <a href="dvideo.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-film"></span>
    <h6>Videos</h6>
  </div></a>
  <a href="dmusic.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-headphones"></span>
    <h6>Music</h6>
  </div></a>
  <a href="dpicture.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-picture"></span>
    <h6>Pictures</h6>
  </div></a><br/>
  <a href="dgif.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-picture">-</span><span class="glyphicon glyphicon-film"></span>
    <h6>Gif's</h6>
  </div></a>
  <a href="dchannel.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-list-alt"></span>
    <h6>Channels</h6>
  </div></a>
  <a href="dpage.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-th-list"></span>
    <h6>Pages</h6>
  </div></a>
</center>
</div>



</body>
</html>