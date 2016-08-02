

<?php

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM pages WHERE user_id = ".$_SESSION["user"]["id"]."") ?>
	

	<div class="filemanager" >
	<?php while($feed = $feed_load->fetch_object()): ?>

		<a href="page.php?id=<?=$feed->id ?>"><div class="MyVideoLoop">
		<div class="MyVideoLoopTitle">
				<h6><?= $feed->name ?></h6>
			</div>
			<div class="Content_Media_loop">	
			<h5 style="color:black"><?= $feed->category ?></h5>
			<h5 style="color:black"><?= $feed->details ?></h5>
			<h5 style="color:black"><?= $feed->about ?></h5>
		</div>
		</div></a>
	<?php endwhile;?>
	</div>

