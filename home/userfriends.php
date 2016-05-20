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
<link href='http://fonts.googleapis.com/css?family=Nokora:regular,700' rel='stylesheet' type='text/css'>
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
			    <a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><li class="active">Profile</li></a>
			    <a href="help.php"><li>Help</li></a>
			    <a href="discover.php"><li>Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li>Logout</li></a>
			  </ul>
			</nav>
	</div>
	<style>
		.ProfileCont {
			height:100%;
			width:100%;
			position: fixed;
			margin-top:40px;
		}
		.PHeader {
			width:100%;
			background:#222222;
			height:200px;
			position: fixed;
			z-index: 50;
		}
		.PProfileImg {
			float:left;
			z-index: 100;
			position: fixed;
			display:inline-block;
			width:200px;
			height:200px;
			-webkit-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.75);
border-radius: 20px;
transition: border-radius 1s ease;  
}
.PProfileImg:hover {
	border-radius: 0px;
	 transition: border-radius 1s ease;  

}
		.PHeadImg {
			width:100%;
			margin-left:150px;
			height:150px;
			background:#222222;
			position: relative;
		}
		.PHeadTxtCont {
			width:200px;
			height:200px;
			right:0px;
			top:40px;
			position: fixed;
			color:white;
			font-family: 'Nokora', sans-serif;
			padding:10px;
		}
		.PHeadImgImg {
			width:50%;
			height:150px;
			overflow: hidden;
			margin-top:8px;
			margin-left:13%;
			position: relative;
		}
		.PHeadBtns {
			width:100%;
			height:50px;
			background:#222222;
			position: fixed;
			float:bottom;
			margin-left:200px;
			padding-left:200px;
		}
		.PBtnCol {
			background:#353535;
			width:150px;
			margin-top:5px;
			margin-bottom:5px;
			margin-left:5px;
			height:40px;
			position: relative;
			color:white;
			padding:7px;
			text-align: center;
			 transition: background 1s ease; 
		}
		.PBtnCol:hover {
	 transition: background 1s ease; 
	 background:#909090;
		}
		.PMainCont {
			width:100%;
			height:100%;
			position: relative;
			margin-top:130px;
			overflow: scroll;
			
		}
	</style>
	
	<div class="ProfileCont">
		<div class="PHeader">

			<div class="PProfileImg">
				<?php 
					$UsrID = $_GET['id'];
					$SearchUserImage = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$UsrID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>
				<a href="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>"><img class="PProfileImg" src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>"/></a>
				<?php endwhile;?>
			</div>
			<div class="PHeadImg">
				<?php 
	
	$usr_feed_load_cont = $db->query("SELECT * FROM media WHERE userID='".$UsrID."' AND relation='profile_background'");?>
<?php while($UsrFeed = $usr_feed_load_cont->fetch_object()): ?>

				<a href="http://www.socialnetwk.com/media/<?=$UsrFeed->file_format?>/<?=$UsrFeed->post_id?><?=$UsrFeed->author_id?>.<?=$UsrFeed->file_format?>"><img class="PHeadImgImg" src="http://www.socialnetwk.com/media/<?=$UsrFeed->file_format?>/<?=$UsrFeed->post_id?><?=$UsrFeed->author_id?>.<?=$UsrFeed->file_format?>"/></a>
				<?php endwhile;?>
			</div>
			<div class="PHeadBtns">
				<?php 
	$UsrID = $_GET['id'];
	$usr_load = $db->query("SELECT * FROM users WHERE id='".$UsrID."'");?>
