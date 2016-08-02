

<?php

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM media WHERE userID = ".$_SESSION["user"]["id"]." AND format = 'video' OR file_format = 'iframe' AND userID = ".$_SESSION["user"]["id"]."  ORDER BY id DESC") ?>
	

	<div class="filemanager" >
	<?php while($feed = $feed_load->fetch_object()): ?>

		<div class="MyVideoLoop">
		<div class="MyVideoLoopTitle">
				<h6>
					<?php echo $newcaptwo; ?></h6>
			</div>
			<div class="Content_Media_loop">	
			<<?= $feed->format ?>  src="../media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
					</<?= $feed->format ?>>
					<?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
			    <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
				<?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
					<?php echo ($iframeonly[0]); ?>
		</div>
		</div>
	<?php endwhile;?>
	</div>

