
  <div class="Content_Container_Feed">

<div class="Feed_Content_Load_Load">
  
  <head>  
<?php

$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>




      <?php
                    $UsrID = $_GET['id'];

  $user_profile_dat_load = $con->query("SELECT * FROM users WHERE id = ".$UsrID."");?>
<?php while($updl = $user_profile_dat_load->fetch_object()): ?>
  <?php
  $pimageload = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$updl->id." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($pil = $pimageload->fetch_object()): ?>



<div class="UserHeaderProfileContainer">
	<div class="row" style="width:100%;position:relative;">
		<div class="col-xs-2">
	<img src="../media/<?= $pil->file_format ?>/<?= $pil->post_id ?><?= $pil->userID ?>.<?= $pil->file_format ?>" class="UserProfileImageProfile"/>
		</div>
		<div class="col-xs-2">
    <h4><?= $updl->firstname ?> <?= $updl->lastname ?></h4>
    <h4><?= $updl->username ?></h4>
		</div>
			<div class="col-xs-2">
				<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>
				
				<?php else: ?>			
					<?php if($_SESSION['user']['id'] === $UsrID ): ?>
							<a href="usr_settings.php" style="background:none;border:none;color:none;">
								<button style="background:none;border:none;color:none;">
									<span class="glyphicon glyphicon-cog"></span>
									<h5>Settings</h5>
								</button>
							</a>
					<?php else: ?>
						<form id="upload" method="post" action="addfriend.php" enctype="multipart/form-data">
							<button style="background:none;border:none;color:none;">
								<span class="glyphicon glyphicon-user"></span>
								<span class="glyphicon glyphicon-plus Small"></span>
								<input style="display:none" value="<?= $UsrID ?>" name="recipient"/>
								<h5>Add Friend</h5>
							</button>
						<form>
					<?php endif;?>
			
			<div class="col-xs-2">
				<?php if($_SESSION['user']['id'] === $UsrID ): ?>
				
				<?php else: ?>
					<span class="glyphicon glyphicon-comment"></span>
					<h5>Message</h5>
				<?php endif;?>
			</div>
			<?php endif;?>
		</div>
		<a href="user_gallery.php?id=<?=$UsrID?>"><div class="col-xs-2">
			<span class="glyphicon glyphicon-th"></span>
			<h5>Gallery</h5>
		</div></a>
		<a href="user_about.php?id=<?=$UsrID?>"><div class="col-xs-2">
			<span class="glyphicon glyphicon-bookmark"></span>
			<h5>About</h5>
		</div></a>
	</div>

</div>
<?php endwhile;?>
<?php endwhile;?>



<style>
  .filemanager {
    color:white;
    margin-left:170px;
    width:65%;
    height:100%;
    margin-top:40px;
    overflow-y:scroll;
  }

.Feed_Contents_Loop img {
  max-width:100%;
  position: relative;
  height:auto;
}
.Feed_Contents_Loop video {
  max-width:100%;
  position: relative;
  height:auto;
  display:inline-block;

}
.Feed_Contents_Loop audio {
  max-width:100%;
  position: relative;
  height:auto;
}
.Feed_Contents_Loop iframe {
  max-width:100%;
  position: relative;
  display:inline-block;
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
.MyVideoLoop {
  width:40%;
  display:inline-block;
    margin:10px;

  height:auto;
  background:#efefef ;
  border-radius: 0px;
  border:0px;
      -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.Content_Media_loop {
  width: 100%;
  height:100%;
  padding:5px;
}
.MyVideoLoopTitle {
  height:30px;
  width:100%;
  padding:3px;
  color:white;
  top:0px;
  float:top;
  font-weight: 400;
  background:#434A54;
  text-align: center;
}
h6 {
  margin:0px;
    font-weight: 400;
    font-size: 15px;
}
</style>

<?php
$UsrID = $_GET['id'];
mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM media WHERE userID = ".$UsrID." AND format = 'img' OR userID = ".$UsrID." AND format = 'video' OR userID = ".$UsrID." AND file_format = 'iframe' ORDER BY id DESC") ?>
  

        <div id="Feed_Contents_Loop" class="Feed_Contents_Loop" style="background:none">
  <?php while($feed = $feed_load->fetch_object()): ?>

    <div class="MyVideoLoop">
    <div class="MyVideoLoopTitle">
        <h6>
          <?php echo $newcaptwo; ?></h6>
      </div>
      <div class="Content_Media_loop">  
      <<?= $feed->format ?>  src="https://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
          </<?= $feed->format ?>>
          <?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
          <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
        <?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
          <?php echo ($iframeonly[0]); ?>
    </div>
    </div>
  <?php endwhile;?>
  </div>


</div>
</div>
</div>