<?php while($UsrData = $usr_load->fetch_object()): ?>
				<div class="row">
					<a href="http://www.socialnetwk.com/home/userfriends.php?id=<?= $UsrID ?>"><div class="PBtnCol col-xs-6 col-sm-3">
						<span class="glyphicon glyphicon-user"> Friends</span>
					</div></a>
					<div class="PBtnCol col-xs-6 col-sm-3">
						<span class="glyphicon glyphicon-comment"> Message</span>
					</div>
					<div class="PBtnCol col-xs-6 col-sm-3">
						<form id="AjaxUploadCall"  name="AjaxUploadCall" class="form-horizontal"  action="http://www.socialnetwk.com/home/addfriend.php" method="post" enctype="multipart/form-data">
									<fieldset>
										
								<button id="submit" style="border:0px;margin:0px;background:none;color:white;">
								<span class="glyphicon glyphicon-user"><span class="glyphicon glyphicon-plus"></span></span></button>
								<input type="text" id="sender" name="sender" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  			<input type="text" id="status" name="status" class="MsgInputHidden" value="0" />
					  			<input type="text" id="recipient" name="recipient" class="MsgInputHidden" value="<?=$UsrData->id ?>" />
									</fieldset></form>
					</div>
					<div class="PBtnCol col-xs-6 col-sm-3">
						<span class="glyphicon glyphicon-picture"> Gallery</span>
					</div>
				</div>
			</div>
			<div class="PHeadTxtCont">
				<h3><?=$UsrData->firstname ?> <?=$UsrData->lastname ?></h3>
				<h5><?=$UsrData->country ?></h5>
				<h5><?=$UsrData->age ?></h5>
			</div>
			<?php endwhile;?>
		</div>
	<div class="PMainCont">
	
		<div class="PContCont">

	<?php
$UsrID = $_GET['id'];

	      // redirect to index page if not superuser
$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

	 $users = $con->query("SELECT IF(friends.sender = ".$UsrID.", friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.status=1 AND friends.sender = ".$UsrID." OR friends.recipient = ".$UsrID."");?>
<?php while($friend = $users->fetch_object()): ?>
		  	<?php  $friends = $con->query("SELECT * FROM users WHERE id = $friend->user_id "); ?>
				<?php while($FriendName = $friends->fetch_object()): ?>
				
	
	<div class="SearchResultContainerFriend">
	<?php $SearchUserImage = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$FriendName->id." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>

<img alt="profileimage"  class="simage" align="left" src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>" style="b">	
<?php endwhile;?>		
		 <div class="SearchTextRCont">
            <h4 style="display:inline-block;"><?= $FriendName->firstname ?>  <?= $FriendName->lastname ?></h4>
			<h6 style="display:inline-block;"><?= $FriendName->country ?></h6>
			<h6 style="display:inline-block;font-weight:bold;color:#8855bb"><a href="<?= $FriendName->website ?>">Website</a></h6>
			<h6 style="display:inline-block;font-weight:bold;color:#8855bb"><a href="<?= $FriendName->tumblr ?>">Tumblr</a></h6>
			<h6 style="display:inline-block;font-weight:bold;color:#8855bb"><a href="<?= $FriendName->facebook ?>">Facebook</a></h6>
			<h6 style="display:inline-block;font-weight:bold;color:#8855bb"><a href="<?= $FriendName->youtube ?>">Youtube</a></h6><br/>
		 </div>	
	</div>

<?php endwhile;?>

<?php endwhile;?>	
		
		</div>
		
	</div>
		<!-- Footer -->
	<footer class="dark">
		<div id="navbar" class="navbar-collapse collapse">
 		        	<div class="row">
 						<div class="col-xs-6 col-md-3" style="padding-top:20px;">
	 						<h6 style="margin:0px;">Author - Casper.J.Round</h6>
	 						
 						</div>
 						<div class="col-xs-6 col-md-3" style="padding-top:20px;">
	 						<h6 style="margin:0px;">© <?= date('Y') ."\n" ?> Socialnetwk</h6>
 						</div>
 						<div class="col-xs-6 col-md-3" style="padding-top:20px;">
	 						<a href="terms_conditions.php"><h6 style="margin:0px;">Terms & Conditions</h6></a>
 						</div>
 						<div class="col-xs-6 col-md-3" style="padding-top:20px;">
	 						<h6 style="margin:0px;">www.socialnetwk.com</h6>
 						</div>
 		        	</div>
        </div>
	</footer>





	 <!-- SCRIPTS -->
	 
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='/js/lib/dummy.js'></script>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


</body>

</html>


