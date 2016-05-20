



<style>
	.Chat_Notification_Container {
		width:450px;
		right:0px;
		float:right;
		top:40px;
		margin:0px;
		position: fixed;
	background:#efefef;
-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);

		height:100%;
	}
	
	.Notification_selects {
	width:100%;
	height:40px;
	
	padding:10px;
	background:;
	color:gray;
	margin-top:5px;
	position: relative;
	transition:background 0.2s, color 0.2s;
}
.Notification_selects:hover {
	background:rgba(0,0,0,0.3);
	transition:background 0.2s, color 0.2s;
	color:white;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}

         .Noti_Green {
		background-color:rgba(55,188,155,1);
		font-size: 25px;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Noti_Red {
		background-color:rgba(218,68,83,1);
				font-size: 25px;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Noti_Blue {
		background-color:rgba(74,137,220,1);
				font-size: 25px;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Noti_Yellow {
		background-color:rgba(255,206,84,1);
				font-size: 25px;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
		
      }
.Notification_selects h5 {
	padding:3px;
	margin:0px;
	font-size: 12px;
	color:inherit;
	text-align: left;
}
.New_Content_Noti {
	border-radius: 5px;
	background:#EC87C0;
	color:white;
	width:50px;
	height:100%;
	position: relative;

}
.Notification_selects h6 {
	padding:0px;
	margin:0px;
	color:inherit;
	font-size: 10px;
	text-align: center;
}
	.Notification_Container_Fab {
		width:250px;
		
		display: inline-block;

		float:left;
		position: relative;
		
		height:100vh;
	
	}
	.Notification_load_containers {
		height:40vh;
		width:100%;
		position: relative;
	}
	.Feed_toggle {
		width:90%;
		display: inline-block;
		float:left;
		margin-left:auto;
		margin-right: auto;
		position: relative;
		height:50vh;
	
	}







	.Chat_Notification_Container h4 {
		color:gray;
	}

	.Chat_Container_Fab {
		width:200px;
		display: inline-block;
		position: relative;
		background: #efefef;
		float:right;

		height:100%;

	}
.Chat_Container_Fab_Head {
		position: relative;
		height:40px;
		display: inline-block;
		width:100%;

	}
	.Chat_Usr_Loop_Fab {
width:100%;
	height:40px;
	padding:10px;
	color:gray;
	margin-top:5px;
	position: relative;
	transition:background 0.2s, color 0.2s;


	}
	.Chat_Usr_Loop_Fab:hover {
	background:rgba(0,0,0,0.3);
	transition:background 0.2s, color 0.2s;
	color:white;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
	}
	.Chat_Usr_Loop_Fab img {
		height:40px;
		width:40px;
		display: inline-block;
		margin-left: auto;
		margin-right: auto;
		position: relative;
		border-radius: 50px;
	}
	.Chat_Live_Gray {
	font-size: 20px;
	 background-color: #565656;
  color: transparent;
  display: inline-block;
  margin:3px;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;

      }
      .Chat_Usr_Loop h5 {
      	display: inline-block;
      	color:inherit;
      	
      }

   



      .Chat_Notification_Container_span {
      margin:2px;
font-size: 20px;
	 background-color: #565656;
	 margin-top:5px;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Chat_Live {
      		font-size: 20px;
	 background-color: gray ;
  color: transparent;
  display: inline-block;
  margin:3px;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Chat_Ofline {
	      	font-size: 20px;
	 background-color: black ;
  color: transparent;
  display: inline-block;
  margin:3px;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Search_Usr_Chat_Input {
		bottom:0px;
		float:bottom;
		height:40px;
		width:100%;
		position: fixed;
		width:18%;
		right:0px;
      }
      .Chat_Usr_Fab_Search {
      	
      	height:30px;
		width:200px;
		position: relative;
		border:0px;
		padding:0px;
		margin:0px;
		top:10px;
		float:right;
		background:white;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
		border-radius: 0px;

      }
      .Feed_toggle span {
	      	font-size: 15px;
	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
      }
      .Feed_Toggle_Row {

   margin-left:15px;
   border-radius: 5px;
   padding:5px;
      }
      .MsgInputHidden {
      	display:none;
      }

.ChatRowPop {
		width:auto;
		height:300px;
		right:200px;
		bottom:0px;
		position: fixed;
		z-index: 100;
	}
	.ChatActivePop {
			color:white;
		-moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		border-top-left-radius: 5px;
border-top-right-radius: 5px;
		height:100%;
		margin-right:8px;
		position: relative;
		width:250px;
		z-index: 500;
		float:right;
	}
	.ChatPopHead {
		width:100%;
		border-top-left-radius: 5px;
border-top-right-radius: 5px;
		height:30px;
		padding:2px;
		color:white;
		-moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		background:rgba(74,137,220,0.8);
		
	}
	.ChatPopMsg {
		overflow-y:scroll;
		word-wrap: break-word;
		position: relative;
		height:80%;
		color:white;
-moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		width:100%;
		background:rgba(67,74,84,0.8)
	}
	.message span {
		color:gray;
		font-weight: 300;
	}
	.ChatPopMsg iframe {
		width:90%;
		height:auto;
		position: relative;

	}
	.ChatPopFoot {
		width:100%;
		color:black;
		height:20%;
		background:#d9d9d9;
		bottom:0px;
	}
	.ChatPopFootTxt {
		resize: none;
		width:100%;
		height:30px;
		float:bottom;
		border:0px;
		-moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
		
	}
	.ChatMinPop {
		border:1px solid gray;
	
		height:30px;
		margin-top:270px;
		margin-right:8px;
		position: relative;
		width:250px;
		z-index: 500;
		float:right;
	}
.Right_Chat_Cont {
	position: relative;

	width:100%;
	height:100%;
	z-index: 600;
	right:0px;color:white;	float:right;

	}
	
.Chat_Header_Cont {
	position: relative;
	float:right;
	border-bottom:1px solid #ccc;
	width:100%;
	height:30px;
	color:white;
	padding:0px;
	margin-bottom:0px;
	right:0px;
}

.Chat_Usr_Cont {
	position: relative;
	float:right;
	margin-top:10px;
	overflow: scroll;
	width:100%;
	height:87%;

}
.Chat_Footer_Cont {
	position: fixed;
	float:right;
	width:200px;
	height:30px;
	right:0px;
	bottom:0px;
}
.Search_Usr {
	width:100%;
	height:30px;
	margin:0px;
	border-radius: 10px;
	float:bottom;
	padding:2px;
	border:0px;

	position: relative;
	font-size:10px;
	background-color:white;
	color:black;
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    black;
}

.Chat_Usr_Loop {
	position: relative;
	width:100%;
	margin-left: auto;
	margin-right: auto;
	height:30px;
	margin-top:3px;
	padding:0px;

	background:#34495E;
}
.Chat_Usr_Loop:hover {
	background:#2980B9;
}
.Usr_Pic_Loop {
	width:30px;
	height:30px;
	border-radius: 5px;
	position: relative;
	display: inline-block;
	padding:0px;
	margin:0px;
}

            .messages ul
            {
                padding: 0px;

                list-style-type: none;
            }

            .messages ul li
            {
                height: auto;
               margin-bottom: 10px;
                clear: both;
                padding-left: 10px;
                padding-right: 10px;
            }

            .messages ul li span
            {
                display: inline-block;
                max-width: 200px;
                background-color: white;
                padding: 5px;
                border-radius: 5px;
                margin-bottom: 10px;
                position: relative;
                border-width: 0px;
                border-style: solid;
                border-color: grey;
            }

            .messages ul li span.received
            {
                float: left;
            }

            .messages ul li span.received:after
            {
                content: "";
                display: inline-block;
                position: absolute;
                left: -8.5px;
                top: 7px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-right: 8px solid white;
            }

            .messages ul li span.received:before
            {
                content: "";
                display: inline-block;
                position: absolute;
                left: -9px;
                top: 7px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-right: 8px solid black;
            }

            .messages ul li span.sent:after
            {
                content: "";
                display: inline-block;
                position: absolute;
                right: -8px;
                top: 6px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 8px solid #dbedfe;
            }

            .messages ul li span.sent:before
            {
                content: "";
                display: inline-block;
                position: absolute;
                right: -9px;
                top: 6px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 8px solid black;
            }

            .messages ul li span.sent
            {
                float: right;
                background-color: #dbedfe;
 
            }


.glyphicon-globe {
background: rgb(218,63,83); /* Old browsers */
background: -moz-linear-gradient(left,  rgba(218,63,83,1) 0%, rgba(55,188,155,1) 51%, rgba(55,188,155,1) 51%, rgba(74,137,220,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(218,63,83,1) 0%,rgba(55,188,155,1) 51%,rgba(55,188,155,1) 51%,rgba(74,137,220,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(218,63,83,1) 0%,rgba(55,188,155,1) 51%,rgba(55,188,155,1) 51%,rgba(74,137,220,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#da3f53', endColorstr='#4a89dc',GradientType=1 ); /* IE6-9 */
-webkit-background-clip: text;
  -webkit-text-fill-color: transparent;/* IE6-9 */
}
.Notification_load_containers h4 {
	color:black;
	font-weight:400;
	font-size:14px;
}
.Feed_toggle h6 {
	color:white;
	font-weight:400;
	font-size:14px;
}

.ChatPopHead span {
cursor: pointer;
display:inline;
font-size:15px;	 
background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
          margin:0px;
          padding:2px;
          float:right;
}
</style>	




	<div class="Chat_Notification_Container">
		<div class="Notification_Container_Fab">
			<div class="Notification_load_containers">
				<center><h4 style="color:gray;">Notifications</h4></center>
					<?php  $userss = $con->query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'");?>
					<?php while($friend = $userss->fetch_object()): ?>
					<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend->sender."'");?>
					<?php while($user = $user_select->fetch_object()): ?>
						<div class="Notification_selects">
						<div class="row">
							<div class="col-md-2">
								<span class="Noti_Green glyphicon glyphicon-certificate"></span>
							</div>
							<div class="col-md-6">
								<h5>Friend Request</h5>
							</div>
							<div class="col-md-4">
								<h6><?= $user->firstname ?> <?= $user->lastname ?></h6>
							</div>
						</div>
					</div>
					<?php endwhile;?>
					<?php endwhile;?>

					<div class="Notification_selects">
						<div class="row">
							<div class="col-md-2">
								<span class="Noti_Yellow glyphicon glyphicon-comment"></span>
							</div>
							<div class="col-md-6">
								<h5>New Message</h5>
							</div>
							<div class="col-md-4">
								<h6>Casper Round</h6>
							</div>
						</div>
					</div>
					<div class="Notification_selects">
						<div class="row">
							<div class="col-md-2">
								<span class="Noti_Blue glyphicon glyphicon-pencil"></span>
							</div>
							<div class="col-md-6">
								<h5>New Comment</h5>
							</div>
							<div class="col-md-4">
								<h6>Casper Round</h6>
							</div>
						</div>
					</div>
					<div class="Notification_selects">
						<div class="row">
							<div class="col-md-2">
								<span class="Noti_Green glyphicon glyphicon-certificate"></span>
							</div>
							<div class="col-md-6">
								<h5>Friend Request</h5>
							</div>
							<div class="col-md-4">
								<h6>Casper Round</h6>
							</div>
						</div>
					</div>
			</div>

			<div class="Feed_toggle">
								<center><h5  style="color:gray;font-weight:400">Filter Stream</h5></center>

				<div class="Feed_Toggle_Row">
				<div class="row">
				  <a href="#" id="video">
				    <div class="col-md-3">
				     <center> <span class="glyphicon glyphicon-film" style="color:rgba(218,68,83,0.5);"></span>	</center>
				    </div>
				  </a>
				  <a href="#" id="music">
				    <div class="col-md-3">
				     <center> <span class="glyphicon glyphicon-music" style="color:rgba(55,188,155,0.5);"></span>	</center>
				    </div>
				  </a>
				  <a href="#" id="status">
				    <div class="col-md-3">
				     <center> <span class="glyphicon glyphicon-pencil" style="color:rgba(255,206,84,0.5);"></span>	</center>
				    </div>
				  </a>
				  <a href="#" id="picture">
				    <div class="col-md-3">
				     <center> <span class="glyphicon glyphicon-picture" style="color:rgba(74,137,220,0.5);"></span>	</center>
				    </div>
				  </a>
				</div>
				<a href="#" id="mainfeed">
				     <center><span class="glyphicon glyphicon-globe"></span></center>
				  </a>
				  </div>
			</div>
		</div>
		<div class="Chat_Container_Fab">
		<center><h5 style="color:gray;font-weight:400;font-size:14px;">Online</h5></center>



		<?php

	 $users = $con->query("SELECT IF(friends.sender = ".$_SESSION["user"]["id"].", friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.status=1 AND friends.sender = ".$_SESSION["user"]["id"]." OR friends.recipient = ".$_SESSION["user"]["id"]."");?>
<?php while($friend = $users->fetch_object()): ?>
		  	<?php  $friends = $con->query("SELECT firstname, lastname, id FROM users WHERE id = $friend->user_id "); ?>
				<?php while($FriendName = $friends->fetch_object()): ?>
				
				
					<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID = $friend->user_id AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>

				<div class="Chat_Usr_Loop_Fab"  onClick="openPopup('<?= $FriendName->id ?>');">
					<div class="row">
						<div class="col-md-3">
							<img src="http://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>"  style="display:inline-block;height:30px;width:30px;padding:0px;margin:0px;"/>
						</div>
						<div class="col-md-6">
							<h5 style="display:inline-block;width:auto;height:30px;padding:0px;margin:0px;font-size:12px;font-weight:400;"><?= $FriendName->firstname ?> <?= $FriendName->lastname ?></h5>
						</div>
						<div class="col-md-3">
							<span  style="display:inline-block;width:auto;right:0px;height:30px;position: relative;padding:0px;margin:0px;"class="glyphicon glyphicon-user Chat_Live"></span>
						</div>
					</div>
				</div>
		<?php endwhile;?>
		<?php endwhile;?>
		<?php endwhile;?>
		<div class="Search_Usr_Chat_Input">
			<center><input class="Chat_Usr_Fab_Search" placeholder="Search.."/></center>
		</div>
	</div>

	<div class="ChatRowPop">			
			<?php $users = $con->query("SELECT IF(friends.sender='".$_SESSION["user"]["id"]."', friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.status='1' AND friends.sender='". $_SESSION["user"]["id"]."' OR friends.recipient='".$_SESSION["user"]["id"]."' "); ?>
 			 <?php while($friend = $users->fetch_object()): ?>
  			<?php  $friends = $con->query("SELECT firstname, lastname, id FROM users WHERE id = $friend->user_id "); ?>
			<?php while($FriendName = $friends->fetch_object()): ?>
	<div id="<?=$FriendName->id ?>" style="display:none" class="ChatActivePop" >
		<div class="ChatPopHead">
					<h5 style="display:inline;"class="ChatTxt"><?= $FriendName->firstname ?> <?= $FriendName->lastname ?></h5>
					<span onclick="UpPopup('<?=$FriendName->id ?>');" class="glyphicon glyphicon-plus btn-lg Msg_Pop_Ico"></span>
					
					<span onclick="MinPopup('<?=$FriendName->id ?>');"class="glyphicon glyphicon-minus btn-lg Msg_Pop_Ico"></span>
					<span onclick="closePopup('<?=$FriendName->id ?>');" class="glyphicon glyphicon-remove btn-lg Msg_Pop_Ico"></span>
		</div>

		<div id="ChatPopScroll" class="ChatPopMsg">

			<div  id="messages" class="messages message-window" friend_id="<?=$FriendName->id ?>">
										<ul  id="ScrollAuto" class="message">



										</ul>
			</div>

		</div>
		<div class="ChatPopFoot">
			
						<form autocomplete="off" id="SendForm" class="SendMsg" role="form" method="post">
									<input type="text" id="s_firstname" name="s_firstname" class="MsgInputHidden" value="<?= $_SESSION["user"]["firstname"] ?>" />
									<input type="text" id="s_lastname" name="s_lastname" class="MsgInputHidden" value="<?= $_SESSION["user"]["lastname"] ?>" />
									<input type="text" id="sender" name="sender" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
									<input type="text" id="r_firstname" name="r_firstname" class="MsgInputHidden"value="<?= $FriendName->firstname ?>" />
									<input type="text" id="r_lastname" name="r_lastname" class="MsgInputHidden"value="<?= $FriendName->lastname ?>" />
									<input type="text" id="recipient" name="recipient" class="MsgInputHidden" value="<?= $FriendName->id ?>" />
									<input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
									<input type="text" id="date" name="date" class="MsgInputHidden" value="<?= date('Y-m-d') ."\n" ?>" />
									<?php $now = time(); $utc_time = $now - intval(date('Z', $now)); ?>
									<input type="text" id="time" name="time" class="MsgInputHidden" value="<?= '' . date('H:i:s', $now) . '' ?>" />
									<input autocomplete="off" id="message" class="ChatPopFootTxt" type="text" name="message">
									<input style="" id="submit" class="submit MsgInputHidden" type="submit" name="submit" value="Submit" />
								</form>	
		</div>
	</div>
	
<?php endwhile; ?> 
<?php endwhile; ?> 
</div>

				<script>
	$(function() {
	$('form#SendForm').on('submit', function(e) {
	        $.post('elements/sendmessagefriend.php', $(this).serialize(), function (data) {
	            // This is executed when the call to mail.php was succesful.
	            // 'data' contains the response from the request
	            $('#message').val(''); 
	        })
	        .error(function() {
	            $('#message').val('');        
	             });
	        e.preventDefault();
	                    $('#message').val('');        
	
	    });
	});
	$(document).ready(function(){
	   	$('div.message-window').each(function(index, messageWindow) {
	   	messageWindow = $(messageWindow);		    	
    	// Run fetchMessages() once, when the page is loaded.
    	fetchMessages(messageWindow);					    	
   		// Set an interval timer for checking messages.
   		// Not ideal, but it works for now.
   		setInterval(fetchMessages, 1000, messageWindow);
   		// in milliseconds!!!!!! (1000ms = 1s)
		});
    });					
	function fetchMessages(messageWindow) {
        // For each message window, check for new chats
        // Get the friend_id from the window
        var friend_id = messageWindow.attr("friend_id");		        
        // Get the last chat message_id from the last chat message in this window.
        var last_message_id = messageWindow.find("ul > li:last").attr("message_id");				        
        // Ask the server for the latest messages.
        // Send over the friend_id and last_message_id, so it can send back new messages from this friend.
        $.get("elements/chat-load.php", {
        last_message_id: last_message_id,
        friend_id: friend_id
        }, function(messages) {
        // This function is run when the AJAX request succeeds.				        
        // Append the new messages to the end of the chat
	        messageWindow.find("ul").append(messages);
	        });
		}
	function openPopup(ID) {
	   $('.popup');
	   $("#" + ID).fadeIn(200);
	}
	function closePopup(ID) {
	$('.popup');
	   $("#" + ID).fadeOut(300);
	}
	function MinPopup(ID) {
	$('.popup');
	   $("#" + ID).addClass('Message_Pop_Min').removeClass('Message_Pop_Max');
	}
	function UpPopup(ID) {
	$('.popup');
	   $("#" + ID).addClass('Message_Pop_Max').removeClass('Message_Pop_Min');
	}
</script>