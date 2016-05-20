<style>
	.Search_container {
		color:white;
		margin-top:40px;
		margin-left:170px;
		width:40%;
	}

.Search_container img {
	max-width:100%;
	position: relative;
	height:auto;
}
.Search_container video {
	max-width:100%;
	position: relative;
	height:auto;
	display:inline-block;

}
.Search_container audio {
	max-width:100%;
	position: relative;
	height:auto;
}
.Search_container iframe {
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
.MySearchloop {
	width:20%;
	display:inline-block;
	min-height:50px;
		margin:10px;

	height:auto;
	color:black;
	padding:5px;
	background:#efefef ;
	border-radius: 5px;
	border:0px;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.MySearchTitleLoop {
	height:30px;
	width:100%;
	color:black;
	text-align: center;
}
.MySearchTitleLoop h6 {
	display:inline-block;
}
.MySearchTitleLoop img {
	display:inline-block;
	border-radius: 50px;
	height:30px;
	width:30px;
}
</style>

<?php

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM media WHERE userID = ".$_SESSION["user"]["id"]." AND format = 'video' OR file_format = 'iframe' ORDER BY id DESC") ?>
	

	<div class="Search_container" >







   <?php 
    $query = $_GET['query'];
 
$SearchQuery = $db->query("SELECT * FROM users WHERE firstname LIKE '%".$query."%'") ?>
<?php while($sq = $SearchQuery->fetch_object()): ?>
		<a><div  onclick="location.href='profile.php?id=<?= $sq->id ?>';"   class="MySearchloop">        
<?php 



$SearchUserImage = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$sq->id." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>
			<div class="MySearchTitleLoop">
				<img src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>"/><h6><?= $sq->firstname ?>  <?= $sq->lastname ?></h6>
			</div>
			           <?php endwhile; ?> 
<center><h6><?= $sq->country ?></h6></center>




		</div>

      <?php endwhile; ?>

	</div></a>