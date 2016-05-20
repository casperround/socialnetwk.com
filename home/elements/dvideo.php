<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<style>
	.AllUsersCont3 {
		width:90%;
		height:70%;
		position: fixed;
		margin-left:5%;
		background:none;
		margin-right:auto;
		overflow:scroll;
	}
	.UsrCont3 {
		width:12%;
		height:80px;
		margin:5px;
		background:none;
		border-radius: 0px;
		position: relative;
	}
	.UsrDImg3 {
		width:100px;
		position: relative;
		height:100px;
		background:none;

	}
	 .vjs-default-skin { color: #00cfff; }
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #00a5ff }
  .vjs-default-skin .vjs-control-bar,
  .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.7) }
  .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.2333333333333333) }
  .vjs-default-skin .vjs-control-bar { font-size: 60% }
</style>


<div class="AllUsersCont3">
		<?php 
			$UsrID = $UsrFeed->id;
			$SearchUserImage = $con->query("SELECT DISTINCT users.id, users.firstname, users.lastname, 
    media.date, media.id, media.time, media.text, media.userID, media.author_id, media.ip, media.post_id, media.format, media.file_format, media.MediaTxt, media.author_firstname, media.author_lastname, media.shared, media.relation
FROM users JOIN media ON (users.id = media.userID) WHERE media.format ='video'");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>
	<div class="col-xs-3 UsrCont3" style="cursor: pointer;background:none;"onclick="location.href='http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>';" >


 <video alt="" id="example_video_1" class="video-js vjs-default-skin UsrDImg3" data-setup='{"example_option":true}' src="http://www.socialnetwk.com/media/<?= $media->file_format ?>/<?= $media->post_id ?><?= $media->userID ?>.<?= $media->file_format ?>" controls onerror="this.src='default.png'"/>      	
						

	</div>
      <?php endwhile;?>
   
	
</div>
