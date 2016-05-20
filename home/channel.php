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


<link rel="canonical" href="http://codepen.io/vlrprbttst/pen/DAjIa" />

<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

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
			    <a href="index.php"><li class="active">Home</li></a>
			    <a href="settings.php"><li>Settings</li></a>
			    <a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><li>Profile</li></a>
			    <a href="help.php"><li>Help</li></a>
			    <a href="discover.php"><li>Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li>Logout</li></a>
			  </ul>
			</nav>
	</div>
<style>
.ChannelCont {
	position: relative;
	height:100%;
	margin-top:40px;
	width:100%;
}
.CHeader {
	width:1200px;
	margin-left:auto;
	
	margin-right:auto;
	position: relative;
	-webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
	height:200px;

}
.CHeadImg {

 width: 100%;
    height: 100%;
    background-image: url("http://img15.deviantart.net/0568/i/2012/127/8/b/monstercat_media_logo_by_marise97-d4ytnaa.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;

position: relative;
}
.CHSocialCnt {
	width:200px;
	height:50px;
	padding:5px;
	float:right;
	border-radius: 10px;
	background:rgba(0,0,0,0.5);
	position: relative;
	bottom:50px;
	
}
.CHeadImgUsr {
	width:100px;
	height:100px;
	position:relative;
	float:left;
	bottom:200px;
}


</style>
<style class="cp-pen-styles">.social-cont div.social-box.facebook {
  background: #3B5998;
}
.social-cont div.social-box.facebook i.social-ico {
  text-shadow: 0px 0px #2d4373, 1px 2px #2d4373, 2px 3px #2d4373, 3px 4px #2d4373, 4px 5px #2d4373, 5px 6px #2d4373, 6px 7px #2d4373, 7px 8px #2d4373, 8px 9px #2d4373, 9px 10px #2d4373, 10px 11px #2d4373, 11px 12px #2d4373, 12px 13px #2d4373, 13px 14px #2d4373, 14px 15px #2d4373, 15px 16px #2d4373, 16px 17px #2d4373, 17px 18px #2d4373, 18px 19px #2d4373, 19px 20px #2d4373, 20px 21px #2d4373, 21px 22px #2d4373, 22px 23px #2d4373, 23px 24px #2d4373, 24px 25px #2d4373, 25px 26px #2d4373, 26px 27px #2d4373, 27px 28px #2d4373, 28px 29px #2d4373, 29px 30px #2d4373, 30px 31px #2d4373, 31px 32px #2d4373, 32px 33px #2d4373, 33px 34px #2d4373, 34px 35px #2d4373, 35px 36px #2d4373, 36px 37px #2d4373, 37px 38px #2d4373, 38px 39px #2d4373, 39px 40px #2d4373, 40px 41px #2d4373, 41px 42px #2d4373, 42px 43px #2d4373, 43px 44px #2d4373, 44px 45px #2d4373, 45px 46px #2d4373, 46px 47px #2d4373, 47px 48px #2d4373, 48px 49px #2d4373, 49px 50px #2d4373, 50px 51px #2d4373;
}

.social-cont div.social-box.email {
  background: #3B5998;
}
.social-cont div.social-box.email i.social-ico {
  text-shadow: 0px 0px #2d4373, 1px 2px #2d4373, 2px 3px #2d4373, 3px 4px #2d4373, 4px 5px #2d4373, 5px 6px #2d4373, 6px 7px #2d4373, 7px 8px #2d4373, 8px 9px #2d4373, 9px 10px #2d4373, 10px 11px #2d4373, 11px 12px #2d4373, 12px 13px #2d4373, 13px 14px #2d4373, 14px 15px #2d4373, 15px 16px #2d4373, 16px 17px #2d4373, 17px 18px #2d4373, 18px 19px #2d4373, 19px 20px #2d4373, 20px 21px #2d4373, 21px 22px #2d4373, 22px 23px #2d4373, 23px 24px #2d4373, 24px 25px #2d4373, 25px 26px #2d4373, 26px 27px #2d4373, 27px 28px #2d4373, 28px 29px #2d4373, 29px 30px #2d4373, 30px 31px #2d4373, 31px 32px #2d4373, 32px 33px #2d4373, 33px 34px #2d4373, 34px 35px #2d4373, 35px 36px #2d4373, 36px 37px #2d4373, 37px 38px #2d4373, 38px 39px #2d4373, 39px 40px #2d4373, 40px 41px #2d4373, 41px 42px #2d4373, 42px 43px #2d4373, 43px 44px #2d4373, 44px 45px #2d4373, 45px 46px #2d4373, 46px 47px #2d4373, 47px 48px #2d4373, 48px 49px #2d4373, 49px 50px #2d4373, 50px 51px #2d4373;
}

.social-cont div.social-box.twitter {
  background: #56A3D9;
}
.social-cont div.social-box.twitter i.social-ico {
  text-shadow: 0px 0px #2e8cce, 1px 2px #2e8cce, 2px 3px #2e8cce, 3px 4px #2e8cce, 4px 5px #2e8cce, 5px 6px #2e8cce, 6px 7px #2e8cce, 7px 8px #2e8cce, 8px 9px #2e8cce, 9px 10px #2e8cce, 10px 11px #2e8cce, 11px 12px #2e8cce, 12px 13px #2e8cce, 13px 14px #2e8cce, 14px 15px #2e8cce, 15px 16px #2e8cce, 16px 17px #2e8cce, 17px 18px #2e8cce, 18px 19px #2e8cce, 19px 20px #2e8cce, 20px 21px #2e8cce, 21px 22px #2e8cce, 22px 23px #2e8cce, 23px 24px #2e8cce, 24px 25px #2e8cce, 25px 26px #2e8cce, 26px 27px #2e8cce, 27px 28px #2e8cce, 28px 29px #2e8cce, 29px 30px #2e8cce, 30px 31px #2e8cce, 31px 32px #2e8cce, 32px 33px #2e8cce, 33px 34px #2e8cce, 34px 35px #2e8cce, 35px 36px #2e8cce, 36px 37px #2e8cce, 37px 38px #2e8cce, 38px 39px #2e8cce, 39px 40px #2e8cce, 40px 41px #2e8cce, 41px 42px #2e8cce, 42px 43px #2e8cce, 43px 44px #2e8cce, 44px 45px #2e8cce, 45px 46px #2e8cce, 46px 47px #2e8cce, 47px 48px #2e8cce, 48px 49px #2e8cce, 49px 50px #2e8cce, 50px 51px #2e8cce;
}

.social-cont div.social-box.youtube {
  background: #BF221F;
}
.social-cont div.social-box.youtube i.social-ico {
  text-shadow: 0px 0px #931a18, 1px 2px #931a18, 2px 3px #931a18, 3px 4px #931a18, 4px 5px #931a18, 5px 6px #931a18, 6px 7px #931a18, 7px 8px #931a18, 8px 9px #931a18, 9px 10px #931a18, 10px 11px #931a18, 11px 12px #931a18, 12px 13px #931a18, 13px 14px #931a18, 14px 15px #931a18, 15px 16px #931a18, 16px 17px #931a18, 17px 18px #931a18, 18px 19px #931a18, 19px 20px #931a18, 20px 21px #931a18, 21px 22px #931a18, 22px 23px #931a18, 23px 24px #931a18, 24px 25px #931a18, 25px 26px #931a18, 26px 27px #931a18, 27px 28px #931a18, 28px 29px #931a18, 29px 30px #931a18, 30px 31px #931a18, 31px 32px #931a18, 32px 33px #931a18, 33px 34px #931a18, 34px 35px #931a18, 35px 36px #931a18, 36px 37px #931a18, 37px 38px #931a18, 38px 39px #931a18, 39px 40px #931a18, 40px 41px #931a18, 41px 42px #931a18, 42px 43px #931a18, 43px 44px #931a18, 44px 45px #931a18, 45px 46px #931a18, 46px 47px #931a18, 47px 48px #931a18, 48px 49px #931a18, 49px 50px #931a18, 50px 51px #931a18;
}

.social-cont div.social-box.instagram {
  background: #3F6497;
}
.social-cont div.social-box.instagram i.social-ico {
  text-shadow: 0px 0px #304c73, 1px 2px #304c73, 2px 3px #304c73, 3px 4px #304c73, 4px 5px #304c73, 5px 6px #304c73, 6px 7px #304c73, 7px 8px #304c73, 8px 9px #304c73, 9px 10px #304c73, 10px 11px #304c73, 11px 12px #304c73, 12px 13px #304c73, 13px 14px #304c73, 14px 15px #304c73, 15px 16px #304c73, 16px 17px #304c73, 17px 18px #304c73, 18px 19px #304c73, 19px 20px #304c73, 20px 21px #304c73, 21px 22px #304c73, 22px 23px #304c73, 23px 24px #304c73, 24px 25px #304c73, 25px 26px #304c73, 26px 27px #304c73, 27px 28px #304c73, 28px 29px #304c73, 29px 30px #304c73, 30px 31px #304c73, 31px 32px #304c73, 32px 33px #304c73, 33px 34px #304c73, 34px 35px #304c73, 35px 36px #304c73, 36px 37px #304c73, 37px 38px #304c73, 38px 39px #304c73, 39px 40px #304c73, 40px 41px #304c73, 41px 42px #304c73, 42px 43px #304c73, 43px 44px #304c73, 44px 45px #304c73, 45px 46px #304c73, 46px 47px #304c73, 47px 48px #304c73, 48px 49px #304c73, 49px 50px #304c73, 50px 51px #304c73;
}

.social-cont div.social-box.foursquare {
  background: #0732A2;
}
.social-cont div.social-box.foursquare i.social-ico {
  text-shadow: 0px 0px #052371, 1px 2px #052371, 2px 3px #052371, 3px 4px #052371, 4px 5px #052371, 5px 6px #052371, 6px 7px #052371, 7px 8px #052371, 8px 9px #052371, 9px 10px #052371, 10px 11px #052371, 11px 12px #052371, 12px 13px #052371, 13px 14px #052371, 14px 15px #052371, 15px 16px #052371, 16px 17px #052371, 17px 18px #052371, 18px 19px #052371, 19px 20px #052371, 20px 21px #052371, 21px 22px #052371, 22px 23px #052371, 23px 24px #052371, 24px 25px #052371, 25px 26px #052371, 26px 27px #052371, 27px 28px #052371, 28px 29px #052371, 29px 30px #052371, 30px 31px #052371, 31px 32px #052371, 32px 33px #052371, 33px 34px #052371, 34px 35px #052371, 35px 36px #052371, 36px 37px #052371, 37px 38px #052371, 38px 39px #052371, 39px 40px #052371, 40px 41px #052371, 41px 42px #052371, 42px 43px #052371, 43px 44px #052371, 44px 45px #052371, 45px 46px #052371, 46px 47px #052371, 47px 48px #052371, 48px 49px #052371, 49px 50px #052371, 50px 51px #052371;
}

.social-cont div.social-box.linkedin {
  background: #007BB6;
}
.social-cont div.social-box.linkedin i.social-ico {
  text-shadow: 0px 0px #005983, 1px 2px #005983, 2px 3px #005983, 3px 4px #005983, 4px 5px #005983, 5px 6px #005983, 6px 7px #005983, 7px 8px #005983, 8px 9px #005983, 9px 10px #005983, 10px 11px #005983, 11px 12px #005983, 12px 13px #005983, 13px 14px #005983, 14px 15px #005983, 15px 16px #005983, 16px 17px #005983, 17px 18px #005983, 18px 19px #005983, 19px 20px #005983, 20px 21px #005983, 21px 22px #005983, 22px 23px #005983, 23px 24px #005983, 24px 25px #005983, 25px 26px #005983, 26px 27px #005983, 27px 28px #005983, 28px 29px #005983, 29px 30px #005983, 30px 31px #005983, 31px 32px #005983, 32px 33px #005983, 33px 34px #005983, 34px 35px #005983, 35px 36px #005983, 36px 37px #005983, 37px 38px #005983, 38px 39px #005983, 39px 40px #005983, 40px 41px #005983, 41px 42px #005983, 42px 43px #005983, 43px 44px #005983, 44px 45px #005983, 45px 46px #005983, 46px 47px #005983, 47px 48px #005983, 48px 49px #005983, 49px 50px #005983, 50px 51px #005983;
}

.social-cont div.social-box.stack-overflow {
  background: #FA5601;
}
.social-cont div.social-box.stack-overflow i.social-ico {
  text-shadow: 0px 0px #c74501, 1px 2px #c74501, 2px 3px #c74501, 3px 4px #c74501, 4px 5px #c74501, 5px 6px #c74501, 6px 7px #c74501, 7px 8px #c74501, 8px 9px #c74501, 9px 10px #c74501, 10px 11px #c74501, 11px 12px #c74501, 12px 13px #c74501, 13px 14px #c74501, 14px 15px #c74501, 15px 16px #c74501, 16px 17px #c74501, 17px 18px #c74501, 18px 19px #c74501, 19px 20px #c74501, 20px 21px #c74501, 21px 22px #c74501, 22px 23px #c74501, 23px 24px #c74501, 24px 25px #c74501, 25px 26px #c74501, 26px 27px #c74501, 27px 28px #c74501, 28px 29px #c74501, 29px 30px #c74501, 30px 31px #c74501, 31px 32px #c74501, 32px 33px #c74501, 33px 34px #c74501, 34px 35px #c74501, 35px 36px #c74501, 36px 37px #c74501, 37px 38px #c74501, 38px 39px #c74501, 39px 40px #c74501, 40px 41px #c74501, 41px 42px #c74501, 42px 43px #c74501, 43px 44px #c74501, 44px 45px #c74501, 45px 46px #c74501, 46px 47px #c74501, 47px 48px #c74501, 48px 49px #c74501, 49px 50px #c74501, 50px 51px #c74501;
}

.social-cont div.social-box.codepen {
  background: #252527;
}
.social-cont div.social-box.codepen i.social-ico {
  text-shadow: 0px 0px #0c0c0d, 1px 2px #0c0c0d, 2px 3px #0c0c0d, 3px 4px #0c0c0d, 4px 5px #0c0c0d, 5px 6px #0c0c0d, 6px 7px #0c0c0d, 7px 8px #0c0c0d, 8px 9px #0c0c0d, 9px 10px #0c0c0d, 10px 11px #0c0c0d, 11px 12px #0c0c0d, 12px 13px #0c0c0d, 13px 14px #0c0c0d, 14px 15px #0c0c0d, 15px 16px #0c0c0d, 16px 17px #0c0c0d, 17px 18px #0c0c0d, 18px 19px #0c0c0d, 19px 20px #0c0c0d, 20px 21px #0c0c0d, 21px 22px #0c0c0d, 22px 23px #0c0c0d, 23px 24px #0c0c0d, 24px 25px #0c0c0d, 25px 26px #0c0c0d, 26px 27px #0c0c0d, 27px 28px #0c0c0d, 28px 29px #0c0c0d, 29px 30px #0c0c0d, 30px 31px #0c0c0d, 31px 32px #0c0c0d, 32px 33px #0c0c0d, 33px 34px #0c0c0d, 34px 35px #0c0c0d, 35px 36px #0c0c0d, 36px 37px #0c0c0d, 37px 38px #0c0c0d, 38px 39px #0c0c0d, 39px 40px #0c0c0d, 40px 41px #0c0c0d, 41px 42px #0c0c0d, 42px 43px #0c0c0d, 43px 44px #0c0c0d, 44px 45px #0c0c0d, 45px 46px #0c0c0d, 46px 47px #0c0c0d, 47px 48px #0c0c0d, 48px 49px #0c0c0d, 49px 50px #0c0c0d, 50px 51px #0c0c0d;
}

.social-cont div.social-box.cv {
  background: #B4E0E1;
}
.social-cont div.social-box.cv i.social-ico {
  text-shadow: 0px 0px #90d1d2, 1px 2px #90d1d2, 2px 3px #90d1d2, 3px 4px #90d1d2, 4px 5px #90d1d2, 5px 6px #90d1d2, 6px 7px #90d1d2, 7px 8px #90d1d2, 8px 9px #90d1d2, 9px 10px #90d1d2, 10px 11px #90d1d2, 11px 12px #90d1d2, 12px 13px #90d1d2, 13px 14px #90d1d2, 14px 15px #90d1d2, 15px 16px #90d1d2, 16px 17px #90d1d2, 17px 18px #90d1d2, 18px 19px #90d1d2, 19px 20px #90d1d2, 20px 21px #90d1d2, 21px 22px #90d1d2, 22px 23px #90d1d2, 23px 24px #90d1d2, 24px 25px #90d1d2, 25px 26px #90d1d2, 26px 27px #90d1d2, 27px 28px #90d1d2, 28px 29px #90d1d2, 29px 30px #90d1d2, 30px 31px #90d1d2, 31px 32px #90d1d2, 32px 33px #90d1d2, 33px 34px #90d1d2, 34px 35px #90d1d2, 35px 36px #90d1d2, 36px 37px #90d1d2, 37px 38px #90d1d2, 38px 39px #90d1d2, 39px 40px #90d1d2, 40px 41px #90d1d2, 41px 42px #90d1d2, 42px 43px #90d1d2, 43px 44px #90d1d2, 44px 45px #90d1d2, 45px 46px #90d1d2, 46px 47px #90d1d2, 47px 48px #90d1d2, 48px 49px #90d1d2, 49px 50px #90d1d2, 50px 51px #90d1d2;
}


.social-cont {
  font-size: 2.6rem;
  text-align: center;
  width: 68.5rem;
  overflow: auto;
}
.social-cont .social-box {
  float: left;
  overflow: hidden;
  border-radius: 0.575rem;
  margin: 0 0.4rem;
  width: 3.9rem;
  height: 3.9rem;
}
.social-cont .social-box a {
  display: block;
  width: 100%;
  height: 100%;
}
.social-cont .social-box a:hover i.social-ico {
  -webkit-transition: all 0.5s cubic-bezier(1, 0, 0, 1);
          transition: all 0.5s cubic-bezier(1, 0, 0, 1);
}
.social-cont .social-box:first-child {
  margin-left: 0;
}
.social-cont .social-box:last-child {
  margin-right: 0;
}
.social-cont .social-box i {
  line-height: 3.9rem;
}
.social-cont i.social-ico {
  color: white;
  -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
          transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.CHeadFoot {
	width:1200px;
	margin-left:auto;
	margin-right:auto;
	position: relative;
	-webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
	height:100px;
	background: white;
	  
}
.CVidLoopCnt {
	width:300px;
	height:230px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	background:white;
	margin-top:50px;
	 -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,0.5);
  
}
.CVLHead {
	width:100%;
	height:30px;
	position: relative;
	padding:5px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	color:white;
  background:#2C3E50;
}
.CVLImg {
	width:260px;
	height:130px;

	margin-left:auto;
	margin-right:auto;
	margin-top:10px;
}
.CLVII {
	position: relative;
	height:100%;
	width:100%;
}
.CLVFoot {
	width:100%;
	height:50px;
	top:20px;
	position: relative;
	color:white;
	background:#2C3E50;
}
</style>
<div class="ChannelCont">
	<div class="CHeader">
		
		<img src="<!-- http://img15.deviantart.net/0568/i/2012/127/8/b/monstercat_media_logo_by_marise97-d4ytnaa.jpg -->" class="CHeadImg"/>
		<img src="http://i.imgur.com/3EF8DJZ.png" class="CHeadImgUsr">
		<div class="CHSocialCnt">
			<div class="social-cont">
			<div class="social-box facebook">
				<a href="https://www.facebook.com/valerio.pierbattista" target="_blank"> <i class="fa social-ico fa-facebook"> </i> </a>
			</div>

			<div class="social-box twitter">
				<a href="https://twitter.com/vlrprbttst" target="_blank"> <i class="fa social-ico fa-twitter"> </i> </a>
			</div>

			<div class="social-box youtube">
				<a href="https://www.youtube.com/user/valeriopierbattista" target="_blank"> <i class="fa social-ico fa-youtube"> </i> </a>
			</div>

			<div class="social-box instagram">
				<a href="http://instagram.com/vlrprbttst" target="_blank"> <i class="fa social-ico fa-instagram"> </i> </a>
			</div>

			
		</div>
	</div>
	<div class="CHeadFoot">
		<h3>Monster Cat</h3>
		<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
	</div>
	<div class="CVidLoopCnt">
		<div class="CVLHead">
			<center><h5>Moster Cat Ep 3</h5></center>
			
		</div>
		<div class="CVLImg">
			<img class="CLVII" src="http://orig15.deviantart.net/97e1/f/2013/210/3/f/monstercat_wallpaper_by_biggamerjk-d6frlv1.png"/>
			<h6 style="display:inline-block;font-weight:bold;">Motive - Sending My Love</h6>
			<h6 style="display:inline-block;">5:63</h6>	
		</div>
		<div class="CLVFoot">
		<h6>by Rap Nation</h6> 
		<h6 style="display:inline-block;">5,779 views</h6> 
		<h6 style="display:inline-block;">3 hours ago</h6>
		</div>
	</div>
</div>
		<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body>


</html>