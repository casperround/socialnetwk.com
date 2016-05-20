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
	<title>Socialnetwk - Group</title>
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
<style>
	.AddImgIcoCont {
		margin-top:150px;
		right:50px;
		float:right;
		position: relative;
		width:50px;
	}
	.AddImgIco {
		
		font-size: 20px;
		
	}
	.AddImgIcoPlus {
		font-size: 10px;
	}
	.AddImgIcoCont:hover {
		color:#0777de;
		
	}
	.AddImgIcoContTwo {
		position: fixed;
		top:150px;
		z-index: 500;
		margin-left:100px;
		width:50px;
	}
	.Page_View_Logo_Img_Cont {
		border-radius: 3px;
		height:150px;
		background:gray;
		margin:10px;
		float:left;
		width:150px;
		position: relative;
		border:5px solid #efefef;
	}
	.Page_View_Logo_Img {
		width:100%;
		position: relative;
		height:100%;
	}
	
	
	
	.Page_View_Cont {
	width:100%;
	height:100%;
	margin-top:40px;
	position: fixed;
	background:#efefef;
}
.Page_View_Header {
	width:100%;
	margin:0px;
	background:gray;
	float:left;
	height:200px;
	position: fixed;
	overflow: hidden;
}
.Page_View_Header_Img {
	width:100%;
	height:auto;
	position: absolute;
}
.Page_View_Head_Txt {
	background:rgba(255,255,255,0.5);
	color:black;
	float:left;
	z-index: 600;
	margin-left:20px;
	padding:5px;
	margin-top:10px;
	
	position: relative;
	width: 500px;
	overflow-y: scroll;
	height:150px;
}
.AboutTextPage {
	float:right;
}
</style>

<div class="Page_View_Cont">
	<?php 
			$pID = $_GET['id']; 
			$page_load = $db->query("SELECT * FROM groups WHERE id='".$pID."' ");?>
		<?php while($page = $page_load->fetch_object()): ?>
		<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$pID."' AND relation = 'page_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
		<?php 
			$pID = $_GET['id']; 
			$PBLoad = $db->query("SELECT * FROM media WHERE relation_id='".$pID."' AND relation='page_b_picture' ");?>
		<?php while($PB = $PBLoad->fetch_object()): ?>
	<div class="Page_View_Header">
		
				<img src="http://www.socialnetwk.com/media/<?=$PB->file_format?>/<?=$PB->post_id?><?=$PB->author_id?>.<?=$PB->file_format?>" class="Page_View_Header_Img"/>
			
			<div class="AddImgIcoCont">
				
		<style>
			.UpdateBtn {
				width:100px;
				font-size:10px;
				background:lightblue;
				bottom:140px;
				right:10px;
				position: relative;
				border:blue solid 0px;
				
			}
		</style>

		
		<?php $uID = $page->author_id;
			$sID = $_SESSION['user']['id']; ?>
				<?php 
				if ($sID == $uID) 
					{
					echo "<form id='AjaxUploadCall'  name='AjaxUploadCall' class='form-horizontal'  action='http://www.socialnetwk.com/home/groupwallimageupload.php' method='post' enctype='multipart/form-data'><fieldset><button id='submit' class='UpdateBtn'>Update Wall Background</button><input type='text' id='uID' name='uID' class='MsgInputHidden' value='". $_SESSION['user']['id']."' /><input type='text' id='relation' name='relation' class='MsgInputHidden' value='page_wall_image' /><input type='text' id='id' name='id' class='MsgInputHidden' value='".$_GET['id']."' /></fieldset></form>";
					echo "<form id='AjaxUploadCall'  name='AjaxUploadCall' class='form-horizontal'  action='http://www.socialnetwk.com/home/grouplogoupload.php' method='post' enctype='multipart/form-data'><fieldset><button id='submit' class='UpdateBtn'>Update Logo Image</button><input type='text' id='uID' name='uID' class='MsgInputHidden' value='". $_SESSION['user']['id']."' /><input type='text' id='relation' name='relation' class='MsgInputHidden' value='page_wall_image' /><input type='text' id='id' name='id' class='MsgInputHidden' value='".$_GET['id']."' /></fieldset></form>";
					echo "<form id='AjaxUploadCall'  name='AjaxUploadCall' class='form-horizontal'  action='http://www.socialnetwk.com/home/groupinfoupdate.php' method='post' enctype='multipart/form-data'><fieldset><button id='submit' class='UpdateBtn'>Update Info</button><input type='text' id='uID' name='uID' class='MsgInputHidden' value='". $_SESSION['user']['id']."' /><input type='text' id='relation' name='relation' class='MsgInputHidden' value='page_wall_image' /><input type='text' id='id' name='id' class='MsgInputHidden' value='".$_GET['id']."' /></fieldset></form>";
					}
					else {
						echo "";
					}
						 ?>


			</div>
			
			<div class="Page_View_Logo_Img_Cont">
				
				<div class="AddImgIcoContTwo">
				
					
				</div>
				<img src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID?>.<?=$PP->file_format?>" class="Page_View_Logo_Img" />
			</div>
		<div class="Page_View_Head_Txt">
		
			<h2><?= $page->pname ?></h2>
			<h5><a href="<?= $page->pwebsite ?>">Website</a></h5>
			<h5><a href="<?= $page->pyoutube ?>">Youtube</a></h5>
			<h5><a href="<?= $page->pfacebook ?>">Facebook</a></h5>
			<h6><?= $page->pdetails ?></h6>
			<h6 class="AboutTextPage"><?= $page->pabout ?></h6>
		
		</div>
	</div>
	<?php endwhile;?>
		<?php endwhile;?>
			<?php endwhile;?>
</div>


		
		

</body>
</html>