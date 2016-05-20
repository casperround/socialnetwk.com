<style>
	.AllUsersCont {
		width:90%;
		height:70%;
		position: fixed;
		margin-left:5%;
		margin-right:auto;
		overflow:scroll;
	}
	.UsrCont {
		width:12%;
		height:80px;
		margin:5px;
		border-radius: 0px;
		-webkit-box-shadow: 0px 0px 39px 6px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 39px 6px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 39px 6px rgba(0,0,0,0.75);
		position: relative;
		background:#333333;
	}
	.UsrDImg {
		width:40px;
		height:40px;
	}
</style>


<div class="AllUsersCont">
<?php 
	$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

	$usr_feed_load_cont = $con->query("SELECT * FROM users");?>
<?php while($UsrFeed = $usr_feed_load_cont->fetch_object()): ?>

	<div class="col-xs-3 UsrCont" style="cursor: pointer;"onclick="location.href='http://www.socialnetwk.com/home/profile.php?id=<?=$UsrFeed->id?>';" >
		<?php 
			$UsrID = $UsrFeed->id;
			$SearchUserImage = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$UsrID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>

<img alt="profileimage"  class="UsrDImg" align="left" src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>" >
      	
						
						<?php endwhile; ?>
		<h5 style="font-size:small;"><?=$UsrFeed->firstname?> <?=$UsrFeed->lastname?> </h5>
		<h6 style="font-size:xx-small;">Location: <?=$UsrFeed->country?></h6>
	</div>
      <?php endwhile;?>
   
	
</div>