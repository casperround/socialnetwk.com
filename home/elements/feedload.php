<head>  
<?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');


$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>
<style>

.Edit_Feed_Post_form {
    position:relative;
    height:100%;
    width:100%;
}
.black_overlay{
	display: none;
	position: relative;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index:1001;
	-moz-opacity: 0.5;
	opacity:.50;
	filter: alpha(opacity=50);
}

.white_content {
	display: none;
	position: relative;
	top: 25%;
	left: 25%;
	width: 80%;
	
	height: 80%;
	padding: 16px;
	border: 0px solid black;
	background-color: #efefef;
	z-index:1002;
	overflow: auto;
}

.FeedRCont {
	width:700px;
	height:auto;
	margin-left:50px;
	margin-right:auto;
	margin-top:50px;
	left:10px;
	position: relative;

}
.FeedRInCont {
	width:600px;
	height:100%;
	position: relative;
	display: inline-block;
	left:50px;
	background:#2C3E50;;
	border-radius: 5px;
	-webkit-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
}
.FeedROutHeadCnt {
	width:700px;
	right:100px;
	height:50px;
	z-index: 50;
	position: relative;
}
.FeedRHead {
	float:top;
	width:600px;
	padding: 10px;
	display: inline-block;
	z-index: 100;
	left:22px;
	position: relative;
	height:auto;
	color:white;
	background:#2C3E50;
}
.FeedRHeadArrow {
  width:0;
  height:0;
  border-top: 12px solid transparent;
  border-left: 25px solid #efefef;
display: inline-block;
  border-bottom: 12px solid transparent;
  float:left;
  left:60px;

  top:10px;
  color:black;
  position: relative;

}
.FeedRHead h1 {
	font-size: x-small;
	padding:0px;
	font-weight: 200;
	margin-top:0px;
	margin-bottom:0px;
	margin-right:0px;
}

.FeedRHead h3 {
	font-size: medium;
	padding:0px;
	font-weight: 200;
	margin-top:0px;
	margin-bottom:0px;
	margin-right:0px;
}

.FeedRHead h4 {
	font-size: xx-small;
	font-weight: 200;
	font-style: italic;
	padding:0px;
	margin-top:0px;
	margin-bottom:0px;
	margin-right:0px;
}
.FeedRHeadImg {
	position: relative;
	bottom:10px;
	right:25px;
	height:50px;
	display: inline-block;
	border-radius: 5px;
	-webkit-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
	width:50px;
}
.FeedRContent {
	position: relative;
	height:auto;
	width:100%;
	background: #2C3E50;
}
.FeedRFooter {
	bottom:0px;
	padding:3px;
	width:100%;
	position: relative;
	margin-top:10px;
	height:60px;
	background:#2C3E50;
	font-size: large;
	color:#2980B9;
	text-align: center;

}

