<head>

<script src='https://code.jquery.com/jquery-2.1.0.min.js'></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.6.4.js"></script>
   		<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
		 <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</head>

<style>
body {
	background: white;
}
.MessagesContainerMobile {
	width:100%;
	height:100%;
	position: relative;
	overflow-y:scroll;
	padding-top:50px;
}
.MessagesContainerMobile h5 {
	color:black;
	padding:0px;
	margin:0px;
	font-weight: 400;
}
.MessageMContLoop {
	width:100%;
	height:40px;
	margin-top:4px;
	border-top-left-radius: 25px;
	border-bottom-left-radius: 25px;
	position: relative;
	background:#efefef ;
	-moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.MessageMContLoop img {
	height:40px;
	width:40px;
	border-radius: 50px;
}
.MessageMContLoop h5 {
	font-size: 10px;
	padding:5px;
	margin:0px;
}
.MessageMContLoop h6 {
	color:gray;
	font-size: 9px;
	padding:0px;
	margin:0px;
}
</style>
<div class="MessagesContainerMobile">
	
	
<?php

	 $users = $con->query("SELECT IF(friends.sender = ".$_SESSION["user"]["id"].", friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.status=1 AND friends.sender = ".$_SESSION["user"]["id"]." OR friends.recipient = ".$_SESSION["user"]["id"]."");?>
<?php while($friend = $users->fetch_object()): ?>
		  	<?php  $friends = $con->query("SELECT firstname, lastname, username, id FROM users WHERE id = $friend->user_id "); ?>
				<?php while($FriendName = $friends->fetch_object()): ?>
				
				
					<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID = $friend->user_id AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>

	<a href="message.php?id=<?= $FriendName->id ?>"><div class="MessageMContLoop">
		<div class="row" style="width:100%;height:40px;">
			<div class="col-xs-2">
				<img src="https://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>"/>
			</div>
			<div class="col-xs-4">
				<h5><?= $FriendName->firstname ?> <?= $FriendName->lastname ?> <span style="font-weight:bold;font-size: 10px;"><?= $FriendName->username ?></span></h5>
	<!-- 			<h6>test,test,test..</h6> -->
			</div>
			<div class="col-xs-3">
				<!-- <h5>(40)</h5> -->
			</div>
			<div class="col-xs-3">
			<!-- 	<h5>1 hr</h5> -->
			</div>
		</div>
	</div></a>
	<?php endwhile;?>
	<?php endwhile;?>
	<?php endwhile;?>


</div>