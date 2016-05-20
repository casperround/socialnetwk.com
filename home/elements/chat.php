
<style>
	input.message {
	width: 100%; overflow: scroll;bottom:0px;padding:0px;margin:0px;height:40px;
}
    
            .chat-box
            {
	            position: relative;
            }

            .header
            {
                padding: 10px;
                color: white;
                font-size: 14px;
                font-weight: bold;
                background-color: #6d84b4;
            }
			
            .messages
            {
            	z-index: 100;
                height: 80%;
                background-color: green;
                background-color: rgb(237, 239, 244);
word-wrap: break-word;

                overflow-y: scroll;
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
                border-radius: 4px;
                position: relative;
                border-width: 1px;
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

            .clear
            {
                clear: both;
            }

            .input-box
            {
                background-color: white;
                height: 50px;
                padding: 0px;
            }

            .input-box textarea
            {
                padding: 0px;
                width: 278px;
                height: 100%;
                display: inline-block;
                outline: 0px;
                border-width: 0px;
                resize: none;
                border-width: 1px;
                border-color: black;
                border-style: solid;
                font-size: 12px;
                padding: 10px;
                border-top-width: 0px;
            }
                      .MsgInputHidden {
	    display:none;
    visibility:hidden;
}


















	h3.ChatTxt {
		padding:0px;
		margin:0px;
		color:white;
	}
	h5.ChatTxt {
		padding:0px;
		margin:0px;
		color:black;
	}
	h3.ChatTxt2 {
		padding:0px;
		margin:0px;
		color:white;
	}
	
@media (max-width: 992px) {
	h3.ChatTxt {
		padding:0px;
		margin:0px;
		font-size: small;
	}
	h3.ChatTxt2 {
		padding:0px;
		margin:0px;
		color:white;
		font-size: small;

	}
	h5.ChatTxt {
		padding:0px;
		margin:0px;
		font-size: xx-small;
	}

}	
@media (max-width: 700px) {
	h3.ChatTxt {
		padding:0px;
		margin:0px;
		color:white;
		font-size: x-small;
	}
	h3.ChatTxt2 {
		padding:0px;
		margin:0px;
		color:white;
		font-size: x-small;

	}
}		
	.AllChatCont {
		width:100%;
		background:#373a3d;
		overflow: scroll;
		height:100%;
		position: relative;
	}
	.Chat_Cont_Header {
		width:90%;
		margin-left:auto;
		margin-right:auto;
		height:30px;
		background:#333333;
		position: fixed;
	}
	h3.ChatTxt {
		padding:0px;
		margin:0px;
	}
	
	.Chat_Cont_Cont {
		width:90%;
		margin-left:auto;
		margin-right:auto;
		height:100%;
		overflow: scroll;
		margin-top:30px;
		position: fixed;
				overflow: scroll;

		background: #373a3d;
		margin-bottom:30px;
		padding-bottom:60px;
	}
	.Chat_Cont_Footer {
		width:90%;
		margin-left:auto;
		margin-right:auto;
		height:30px;
		background:#333333;
		position: fixed;
		bottom:60px;
		float:bottom;
	}
	.Chat_User_Cont {
		width:40%;
		height:50px;
		position: static;
		background:#4B4E50;
		margin-top:3px;
		-moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
       -webkit-transition: background 0.2s linear;
        -moz-transition: background 0.2s linear;
        -ms-transition: background 0.2s linear;
        -o-transition: background 0.2s linear;
        transition: background 0.2s linear;
	}
	.Chat_User_Cont:hover {
		cursor: pointer;
		 background-color: #373a3d; color:#fff;  

	}
	.Message_Pop_Max {
	width:40%;
	
	height:100%;
	position:fixed;
	background:rgba(255,255,255,0.0);
	float:right;
	right:10%;
	}
	.Message_Pop_Min {
	width:40%;
		margin-left:auto;
		margin-right:auto;
	height:50px;
	position:fixed;
	background:rgba(255,255,255,0.4);
	float:right;
	float:bottom;
	bottom:60px;
	margin-bottom:30px;
	margin-top:30px;
	padding-bottom:60px;
	right:10%;
	}
	.Msg_Pop_Ico {
		width:auto;max-width:25%;
				-moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8);
  -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.8);
       -webkit-transition: color 0.2s linear;
        -moz-transition: color 0.2s linear;
        -ms-transition: color 0.2s linear;
        -o-transition: color 0.2s linear;
               -webkit-transition: background 0.2s linear;
        -moz-transition: background 0.2s linear;
        -ms-transition: background 0.2s linear;
        -o-transition: background 0.2s linear;
        color:#333333;
        background:rgba(255,255,255,0.4);
        text-align: center;
        padding:5px;
        margin:0px;
        transition: color 0.2s linear;
	}
	.Msg_Pop_Ico:hover {
		color:white;
        background:rgba(0,0,0,0.4);
		
	}
	.Message_Pop_Header {
		height:30px;
		position: relative;

		width:40%;
		background:#333333;
		float:top;
		padding:0px;
		margin:0px;
		top:0px;
	}
	.Message_Pop_Footer {
		height:30px;
		width:40%;
		background:#333333;
		float:bottom;
		bottom:60px;
		position: fixed;
	}
	.Message_Pop_Content {
		height:100%;
		overflow: scroll;
		width:40%;
		background:none;
		position: fixed;
		margin-bottom:30px;
		padding-bottom:60px;
	}
	.Msg_Pop_Textarea {
		width:100%;
		height:30px;
	}
