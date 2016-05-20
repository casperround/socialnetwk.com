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


				<div class="ProfileMainCont">
												<?php 
	$UsrID = $_GET['id'];
	$usr_feed_load_cont = $db->query("SELECT * FROM media WHERE userID='".$UsrID."' AND relation='profile_background'");?>
<?php while($UsrFeed = $usr_feed_load_cont->fetch_object()): ?>

					<img src="http://www.socialnetwk.com/media/<?=$UsrFeed->file_format?>/<?=$UsrFeed->post_id?><?=$UsrFeed->author_id?>.<?=$UsrFeed->file_format?>" class="WallPhotoImg"/>
					<?php endwhile;?>

					<div class="WallTop">
<?php $SearchUserImage = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$UsrID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>

<img alt="profileimage"  class="UsrPImage" align="left" src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>" >
      
</a>	
						
						<?php endwhile; ?>
											<?php 
	$UsrID = $_GET['id'];
	$usr_load = $db->query("SELECT * FROM users WHERE id='".$UsrID."'");?>
<?php while($UsrData = $usr_load->fetch_object()): ?>
						<h6><?=$UsrData->firstname ?> <?=$UsrData->lastname ?></h6>
						<div class="row" style="width:30%;margin-left:auto;margin-right:auto;margin-top:1%;">
							
							<div class="col-xs-6 col-sm-3" >
								<span class="glyphicon glyphicon-envelope btn-lg"></span>
								<span>Message</span>
							</div>
							<div class="col-xs-6 col-sm-3" >
<form id="AjaxUploadCall"  name="AjaxUploadCall" class="form-horizontal"  action="http://www.socialnetwk.com/home/addfriend.php" method="post" enctype="multipart/form-data">
									<fieldset>
										
								<button id="submit" style="border:0px;margin:0px;background:none;">
								<span class="glyphicon glyphicon-user btn-lg"><span class="glyphicon glyphicon-plus btn-sm"></span></span></button>
								<span>Add Friend</span>
								<input type="text" id="sender" name="sender" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  			<input type="text" id="status" name="status" class="MsgInputHidden" value="0" />
					  			<input type="text" id="recipient" name="recipient" class="MsgInputHidden" value="<?=$UsrData->id ?>" />
									</fieldset></form>
						
									
							</div>
							<div class="col-xs-6 col-sm-3" >
								<span class="glyphicon glyphicon-user btn-lg"></span>
								<span>Friends</span>
							</div>
							<div class="col-xs-6 col-sm-3" >
								<span class="glyphicon glyphicon-heart btn-lg"></span>
								<span>Followers</span>
							</div>
						</div>
						<?php endwhile;?>
						
					
<!--
									<script>
										
									$("#AjaxUploadCall").submit(function(e)
{
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");
	$.ajax(
	{
		url : formURL,
		type: "POST",
		data : postData,
		success:function(data, textStatus, jqXHR) 
		{

		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
		}
	});
    e.preventDefault();	//STOP default action
});
	
$("#AjaxUploadCall").submit(); //SUBMIT FORM	
									</script>
-->
					</div>
					<div class="UsrWallFeedCont">
						<!--
<div class="PostCont">
							<textarea class="UsrWallTextarea"></textarea>
							<button class="UsrWallPostBtn">Post</button>
						</div>
-->
						<div class="FeedLoadCont">
							<?php 
	$UsrID = $_GET['id'];
	$usr_feed_load_cont = $db->query("SELECT * FROM media WHERE userID='".$UsrID."' ORDER BY media.date DESC, media.time DESC ");?>

<?php while($UsrFeed = $usr_feed_load_cont->fetch_object()): ?>
<div class="FeedLoadWallRepeat">
	<h6 class='' style="color:white;text-align:left;"><?= $UsrFeed->firstname ?> <?= $UsrFeed->lastname ?> <span style="font-size:xx-small;color:white;">Posted</span>
    </h6>
	<h6 style="color:white;font-weight:100;text-align:left;"> <?= $UsrFeed->shared ?> <?= $UsrFeed->MediaTxt ?></h6>
<a target="_blank" href="http://www.socialnetwk.com/media/<?=$UsrFeed->file_format?>/<?=$UsrFeed->post_id?><?=$UsrFeed->author_id?>.<?=$UsrFeed->file_format?>"><<?= $UsrFeed->format ?> alt="" id="example_video_1" style="color:white;" class="FeedWallLoadImg video-js vjs-default-skin" data-setup='{"example_option":true}' src="http://www.socialnetwk.com/media/<?=$UsrFeed->file_format?>/<?=$UsrFeed->post_id?><?=$UsrFeed->author_id?>.<?=$UsrFeed->file_format?>" controls onerror="this.src='default.png'"/> 
</<?= $UsrFeed->format ?>></a>
<h6 style="font-size:xx-small;color:white;text-align:left;">Posted at <?= $UsrFeed->date ?> <?= $UsrFeed->time ?></h6>

</div>
<?php endwhile;?>

						</div>
					</div>
					<div class="UsrWallPicCont">
<?php 
	$UsrID = $_GET['id'];
	$usr_media_load = $db->query("SELECT * FROM media WHERE userID='".$UsrID."' AND format='img'");?>
<?php while($UsrMedia = $usr_media_load->fetch_object()): ?>

							<div class="col-xs-6 col-sm-3">

								<a target="_blank" href="http://www.socialnetwk.com/media/<?=$UsrMedia->file_format?>/<?=$UsrMedia->post_id?><?=$UsrMedia->author_id?>.<?=$UsrMedia->file_format?>"><<?= $UsrMedia->format ?> alt=""  class="ProfileWallImgContImg" data-setup='{"example_option":true}' src="http://www.socialnetwk.com/media/<?=$UsrMedia->file_format?>/<?=$UsrMedia->post_id?><?=$UsrMedia->author_id?>.<?=$UsrMedia->file_format?>"  onerror="this.src='default.png'"/> 
</<?= $UsrFeed->format ?>></a>
							</div>
							 <?php endwhile; ?>
					</div>
					
				</div>

		
		
</section>


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