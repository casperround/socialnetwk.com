<head>  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

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
include("config.php"); //include config file

if($_POST)
{
    //sanitize post value
    $group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

    //throw HTTP error if group number is not valid
    if(!is_numeric($group_number)){
        header('HTTP/1.1 500 Invalid number!');
        exit();
    }

    //get current starting point of records
    $position = ($group_number * $items_per_group);
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
       // redirect to index page if not superuser  
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');  
if (!$con) {  
    die('Could not connect to Socialnetwk DB: ' . mysqli_error($con));  
}
mysqli_select_db($con,"ajax_demo");
$results = $con->query("SELECT DISTINCT users.id, users.firstname, users.lastname, 
    media.date, media.id, media.time, media.text, media.userID, 
    media.author_id, media.ip, media.post_id, media.format, media.visable,
    media.file_format, media.MediaTxt, media.author_firstname, 
    media.author_lastname, media.shared, media.relation
FROM users 
JOIN media 
    ON (users.id = media.userID)
LEFT JOIN friends
    ON users.id IN (friends.sender, friends.recipient)
WHERE '334' IN (users.id, friends.sender, friends.recipient)
    AND media.relation = 'feed'
AND friends.status = 1
AND media.visable IS NULL
    ORDER BY media.date DESC, media.time DESC LIMIT $position, $items_per_group")or die($mysqli->error) ?>
    <ul class="page_result">
	<?php while($result = $results->fetch_object()): ?>
       <li id="item_<?= $result->id ?>">
       
       
 			<?php
	$profile_image_feed = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$result->userID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1")or die($mysqli->error);?>
<?php while($pimage_feed = $profile_image_feed->fetch_object()): ?>


<?php if ($result->format == "video" || $result->file_format == "iframe"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Video">
						<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="https://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
							</div>
							<?php $newCaption = preg_replace('/#\S+ */', '', $result->MediaTxt); ?>
							<?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
							<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
							<div class="col-xs-4">
								<h4 style="margin-bottom:2px;padding-bottom:0px;"><?= $result->firstname ?> <?= $result->lastname ?> <?= $result->shared ?> Posted at <?= $result->date ?> <?= $result->time ?></h4>
							</div>
							<div class="col-xs-2">
								<span class="glyphicon glyphicon-film"></span>
							</div>
							<?php if($_SESSION["user"]["id"] == $result->author_id):?>
							<div class="col-xs-2">
									<form id="upload" method="post"  class="form-horizontal" action="removepost.php" enctype="multipart/form-data">
										<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
										<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
										<button class="UpdateBtnPerm" style="background:none;margin:0px;padding:0px;"  type="submit"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
							</div>
							<div class="col-xs-2">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" 
									id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="glyphicon glyphicon-lock"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<form id="upload" method="post"  class="form-horizontal" action="elements/permissions.php" enctype="multipart/form-data">
											<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
												<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
												<center><select name="permissions">
												  <option value="0">Public</option>
												  <option value="1">Friends</option>
												  <option value="2">Hidden</option>
												  <option value="3">Custom</option>
												  <option value="4">Only Me</option>
												</select></center>
												<h5>Current Permissions</h5>
												<?php
												$permload = $con->query("SELECT * FROM permissions WHERE post_id = ('$result->post_id') AND user_id = ('$result->userID')");?>
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
					<<?= $result->format ?>  src="https://www.socialnetwk.com/media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="https://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>



<?php elseif ($result->format === "img"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Picture">
							<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="https://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
							</div>
							<?php $newCaption = preg_replace('/#\S+ */', '', $result->MediaTxt); ?>
							<?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
							<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
							<div class="col-xs-4">
								<h4 style="margin-bottom:2px;padding-bottom:0px;"><?= $result->firstname ?> <?= $result->lastname ?> <?= $result->shared ?> Posted at <?= $result->date ?> <?= $result->time ?></h4>
							</div>
							<div class="col-xs-2">
								<span class="glyphicon glyphicon-film"></span>
							</div>
							<?php if($_SESSION["user"]["id"] == $result->author_id):?>
							<div class="col-xs-2">
						
									<form id="upload" method="post"  class="form-horizontal" action="removepost.php" enctype="multipart/form-data">
										<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
										<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
										<button class="UpdateBtnPerm" style="background:none;margin:0px;padding:0px;"  type="submit"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
							</div>
							<div class="col-xs-2">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" 
									id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="glyphicon glyphicon-lock"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<form id="upload" method="post"  class="form-horizontal" action="elements/permissions.php" enctype="multipart/form-data">
											<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
												<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
												<center><select name="permissions">
												  <option value="0">Public</option>
												  <option value="1">Friends</option>
												  <option value="2">Hidden</option>
												  <option value="3">Custom</option>
												  <option value="4">Only Me</option>
												</select></center>
												<h5>Current Permissions</h5>
												<?php
												$permload = $con->query("SELECT * FROM permissions WHERE post_id = ('$result->post_id') AND user_id = ('$result->userID')");?>
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
					<<?= $result->format ?>  src="https://www.socialnetwk.com/media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="https://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
					 	<h5 style="">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>









<?php elseif ($result->format === "audio"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Audio">
						<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="https://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
							</div>
							<?php $newCaption = preg_replace('/#\S+ */', '', $result->MediaTxt); ?>
							<?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
							<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
							<div class="col-xs-4">
								<h4 style="margin-bottom:2px;padding-bottom:0px;"><?= $result->firstname ?> <?= $result->lastname ?> <?= $result->shared ?> Posted at <?= $result->date ?> <?= $result->time ?></h4>
							</div>
							<div class="col-xs-2">
								<span class="glyphicon glyphicon-film"></span>
							</div>
							<?php if($_SESSION["user"]["id"] == $result->author_id):?>
							<div class="col-xs-2">
									<form id="upload" method="post"  class="form-horizontal" action="removepost.php" enctype="multipart/form-data">
										<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
										<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
										<button class="UpdateBtnPerm" style="background:none;margin:0px;padding:0px;"  type="submit"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
							</div>
							<div class="col-xs-2">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" 
									id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="glyphicon glyphicon-lock"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<form id="upload" method="post"  class="form-horizontal" action="elements/permissions.php" enctype="multipart/form-data">
											<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
												<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
												<center><select name="permissions">
												  <option value="0">Public</option>
												  <option value="1">Friends</option>
												  <option value="2">Hidden</option>
												  <option value="3">Custom</option>
												  <option value="4">Only Me</option>
												</select></center>
												<h5>Current Permissions</h5>
												<?php
												$permload = $con->query("SELECT * FROM permissions WHERE post_id = ('$result->post_id') AND user_id = ('$result->userID')");?>
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
					<<?= $result->format ?>  src="https://www.socialnetwk.com/media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="https://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>






















<?php elseif ($result->format === "text"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Status">
						<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="https://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
							</div>
							<?php $newCaption = preg_replace('/#\S+ */', '', $result->MediaTxt); ?>
							<?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
							<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
							<div class="col-xs-4">
								<h4 style="margin-bottom:2px;padding-bottom:0px;"><?= $result->firstname ?> <?= $result->lastname ?> <?= $result->shared ?> Posted at <?= $result->date ?> <?= $result->time ?></h4>
							</div>
							<div class="col-xs-2">
								<span class="glyphicon glyphicon-film"></span>
							</div>
							<?php if($_SESSION["user"]["id"] == $result->author_id):?>
							<div class="col-xs-2">
									<form id="upload" method="post"  class="form-horizontal" action="removepost.php" enctype="multipart/form-data">
										<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
										<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
										<button class="UpdateBtnPerm" style="background:none;margin:0px;padding:0px;"  type="submit"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
							</div>
							<div class="col-xs-2">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" 
									id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										<span class="glyphicon glyphicon-lock"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<form id="upload" method="post"  class="form-horizontal" action="elements/permissions.php" enctype="multipart/form-data">
											<input type="text" id="id" name="id" style="display:none;" value="<?= $result->userID ?>" />
												<input type="text" id="postid" name="postid" style="display:none;" value="<?= $result->post_id ?>" />
												<center><select name="permissions">
												  <option value="0">Public</option>
												  <option value="1">Friends</option>
												  <option value="2">Hidden</option>
												  <option value="3">Custom</option>
												  <option value="4">Only Me</option>
												</select></center>
												<h5>Current Permissions</h5>
												<?php
												$permload = $con->query("SELECT * FROM permissions WHERE post_id = ('$result->post_id') AND user_id = ('$result->userID')");?>
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
					<<?= $result->format ?>  src="https://www.socialnetwk.com/media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="https://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>













<?php else: ?>

<?php endif; ?>
     
       
       </li>
<?php endwhile;?>
<?php endwhile;?> 
   </ul>
<?php

}
?>