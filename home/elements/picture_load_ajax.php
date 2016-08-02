<head>  


<?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: https://www.socialnetwk.com#login');


	require_once('../../connection.php');

?>
<style>

	.Music {
		background:rgba(55,188,155,0.8);
	}
	.Status {
		background:rgba(255,206,84,0.8);
	}
	.Video {
		background:rgba(218,68,83,0.8);

	}
	.Picture {
		background:rgba(74,137,220,0.8);

	}

</style>
</head>


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
AND media.format = 'img'

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




<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Picture">
							<div class="row">
							<div class="col-md-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="https://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
							</div>
							<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
							<?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
							<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
							<div class="col-md-4">
								<h4 style="margin-bottom:2px;padding-bottom:0px;"><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
								<h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
							</div>
							<div class="col-md-2">
								<span class="glyphicon glyphicon-film"></span>
							</div>
							<?php if($_SESSION["user"]["id"] == $feed->author_id):?>
							<div class="col-md-2">
								<div class="col-md-6">
									<form id="upload" method="post"  class="form-horizontal" action="removepost.php" enctype="multipart/form-data">
										<input type="text" id="id" name="id" style="display:none;" value="<?= $feed->userID ?>" />
										<input type="text" id="postid" name="postid" style="display:none;" value="<?= $feed->post_id ?>" />
										<button class="UpdateBtnPerm" style="background:none;"  type="submit"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
								</div>
							</div>
							<div class="col-md-2">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" 
									id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="glyphicon glyphicon-lock"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<form id="upload" method="post"  class="form-horizontal" action="elements/permissions.php" enctype="multipart/form-data">
											<input type="text" id="id" name="id" style="display:none;" value="<?= $feed->userID ?>" />
												<input type="text" id="postid" name="postid" style="display:none;" value="<?= $feed->post_id ?>" />
												<center><select name="permissions">
												  <option value="0">Public</option>
												  <option value="1">Friends</option>
												  <option value="2">Hidden</option>
												  <option value="3">Custom</option>
												  <option value="4">Only Me</option>
												</select></center>
												<h5>Current Permissions</h5>
												<?php
												$permload = $con->query("SELECT * FROM permissions WHERE post_id = ('$feed->post_id') AND user_id = ('$feed->userID')");?>
												<?php while($permissionsoaded = $permload->fetch_object()): ?>
												<?php
													if ($permissionsoaded->type == "0"){
													echo "<h6>Public</h6>";
													}
													elseif ($permissionsoaded->type == "1"){
													echo "<h6>Friends</h6>";
													}
													elseif ($permissionsoaded->type == "2"){
													echo "<h6>Hidden</h6>";
													}
													elseif ($permissionsoaded->type == "3"){
													echo "<h6>Custom</h6>";
													}
													elseif ($permissionsoaded->type == "4"){
													echo "<h6>Only Me</h6>";	
													}
													else {
													echo "<h6>Not set</h6>";	
													}
												?>
												<?php endwhile; ?>
												<center><button class="UpdateBtnPerm" style="color:black;">Update</button></center>
										</form>
							  		</ul>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div></br>
					<h4><?php echo $newcaptwo; ?></h4>
					<?php echo ($iframeonly[0]); ?>
					<<?= $feed->format ?>  src="https://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" 						controls /> 
					</<?= $feed->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="https://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>


<?php endwhile;?>
<?php endwhile;?>
<center><h4>No more content</h4></center>
						
				

				

		