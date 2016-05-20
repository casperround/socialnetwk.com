<style>
	.AllUsersCont2 {
		width:90%;
		height:70%;
		position: fixed;
		margin-left:5%;
		background:none;
		margin-right:auto;
		overflow:scroll;
	}
	.UsrCont2 {
		width:12%;
		height:80px;
		margin:5px;
		background:none;
		border-radius: 0px;
		position: relative;
	}
	.UsrDImg2 {
		width:100px;
		position: relative;
		height:100px;
		background:none;

	}
</style>


<div class="AllUsersCont2">
		<?php 
			$UsrID = $UsrFeed->id;
			$SearchUserImage = $con->query("SELECT * FROM media WHERE format='img'");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>
	<div class="col-xs-3 UsrCont2" style="cursor: pointer;background:none;"onclick="location.href='http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>';" >


<img alt="profileimage"  class="UsrDImg2" align="left" src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>" >
      	
						

	</div>
      <?php endwhile;?>
   
	
</div>