.FeedRFooter .row {
	padding:0px;
	margin:0px;
}
.FeedRFootComment {
	bottom:0px;
	padding:3px;
	width:100%;
	border-top:1px solid #2980B9;
	position: relative;
	height:auto;
	background:#2C3E50;
	font-size: large;
	color:#2980B9;
	text-align: center;
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
.FeedRComIn {
	margin-left: auto;
	margin-right: auto;
	position: relative;
	height:30px;
	width:90%;
	font-size: small;
	padding:0px;
	margin-top:2px;
	color:#2980B9;
	padding:2px;
	border-radius: 5px;
	border:2px solid #2980B9;
}
.FeedRComLoad {
	width:100%;
	height:auto;
	padding:5px;
	background:#2C3E50;
}
.FeedRComUsImg {
	display: inline-block;
	height:30px;
	width:30px;
	border-radius: 50px;
	position: relative;
}
.FeedRComLoad h1 {
	font-size: small;
	padding:0px;
	margin: 0px;
	display: inline-block;
	color:#2980B9;
}
.FeedRComLoad h3 {
	font-size: small;
	padding:0px;
	margin: 0px;
	display: inline-block;
	color:white;
	
}
.FeedRComLoad h5 {
	font-size: x-small;
	padding:0px;
	margin: 0px;
	display: inline-block;
	color:white;
	
}
.FeedRComLoadLoop {
	width:90%;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	padding:3px;
	-webkit-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
	border-radius: 5px;
}
.FeedRContent img {
	height:auto;
	margin-top:0px;
	padding-top:0px;
	width:600px;
	position: relative;
}
.FeedRContent iframe {
	height:350px;
	width:600px;
	padding:0px;
	margin:0px;
	position: relative;
}
.FeedRContent video {
	height:330px;
	width:600px;
	padding:0px;
	margin:0px;
	position: relative;
}
.FeedRContent audio {
	height:40px;
	width:500px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	padding:0px;
	margin:0px;
	position: relative;
}
.FeedRFooter h3 {
	font-size: x-small;
	padding:0px;
	margin:0px;
}
</style>
<?php

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT DISTINCT users.id, users.firstname, users.lastname, 
    media.date, media.id, media.time, media.text, media.userID, 
    media.author_id, media.ip, media.post_id, media.format, media.visable,
    media.file_format, media.MediaTxt, media.author_firstname, 
    media.author_lastname, media.shared, media.relation
FROM users 
JOIN media 
    ON (users.id = media.userID)
LEFT JOIN friends
    ON users.id IN (friends.sender, friends.recipient)
WHERE ".$_SESSION["user"]["id"]." IN (users.id, friends.sender, friends.recipient)
    AND media.relation = 'feed'
AND friends.status = 1
AND media.visable IS NULL

    ORDER BY media.date DESC, media.time DESC") ?>
	<?php while($feed = $feed_load->fetch_object()): ?>
	
	
	
			<?php
	$profile_image_feed = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$feed->userID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($pimage_feed = $profile_image_feed->fetch_object()): ?>

<div class="FeedRCont">


	<div class="FeedRInCont">
		<div class="FeedROutHeadCnt">
<img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>" class="FeedRHeadImg" />
		<div class="FeedRHeadArrow"></div>
			<div class="FeedRHead">
			    <?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
			    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
				<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
				<h1><?= $feed->firstname ?> <?= $feed->lastname ?></h1>
				<h4><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h4>
				<h3><?php echo $newcaptwo; ?></h3>
			</div>
		</div>
		<div class="FeedRContent">
		<?php echo ($iframeonly[0]); ?>
			<<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
</<?= $feed->format ?>>
		</div>
		<div class="FeedRFooter">
			<div class="row" style="width:100%;position:relative;">
	              <div class="col-xs-6 col-sm-3">
	                <form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/heartup.php" enctype="multipart/form-data">
						<fieldset>
								<input type="text" id="UsrFName" name="UsrFName" class="MsgInputHidden" value="<?= $_SESSION["user"]["firstname"] ?>" />
					  		   <input type="text" id="UsrLName" name="UsrLName" class="MsgInputHidden" value="<?= $_SESSION["user"]["lastname"] ?>" />
					  		   <input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  		   <input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
								<input type="text" id="relation" name="relation" class="MsgInputHidden" value="feed" />
					  			<input type="text" id="author_id" name="author_id" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  			<input type="text" id="heart_up" name="heart_up" class="MsgInputHidden" value="1" />
					  			<input type="text" id="format" name="format" class="MsgInputHidden" value="text" />
					  			<input type="text" id="file_format" name="file_format" class="MsgInputHidden" value="text" />
					  			<input type="text" id="postid" name="postid" class="MsgInputHidden" value="<?=$feed->post_id?>" />

					  				<?php
						  			error_reporting(0);
						  			$link = mysql_connect("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp");
						  			mysql_select_db("pdo_ret", $link);
						  			$result = mysql_query("SELECT heart_up FROM media WHERE heart_up='1' AND post_id='".$feed->post_id."'", $link);
						  			$num_rows = mysql_num_rows($result);
						  			echo "<button style='background:inherit;border:none;color:#2980B9;'><span class='LikesDislikesComments glyphicon glyphicon-heart'>$num_rows</span></button>";
						  			?>
						</fieldset>
					</form>
	              </div>
	              <div class="col-xs-6 col-sm-3">
	                <button style='background:inherit;border:none;color:#2980B9;'><span class="glyphicon glyphicon-refresh"></span></button>
	              </div>
	              <div class="col-xs-6 col-sm-3">
	              <form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/thumbup.php" enctype="multipart/form-data">
						<fieldset>
								<input type="text" id="UsrFName" name="UsrFName" class="MsgInputHidden" value="<?= $_SESSION["user"]["firstname"] ?>" />
					  		   <input type="text" id="UsrLName" name="UsrLName" class="MsgInputHidden" value="<?= $_SESSION["user"]["lastname"] ?>" />
					  		   <input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  		   <input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
								<input type="text" id="relation" name="relation" class="MsgInputHidden" value="feed" />
					  			<input type="text" id="author_id" name="author_id" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  			<input type="text" id="thumb_up" name="thumb_up" class="MsgInputHidden" value="1" />
					  			<input type="text" id="format" name="format" class="MsgInputHidden" value="text" />
					  			<input type="text" id="file_format" name="file_format" class="MsgInputHidden" value="text" />
					  			<input type="text" id="postid" name="postid" class="MsgInputHidden" value="<?=$feed->post_id?>" />

	               <?php 
	               error_reporting(0);
				   $link = mysql_connect("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp");
				   mysql_select_db("pdo_ret", $link);
				   $result = mysql_query("SELECT thumb_up FROM media WHERE thumb_up='1' AND post_id='".$feed->post_id."'", $link);
				   $num_rows = mysql_num_rows($result);
				   echo "<button style='background:inherit;border:none;color:#2980B9;'><span class='LikesDislikesComments glyphicon glyphicon-thumbs-up'>$num_rows</span></button>";
				   ?>
				   		</fieldset>
				</form>

	              </div>
	              <div class="col-xs-6 col-sm-3">
	               <form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/thumbdown.php" enctype="multipart/form-data">
						<fieldset>
								<input type="text" id="UsrFName" name="UsrFName" class="MsgInputHidden" value="<?= $_SESSION["user"]["firstname"] ?>" />
					  		   <input type="text" id="UsrLName" name="UsrLName" class="MsgInputHidden" value="<?= $_SESSION["user"]["lastname"] ?>" />
					  		   <input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  		   <input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
								<input type="text" id="relation" name="relation" class="MsgInputHidden" value="feed" />
					  			<input type="text" id="author_id" name="author_id" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  			<input type="text" id="thumbs_down" name="thumbs_down" class="MsgInputHidden" value="1" />
					  			<input type="text" id="format" name="format" class="MsgInputHidden" value="text" />
					  			<input type="text" id="file_format" name="file_format" class="MsgInputHidden" value="text" />
					  			<input type="text" id="postid" name="postid" class="MsgInputHidden" value="<?=$feed->post_id?>" />

					  				<?php
						  			error_reporting(0);
						  			$link = mysql_connect("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp");
						  			mysql_select_db("pdo_ret", $link);
						  			$result = mysql_query("SELECT thumb_down FROM media WHERE thumb_down='1' AND post_id='".$feed->post_id."'", $link);
						  			$num_rows = mysql_num_rows($result);
						  			echo "<button style='background:inherit;border:none;color:#2980B9;'><span class='LikesDislikesComments glyphicon glyphicon-thumbs-down'>$num_rows</span></button>";
						  			?>
						</fieldset>
					</form>		
	              </div>
	         </div>
	         <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
	         <center><h3>
	         <?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
	         #<?= $tags->tag ?><?php endwhile;?></h3></a></center>
		</div>
		<?php $comment_load = $con->query("SELECT * FROM media WHERE relation='comment' AND post_id='".$feed->post_id."'");?>
				<?php $comment_like_load = $con->query("SELECT * FROM media WHERE relation='like' AND post_id='".$feed->post_id."'");?>
  <?php while($comment_Like = $comment_like_load->fetch_object()): ?>
				<?php while($comments = $comment_load->fetch_object()): ?>
					<?php
					$comment_pic_load = $con->query("SELECT id, post_id, relation, userID, file_format
					FROM media 
					WHERE userID = ".$comments->userID." 
					    AND relation = 'profile_picture' 
					UNION ALL 
					SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
					ORDER BY id DESC LIMIT 1");?>
					<?php while($comment_pic = $comment_pic_load->fetch_object()): ?>
		<div class="FeedRComLoad">
			<div class="FeedRComLoadLoop">
				<img class="FeedRComUsImg" src="http://www.socialnetwk.com/media/<?= $comment_pic->file_format ?>/<?= $comment_pic->post_id ?><?= $comment_pic->userID ?>.<?= $comment_pic->file_format ?>"/>
				<?php $comNameLoad = $con->query("SELECT * FROM users WHERE id='".$comments->userID."'");?>
						<?php while($commentName = $comNameLoad->fetch_object()): ?>
				<h1><?=$commentName->firstname ?> <?=$commentName->lastname ?></h1>
				<h3><?= $comments->MediaTxt ?></h3>
				<h5>Posted at 3pm Tuesday</h5>
			</div>
		</div>
		<?php endwhile;?>
				<?php endwhile;?>
				<?php endwhile;?>
				<?php endwhile;?>
		<div class="FeedRFootComment">
		<form>
			<input class="FeedRComIn" placeholder="Write a comment.."/>
		</form>
		</div>
	</div>
</div>
<?php endwhile;?>
<?php endwhile;?>
