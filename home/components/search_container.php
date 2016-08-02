

	<div class="Search_container" >





<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 1");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 2");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
						<?php  
        // redirect to index page if not superuser  
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');  
if (!$con) {  
    die('Could not connect to Socialnetwk DB: ' . mysqli_error($con));  
} ?>

<!-- USERS -->


 <?php
$query = $_GET['query'];
$SearchQuery = $con->query("SELECT * FROM users WHERE firstname LIKE '%".$query."%' OR username LIKE '%".$query."%'") ?>
<?php while($sq = $SearchQuery->fetch_object()): ?>
		<a><div  onclick="location.href='profile.php?id=<?= $sq->id ?>';"   class="MySearchloop">        
<?php 



$SearchUserImage = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$sq->id." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>
			<div class="MySearchTitleLoop">
				<div class="row">
					<div class="col-md-2">
						<img src="https://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>"/>
					</div>
					<div class="col-md-2">
						<h6 style="color:#999;font-weight:600"><?= $sq->firstname ?>  <?= $sq->lastname ?></h6>
						<h6 style="color:#999;font-weight:200;"><?= $sq->username ?></h6>
					</div>
					<div class="col-md-8">
						<?php 
						$udload = $con->query("SELECT * FROM user_details WHERE user_id = '".$_SESSION['user']['id']."'");?>
						<?php while($udl = $udload->fetch_object()): ?>
							<div class="row">
								<div class="col-xs-4">
									<h5>Work</h5>
								</div>
								<div class="col-xs-4">
									<h5>Education</h5>
								</div>
								<div class="col-xs-4">
									<h5>Location</h5>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<h6 style="color:#999;font-weight:400;display:inline-block;"><?= $udl->work ?></h6>
								</div>
								<div class="col-xs-4">
									<h6 style="color:#999;font-weight:400;display:inline-block;"><?= $udl->education ?></h6>
								</div>
								<div class="col-xs-4">
									<h6 style="color:#999;font-weight:400;display:inline-block;"><?= $udl->location ?></h6>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3">
									<a href="<?= $udl->instagram ?>"><img src="css/icons/instagram.png" style="height:20px;width:20px;position:relative"/></a>
								</div>
								<div class="col-xs-3">
									<a href="<?= $udl->youtube ?>"><img src="css/icons/youtube.png" style="height:20px;width:20px;position:relative"/></a>
								</div>
								<div class="col-xs-3">
									<a href="<?= $udl->twitter ?>"><img src="css/icons/twitter.png" style="height:20px;width:20px;position:relative"/></a>
								</div>
								<div class="col-xs-3">
									<a href="<?= $udl->facebook ?>"><img src="css/icons/facebook.png" style="height:20px;width:20px;position:relative"/></a>
								</div>
							</div>
						<?php endwhile?>
					</div>
				</div>
			</div>

			<div class="row">
					
						<form id="upload" method="post" action="addfriend.php" enctype="multipart/form-data">
								<?php 
									if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
										
									}
									else{			
										echo "
										<button><span style='margin-left:10px;' class='Noti_Blue glyphicon glyphicon-user'/></button>
										<input style='display:none' value='<?= $sq->id ?>' name='recipient'/>
										";
									}
									
								?>
							
						</form>
			</div>
			           <?php endwhile; ?> 




		</div></a>

      <?php endwhile; ?>

<!-- PAGES -->
<?php
$SearchQuery = $con->query("SELECT * FROM pages WHERE name LIKE '%".$query."%'") ?>
<?php while($sq = $SearchQuery->fetch_object()): ?>
		<a><div  onclick="location.href='page.php?id=<?= $sq->id ?>';"   class="MySearchloop">        





			<div class="MySearchTitleLoop">
				<div class="row">
					<div class="col-md-2">
						<img src="https://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>"/>
					</div>
					<div class="col-md-2">
						<h6 style="color:#999;font-weight:600"><?= $sq->name ?></h6>
						<h6 style="color:#999;font-weight:200;"><?= $sq->about ?></h6>
					</div>
					<div class="col-md-8">

					</div>
				</div>
			</div>







		</div></a>

      <?php endwhile; ?>



<!-- HASHTAGS -->




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
<?php 
    $query = $_GET['query'];
?>


 <?php 

$SearchQuery = $con->query("SELECT * FROM hashtags WHERE tag LIKE '%".$query."%'") ?>
<?php while($sq = $SearchQuery->fetch_object()): ?>
<?php


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
AND media.post_id = '".$sq->post_id."'
    ORDER BY media.date DESC, media.time DESC")or die($mysqli->error) ?>
	<?php while($result = $results->fetch_object()): ?>
       
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
								<img src="../media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
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
					<<?= $result->format ?>  src="../media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?query=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block;color:black;">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>



			<?php elseif ($result->format === "img"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Picture">
							<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="../media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
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
					<<?= $result->format ?>  src="../media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?query=<?= $tags->tag ?>">
					 	<h5 style=";color:black;">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>









			<?php elseif ($result->format === "audio"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Audio">
						<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="../media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
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
					<<?= $result->format ?>  src="../media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?query=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block;color:black;">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>






















			<?php elseif ($result->format === "text"): ?>
				<div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
					<div class="Header_Feed_Contents_Loop Status">
						<div class="row">
							<div class="col-xs-2">
								<a href="profile.php?id=<?= $pimage_feed->userID ?>">
								<img src="../media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/></a>
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
					<<?= $result->format ?>  src="../media/<?=$result->file_format?>/<?=$result->post_id?><?=$result->author_id?>.<?=$result->file_format?>" 						controls /> 
					</<?= $result->format ?>>
					 <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$result->post_id."' AND uid='".$result->userID."'");?>
			     	<div class="Feed_Load_Tags_Cont">
			         	<?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?query=<?= $tags->tag ?>">
					 	<h5 style="display:inline-block;color:black;">#<?= $tags->tag ?> </h5></a>
					 	<?php endwhile;?>
			         </div>
				</div>

			<?php else: ?>
			<?php endif; ?>
		<?php endwhile;?>
	<?php endwhile;?> 
<?php endwhile;?> 


<!-- EASTEREGGS -->

<style>
.EasterEggs_Container {
	left:50px;
	height:auto;
	width:auto;
}
</style>
<?php 
    $query = $_GET['query'];
 if($query == "calculator"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/calculator.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "packman"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/packman.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "matrix"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/matrix.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "notepad"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/notepad.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "paint"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/paint.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "youtube"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/youtube.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "weather"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/weather.php'); ?>
</div>
<?php endif;?>
<?php 
    $query = $_GET['query'];
 if($query == "snake"):?>
 <div class="EasterEggs_Container">
<?php require_once('elements/easter-egg/snake.php'); ?>
</div>
<?php endif;?>
	</div>