
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
<link href='http://fonts.googleapis.com/css?family=Arimo:regular,italic,700,700italic' rel='stylesheet' type='text/css'>






  <?php
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://apple.socialnetwk.com');

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
.DiscoverViewCont {
  width:100%;
  margin-top:40px;
  margin-left:100px;
  height:100%;
  overflow: scroll;
  -webkit-overflow-scrolling: touch;
  position: relative;
  background:none;
  padding:20px;
  padding-top:10px;
}

.DSInput {
border:2px solid  #4787c1;
  width:78%;
  height:30px;
  margin-right:200px;
  color:black;
  border-radius: 10px;
  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  margin-bottom:20px;
}
a {text-decoration: none;color:white;}

.DVRLoopCnt {
 display:inline-table;
	height:auto;
	margin-top:none;
	margin-left:10px;
	position: relative;
	width:500px;
  margin-right:auto;
  margin-bottom:20px;
  padding:10px;
  color:black;

}
.DVRMainCnt {
  max-width:90%;
  width:auto;
  height:100%;
  margin-left:80px;
  padding:0px;
  color:black;
  position: relative;
  background:#efefef;
  border-radius: 5px;
  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
}
.DVRHeader {
  width:0;
  height:0;
  border-top: 12px solid transparent;
  border-left: 25px solid #efefef;
  border-bottom: 12px solid transparent;
  float:left;
  left:50px;

  top:15px;
  color:black;
  position: relative;

}
.DVRUIMG {
  float:left;
  width:50px;
  height:50px;
  bottom:25px;
  right:80px;
  border-radius: 5px;
  position: relative;
  -webkit-box-shadow: 0px 0px 20px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 20px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 20px 4px rgba(0,0,0,1);
}
iframe {
  width:100%;
  max-height:100%;
  position: relative;
  margin:0px;
  padding:0px;

}
.DVRFooter {
  width:100%;
  height:auto;
  padding:10px;
  position: relative;
  color:#3498DB;
  background:#2C3E50;
}
.DVIShareICO {
  width:100%;
  height:50px;
  font-size: 20px;
  color:#2980B9;

  position: relative;
  text-align: center;
}
.DVRContent { 
padding:0px;
height:auto;
background: black;
margin:0px;


}

.glyphicon-heart:hover {
    color:#E74C3C;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.glyphicon-refresh:hover {
    color:#27AE60;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.glyphicon-thumbs-up:hover {
    color:#27AE60;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.glyphicon-thumbs-down:hover {
    color:#E74C3C;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.DVRContentHead { 
padding:10px;
width:100%;
height:auto;
background: #ECF0F1;

}
.SideNav {
  margin-top:100px;
  width:100px;
  margin-left: 20px;
  height:80%;
  background:none;
  border-radius: 10px;
  position: fixed;
  float:left;
  color:black;
  z-index: 100;
}
.DisSphere {
  border-radius: 50px;
  height:80px;
  width:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
z-index: 100;
padding-top:10px;
  position: relative;
  background:#2C3E50;
  color:white;
  text-align: center;
    -webkit-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  box-shadow: 0px 0px 36px 2px rgba(0,0,0,1); 
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
a {
  text-decoration: none;
  color:white;
}
a:hover {
  text-decoration: none;
  color:white;
}
</style>

<div class="Navbar">
			<nav id="navbar">
				<img class="Logo" src="../images/socialnetwk.png"/>
				<form action="search.php" method="GET" >
				<input class="Search" type="text" name="query"  placeholder="Search for people, pages, videos, etc"/>
				</form>
			  <ul>
			    <a href="index.php"><li >Home</li></a>
			    <a href="settings.php"><li>Settings</li></a>
			    <a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><li>Profile</li></a>
			    <a href="help.php"><li>Help</li></a>
			    <a href="discover.php"><li class="active">Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li>Logout</li></a>
			  </ul>
			</nav>
	</div>
<style>
.SideNav {
  margin-top:100px;
  width:100px;
  margin-left: 20px;
  height:80%;
  background:none;
  border-radius: 10px;
  position: fixed;
  float:left;
  color:black;
  z-index: 100;
}
.DisSphere {
  border-radius: 50px;
  height:80px;
  width:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
z-index: 100;
padding-top:10px;
  position: relative;
  background:#2C3E50;
  color:white;
  text-align: center;
    -webkit-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  box-shadow: 0px 0px 36px 2px rgba(0,0,0,1); 
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
.DisSphereActive {
  border-radius: 50px;
  height:80px;
  width:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
z-index: 100;
padding-top:10px;
  position: relative;
 
 text-align: center;
  background:#2C3E50;
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
a {
  text-decoration: none;
  color:white;
}
a:hover {
  text-decoration: none;
  color:white;
}
.DVRImgR {
	max-width: 100%;
	position: relative;
}
</style>
<div class="SideNav">
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
</div>

<div class="DiscoverViewCont">
<form action="discoversearch.php" method="GET" >
  <center><input class="DSInput" type="text" name="discover"  placeholder="Search tags for videos..."/></center>
</form>
  <?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');


$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>

<?php $query = $_GET['discover'];  $tagsload = $db->query("SELECT * FROM hashtags WHERE (`tag` LIKE '%".$query."%')"); ?>
<?php while($tags = $tagsload->fetch_object()): ?>
<?php $mediaload = $db->query("SELECT * FROM media WHERE post_id='".$tags->post_id."' AND userID='".$tags->uid."'");?>
<?php while($media = $mediaload->fetch_object()): ?>      
<?php $usersload = $db->query("SELECT * FROM users WHERE id='".$tags->uid."'");?>
<?php while($users = $usersload->fetch_object()): ?> 
<?php
	$profile_image_feed = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$media->userID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($pimage_feed = $profile_image_feed->fetch_object()): ?>   

	 <?php 
$newCaption = preg_replace('/#\S+ */', '', $media->MediaTxt); ?>
<?php
$MediaTxtNew = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
  <div class="DVRLoopCnt">
    <div class="DVRHeader">
      <img class="DVRUIMG" src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"/>
      
    </div>
    <div class="DVRMainCnt">

      <div class="DVRContent">
        <div class="DVRContentHead">
        <h5><?= $users->firstname ?>  <?= $users->lastname ?></h5>
      <h6>Posted on <?= $media->date ?><?= $media->time ?></h6>
        <h5>  <?php 
echo $MediaTxtNew;
?></h5>
      </div>
<?php 
echo $newCaption;
?><br/>
    				<<?= $media->format ?> alt="" class="DVRImgR" style="color:black;text-transform: capitalize;" class="FeedRCntSize"  id="video" data-setup='{"example_option":true}' src="http://www.socialnetwk.com/media/<?=$media->file_format?>/<?=$media->post_id?><?=$media->author_id?>.<?=$media->file_format?>" controls onerror="this.src='default.png'"/> 
</<?= $media->format ?>>

      </div>
      <div class="DVRFooter">
        <h6><?php
	$tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$media->post_id."' AND uid='".$media->userID."'");?><?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/discoversearch.php?discover=<?= $tags->tag ?>">#<?= $tags->tag ?><?php endwhile;?></a></h6>
        <div class="DVIShareICO">
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-heart"></span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-refresh"></span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-thumbs-up"></span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-thumbs-down"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile;?>
<?php endwhile;?>
<?php endwhile;?>
<?php endwhile;?>








</div>






		
</body>


</html> 