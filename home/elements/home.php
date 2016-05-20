
<script>
videojs('video', {}, function() {
  var player = this;
  player.vr({projection: 'Sphere'}); // initialize the plugin, 'Plane' projection by default
});
</script>
<?php
	
		      // redirect to index page if not superuser
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
	?>

<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
		 <script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 


<!--


<div class="Home_Cont">
		<div class="Scroll_Home_Cont">
			<div class="Left_Cont">
			
				<h5>Pages</h5>
				
				<?php
	  

	 $pages_load = $con->query("SELECT * FROM pages WHERE uID='".$_SESSION['user']['id']."'");?>

<?php while($mypages = $pages_load->fetch_object()): ?>
<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$mypages->id."' AND relation = 'page_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
					<a href="http://www.socialnetwk.com/home/page.php?id=<?= $mypages->id ?>"><img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID ?>.<?=$PP->file_format?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $mypages->pname ?></h6></a>
					<?php endwhile;?>
<?php endwhile;?>

					
					<a href="http://www.socialnetwk.com/home/createpage.php"><h5 class="CreateLeftContPGEC">Create Page</h5></a>
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Groups</h5>
									<?php
	  

	 $pages_load = $con->query("SELECT * FROM groups WHERE uID='".$_SESSION['user']['id']."'");?>

<?php while($mypages = $pages_load->fetch_object()): ?>
<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$mypages->id."' AND relation = 'group_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
					<a href="http://www.socialnetwk.com/home/group.php?id=<?= $mypages->id ?>"><img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID ?>.<?=$PP->file_format?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $mypages->pname ?></h6></a>
					<?php endwhile;?>
<?php endwhile;?>
					
					<a href="http://www.socialnetwk.com/home/creategroup.php"><h5 class="CreateLeftContPGEC">Create Group</h5></a>
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Events</h5>
									<?php
	  

	 $pages_load = $con->query("SELECT * FROM events WHERE uID='".$_SESSION['user']['id']."'");?>

<?php while($mypages = $pages_load->fetch_object()): ?>
<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$mypages->id."' AND relation = 'event_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
					<a href="http://www.socialnetwk.com/home/event.php?id=<?= $mypages->id ?>">
						<img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID ?>.<?=$PP->file_format?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $mypages->pname ?></h6></a>
					<?php endwhile;?>
<?php endwhile;?>
					<a href="http://www.socialnetwk.com/home/createevent.php"><h5 class="CreateLeftContPGEC">Create Event</h5></a>
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Channels</h5>
									<?php
	  

	 $pages_load = $con->query("SELECT * FROM channels WHERE uID='".$_SESSION['user']['id']."'");?>

<?php while($mypages = $pages_load->fetch_object()): ?>
<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$mypages->id."' AND relation = 'channel_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
					<a href="http://www.socialnetwk.com/home/channel.php?id=<?= $mypages->id ?>">
						<img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID ?>.<?=$PP->file_format?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $mypages->pname ?></h6></a>
					<?php endwhile;?>
<?php endwhile;?>
					
					<a href="http://www.socialnetwk.com/home/createchannel.php"><h5 class="CreateLeftContPGEC">Create Channel</h5></a>
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Selling</h5>
									<?php
	  

	 $pages_load = $con->query("SELECT * FROM selling WHERE uID='".$_SESSION['user']['id']."'");?>

<?php while($mypages = $pages_load->fetch_object()): ?>
<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$mypages->id."' AND relation = 'sell_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
					<a href="http://www.socialnetwk.com/home/sell.php?id=<?= $mypages->id ?>">
						<img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID ?>.<?=$PP->file_format?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $mypages->pname ?></h6></a>
					<?php endwhile;?>
<?php endwhile;?>
					
					<a href="http://www.socialnetwk.com/home/sell.php"><h5 class="CreateLeftContPGEC">Sell/Buy an Item</h5></a>
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Adverts</h5>
									<?php
	  

	 $pages_load = $con->query("SELECT * FROM adverts WHERE uID='".$_SESSION['user']['id']."'");?>

