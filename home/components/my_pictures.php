
<style>
	.filemanager {
		color:white;
		margin-left:170px;
		width:65%;
		height:100%;
		margin-top:40px;
		overflow-y:scroll;
	}

.filemanager img {
	max-width:100%;
	position: relative;
	height:auto;
}
.filemanager video {
	max-width:100%;
	position: relative;
	height:auto;
	display:inline-block;

}
.filemanager audio {
	max-width:100%;
	position: relative;
	height:auto;
}
.filemanager iframe {
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
	padding:15px;
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

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM media WHERE userID = ".$_SESSION["user"]["id"]." AND format = 'img' ORDER BY id DESC") ?>
	

	<div class="filemanager" >
	<?php while($feed = $feed_load->fetch_object()): ?>

		<div class="MyVideoLoop">
		<div class="MyVideoLoopTitle">
				<h6>
					<?php echo $newcaptwo; ?></h6>
			</div>
			<div class="Content_Media_loop">	
			<<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
					</<?= $feed->format ?>>
					<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
			    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
				<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
					<?php echo ($iframeonly[0]); ?>
		</div>
		</div>
	<?php endwhile;?>
	</div>

