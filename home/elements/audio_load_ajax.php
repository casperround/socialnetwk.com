<head>  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');


$con = mysqli_connect('socialnetwk.com','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>


<style>
.Feed_Contents_Loop img {
	max-width:100%;
	position: relative;
	height:auto;
}
.Feed_Contents_Loop video {
	max-width:100%;
	position: relative;
	height:auto;
}
.Feed_Contents_Loop audio {
	max-width:100%;
	position: relative;
	height:auto;
}
.Feed_Contents_Loop iframe {
	max-width:100%;
	position: relative;
	min-height:315px;
}
.Feed_Load_Tags_Cont {
	width:100%;
	min-height:30px;
	height:auto;
	position: relative;
	padding:3px;
	background: none;

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
AND media.format = 'audio'
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












<?php if ($feed->format === "video"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

	<div class="Header_Feed_Contents_Loop Video">
					<div class="row">
						<div class="col-md-2">
<a href="profile.php?id=<?= $pimage_feed->userID ?>"><img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>						
						</div>
						<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
			    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
				<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
						<div class="col-md-4">
							<h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
						</div>
						<div class="col-md-4">
							<h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
						</div>
						<div class="col-md-2">
							<span class="glyphicon glyphicon-film"></span>
						</div>
					</div>
				</div>
				<?php echo ($iframeonly[0]); ?>
					<<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
					</<?= $feed->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         <?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
			         <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
			         </div>
				</div>



<?php elseif ($feed->format === "img"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

	<div class="Header_Feed_Contents_Loop Picture">
					<div class="row">
						<div class="col-md-2">
<a href="profile.php?id=<?= $pimage_feed->userID ?>"><img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>						
						</div>
						<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
			    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
				<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
						<div class="col-md-4">
							<h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
						</div>
						<div class="col-md-4">
							<h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
						</div>
						<div class="col-md-2">
							<span class="glyphicon glyphicon-picture"></span>
						</div>
					</div>
				</div>
			<?php if ($feed->format === "img"): ?>

					<?php echo ($iframeonly[0]); ?>
					<<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
					</<?= $feed->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         <?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
			         <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
			         </div>
					<?php endif; ?>
				</div>













<?php elseif ($feed->format === "audio"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

	<div class="Header_Feed_Contents_Loop Music">
					<div class="row">
						<div class="col-md-2">
<a href="profile.php?id=<?= $pimage_feed->userID ?>"><img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>						
						</div>
						<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
			    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
				<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
						<div class="col-md-4">
							<h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
						</div>
						<div class="col-md-4">
							<h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
						</div>
						<div class="col-md-2">
							<span class="glyphicon glyphicon-music"></span>
						</div>
					</div>
				</div>
				<?php echo ($iframeonly[0]); ?>
					<<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
					</<?= $feed->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         <?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
			         <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
			         </div>
				</div>
























<?php elseif ($feed->format === "text"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

					<div class="Header_Feed_Contents_Loop Status">
						<div class="row">
							<div class="col-md-2">
<a href="profile.php?id=<?= $pimage_feed->userID ?>"><img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>						
							</div>
							<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
				    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
					<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
							<div class="col-md-4">
								<h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
							</div>
							<div class="col-md-4">
								<h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
							</div>
							<div class="col-md-2">
								<span class="glyphicon glyphicon-pencil"></span>
							</div>
						</div>
					</div>

					<h4><?php echo $newcaptwo; ?></h4>
					<?php if ($feed->format === "text"): ?>

					<?php echo ($iframeonly[0]); ?>
					<<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
					</<?= $feed->format ?>>

					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         <?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
			         <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
			         </div>
					<?php endif; ?>

				</div>














<?php else: ?>
<h1>No content</h1>
<?php endif; ?>
<?php endwhile;?>
				<?php endwhile;?>
				
				

		