<?php while($mypages = $pages_load->fetch_object()): ?>
<?php 
			$pID = $_GET['id']; 
			$PPLoad = $db->query("SELECT id, post_id, relation, relation_id, userID, file_format FROM media WHERE relation_id='".$mypages->id."' AND relation = 'advert_p_picture' 
UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format, '' relation_id ORDER BY id DESC LIMIT 1");?>
		<?php while($PP = $PPLoad->fetch_object()): ?>
					<a href="http://www.socialnetwk.com/home/advert.php?id=<?= $mypages->id ?>"><img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?=$PP->file_format?>/<?=$PP->post_id?><?=$PP->userID ?>.<?=$PP->file_format?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $mypages->pname ?></h6></a>
					<?php endwhile;?>
<?php endwhile;?>
					
					<a href="http://www.socialnetwk.com/home/createadvert.php"><h5 class="CreateLeftContPGEC">Create an Advert</h5></a>
					<div class="hr" style="width:100%;margin-top:15px;"></div>
					
			</div>
-->















			
				<div class="Feed_Upload_Cont">
					<div class="Feed_Upload_Top_Cont">
						<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID=".$_SESSION['user']['id']." AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>
				
			

						<img class="Feed_Upload_Profile_Cont" src="http://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>"/>
						<?php endwhile;?>
						<div class="Feed_Upload_Txt_Cont">
							<form id="upload" method="post"  class="form-horizontal" action="http://www.socialnetwk.com/home/feedup.php" enctype="multipart/form-data">
								<fieldset>
									<input class="FileSelect" type="file" id="fileToUpload"name="fileToUpload"/>
			  					  	<input type="text" id="UsrLName" name="UsrLName" class="MsgInputHidden" value="<?= $_SESSION["user"]["lastname"] ?>" />
			  					  	<input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
			  					  	<input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
			  					  	<input type="text" id="relation" name="relation" class="MsgInputHidden" value="feed" />
			  					  	<input type="text" id="author_id" name="author_id" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
			  					  	<textarea class="Feed_Upload_Textarea" id="MediaTxt"name="MediaTxt"></textarea>
						</div>
					</div>
					<div class="Feed_Upload_Bottom_Cont">
						<div class="Feed_Post_Btn_Cont">
						<button  type="submit" name="Update" id="update" value="Update" class="SettingsBtn">Post</button>
						</fieldset>
							</form>
						</div>
					</div>
				</div>




<!--
<script>
$("#update").click(function(e) {
  e.preventDefault();
  var UsrLName = $("#UsrLName").val(); 
  var UsrID = $("#UsrID").val();
  var ip = $("#ip").val(); 
  var relation = $("#relation").val();
  var author_id = $("#author_id").val(); 
  var MediaTxt = $("#MediaTxt").val();
  var UsrLName = $("#UsrLName").val();
  var fileToUpload = $("#fileToUpload").val(); 
  var dataString = 'UsrLName='+UsrLName+'&UsrID='+UsrID+'&ip='+ip+'&relation='+relation+'&author_id='+author_id+'&MediaTxt='+MediaTxt+'&UsrLName='+UsrLName+'&fileToUpload='+fileToUpload;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'http://www.socialnetwk.com/home/feedup.php',
    success:function(data) {
      $("#feed_main_load").load("elements/feedload.php")
    }
  });
});
</script>
-->


	
				
				
				
				
				
				 <script>

 $(document).ready(function() {
       $("#feed_main_load").load("elements/feedload.php");
       var refreshId = setInterval(function() {
          $("#feed_main_load").load('elements/feedload.php?' + 1*new Date());
       }, 60000);
    });
</script>
<div id="feed_main_load">


</div>
				
				
				
				
				
			<!--
<div class="Center_Right_Cont">
				
<h5>Events this week</h5>
					<img class="Usr_Pic_Loop" src="http://freedomwallpaper.com/wallpaper_hd/cool-wallpaper-HD-0000001.jpg"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;">Socialnetwk Project</h6>
					
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Whats Trending</h5>
					<img class="Usr_Pic_Loop" src="http://freedomwallpaper.com/wallpaper_hd/cool-wallpaper-HD-0000001.jpg"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;">Socialnetwk Project</h6>
					
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>News</h5>
					<img class="Usr_Pic_Loop" src="http://freedomwallpaper.com/wallpaper_hd/cool-wallpaper-HD-0000001.jpg"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;">Socialnetwk Project</h6>
					
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5>Feed Toggle</h5>
					<img class="Usr_Pic_Loop" src="http://freedomwallpaper.com/wallpaper_hd/cool-wallpaper-HD-0000001.jpg"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;">CineAbove</h6>
					
					<div class="hr" style="width:100%;margin-top:15px;"></div>
				<h5 >Notifications</h5>

				

  <?php


	 $fstatusload = $con->query("SELECT * FROM friends WHERE sender='".$_SESSION['user']['id']."' AND status='0'");?>

<?php while($friend_status = $fstatusload->fetch_object()): ?>

<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend_status->recipient."'");?>
<?php while($user = $user_select->fetch_object()): ?>

<div class="Message_FEED Message--orange">
				  <div class="Message-icon_FEED">
				    <i class="fa fa-bell-o"></i>
				  </div>
				  <div class="Message-body_FEED">
				    <h6>Pending Friend Request</h6>
				    <h6><?= $user->firstname ?> <?= $user->lastname ?></h6>
				  </div>
				  <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
				</div>
<?php endwhile;?>
<?php endwhile;?>


  <?php
	  

	 $fstatusload = $con->query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'");?>

<?php while($friend_status = $fstatusload->fetch_object()): ?>

<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend_status->sender."'");?>
<?php while($user = $user_select->fetch_object()): ?>



				<div class="Message_FEED">
				  <div class="Message-icon_FEED">
				    <i class="fa fa-bell-o"></i>
				  </div>
				  <div class="Message-body_FEED">
				    <h6>New Friend request</h6>
				    <h6><?= $user->firstname ?> <?= $user->lastname ?></h6>
				    <form id="upload" method="post"  class="form-horizontal" action="http://www.socialnetwk.com/home/elements/friendaccept.php" enctype="multipart/form-data">
	<fieldset>
            <button style="border:none;padding:none;margin:none;background:none;text-align:left;"><span class="glyphicon glyphicon-user btn-sm"></span><span class="glyphicon glyphicon-plus btn-sm"></span></button>


					  			<input type="text" id="sender" name="sender" class="MsgInputHidden" value="<?=$user->id ?>" />
					  			<input type="text" id="status" name="status" class="MsgInputHidden" value="1" />
					  			<input type="text" id="recipient" name="recipient" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />
						</fieldset>
</form>
				  </div>
				  <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
				</div>
<?php endwhile;?>
<?php endwhile;?>
							
					





			</div>
		</div>
						 <script>

 $(document).ready(function() {
       $("#Right_Chat_Cont").load("elements/chatcont.php");
    });
</script>

		<div id="Right_Chat_Cont">
			
			
		</div>
		
	</div>
-->
				<script>
$("#remove").click(function(e) {
  e.preventDefault();
  var idd = $("#idd").val(); 
  var postidd = $("#postidd").val();
  var dataString = 'idd='+idd+'&postidd='+postidd;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'http://www.socialnetwk.com/home/removepost.php',
    success:function(data) {
      $("#feed_main_load").load("elements/feedload.php")
    }
  });
});
</script>