</style>

</head>
<body>
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



<?php $users = $db->query("SELECT IF(friends.sender = ".$_SESSION["user"]["id"].", friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.sender = ".$_SESSION["user"]["id"]." OR friends.recipient = ".$_SESSION["user"]["id"]." AND friends.status = '1'"); ?>

	  
	
<div class="AllChatCont">
	
	<div class="Chat_Cont_Header">
		<center><h3 class="ChatTxt">All Users</h3></center>
	</div>
	<div class="Chat_Cont_Cont">
		<?php while($friend = $users->fetch_object()): ?>
		  	<?php  $friends = $db->query("SELECT firstname, lastname, id FROM users WHERE id = $friend->user_id "); ?>
				<?php while($FriendName = $friends->fetch_object()): ?>
					<?php $profile_image = $db->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID = $friend->user_id AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>
		<div class="Chat_User_Cont" onClick="openPopup('<?= $FriendName->id ?>');">
		<h3 class="ChatTxt"><?= $FriendName->firstname ?> <?= $FriendName->lastname ?></h3>
		</div>
		<?php endwhile; ?> 
				<?php endwhile; ?> 
			  
						<?php endwhile; ?>
		
	
	
	</div>
	<div class="Chat_Cont_Footer">
	<center><h3 class="ChatTxt">Search Users..</h3></center>
	</div>
	

			<?php $users = $db->query("SELECT IF(friends.sender='".$_SESSION["user"]["id"]."', friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.status='1' AND friends.sender='". $_SESSION["user"]["id"]."' OR friends.recipient='".$_SESSION["user"]["id"]."' "); ?>
  <?php while($friend = $users->fetch_object()): ?>
  	<?php  $friends = $db->query("SELECT firstname, lastname, id FROM users WHERE id = $friend->user_id "); ?>
		<?php while($FriendName = $friends->fetch_object()): ?>
	<div id="<?=$FriendName->id ?>" style="display:none" class="Message_Pop_Max">
		<div class="Message_Pop_Header">
					<h5 style="display:inline;"class="ChatTxt"><?= $FriendName->firstname ?> <?= $FriendName->lastname ?></h5>
					<span onclick="UpPopup('<?=$FriendName->id ?>');" style="display:inline;"class="glyphicon glyphicon-plus btn-lg Msg_Pop_Ico"></span>
					<span onclick="closePopup('<?=$FriendName->id ?>');" style="display:inline;"class="glyphicon glyphicon-remove btn-lg Msg_Pop_Ico"></span>
					<span onclick="MinPopup('<?=$FriendName->id ?>');" style="display:inline;"class="glyphicon glyphicon-minus btn-lg Msg_Pop_Ico"></span>
		</div>
		<div class="Message_Pop_Content">

<div  id="messages" class="messages message-window" friend_id="<?=$FriendName->id ?>">
										<ul  class="message">



										</ul>
			            		</div>

		</div>
		<div class="Message_Pop_Footer">
			
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
									<input autocomplete="off" id="message" style="color:black;" class="Msg_Pop_Textarea" type="text" name="message">
									<input style="" id="submit" class="submit MsgInputHidden" type="submit" name="submit" value="Submit" />
								</form>	
		</div>
	</div>
	
<?php endwhile; ?> 
<?php endwhile; ?> 
</div>
	
	