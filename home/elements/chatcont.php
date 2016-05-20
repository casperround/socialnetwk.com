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
   		setInterval(fetchMessages, 5000, messageWindow);
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
	   $("#" + ID).addClass('ChatMinPop').removeClass('ChatActivePop');
	}
	function UpPopup(ID) {
	$('.popup');
	   $("#" + ID).addClass('ChatActivePop').removeClass('ChatMinPop');
	}
</script>


<div class="Right_Chat_Cont">
<?php 
	    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
);?>
<div class="Chat_Header_Cont">
	<center><h4>Users Online</h4></center>
</div>
<div class="Chat_Usr_Cont">
				
<?php
	      // redirect to index page if not superuser
$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

	 $users = $con->query("SELECT IF(friends.sender = ".$_SESSION["user"]["id"].", friends.recipient, friends.sender) AS user_id FROM friends WHERE friends.status=1 AND friends.sender = ".$_SESSION["user"]["id"]." OR friends.recipient = ".$_SESSION["user"]["id"]."");?>
<?php while($friend = $users->fetch_object()): ?>
		  	<?php  $friends = $con->query("SELECT firstname, lastname, id FROM users WHERE id = $friend->user_id "); ?>
				<?php while($FriendName = $friends->fetch_object()): ?>
				
				
					<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID = $friend->user_id AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>
				
				<div class="Chat_Usr_Loop" onClick="openPopup('<?= $FriendName->id ?>');">
					<img class="Usr_Pic_Loop" src="http://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>"/>
					<h6 style="padding:0px;margin:0px;display:inline-block;"><?= $FriendName->firstname ?> <?= $FriendName->lastname ?></h6>
					<div style="padding:0px;margin:0px;display:inline-block;background:#55ff8b;width:10px;height:10px;border-radius:50px;border:1px solid gray;"></div>
				</div>
				
				<?php endwhile; ?> 
				<?php endwhile; ?> 
			  
						<?php endwhile; ?>
							</div>
			<div class="Chat_Footer_Cont">
				<input class="Search_Usr" placeholder="Search for people, pages, videos, etc"/>

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
					<span onclick="UpPopup('<?=$FriendName->id ?>');" style="display:inline;font-size:10px;color:#0074D9;margin:0px;padding:2px;float:right;"class="glyphicon glyphicon-plus btn-lg Msg_Pop_Ico"></span>
					
					<span onclick="MinPopup('<?=$FriendName->id ?>');" style="display:inline;font-size:10px;color:#0074D9;margin:0px;padding:2px;float:right;"class="glyphicon glyphicon-minus btn-lg Msg_Pop_Ico"></span>
					<span onclick="closePopup('<?=$FriendName->id ?>');" style="display:inline;font-size:10px;color:#0074D9;margin:2px;padding:0px;float:right;"class="glyphicon glyphicon-remove btn-lg Msg_Pop_Ico"></span>
		</div>
		<div class="ChatPopMsg">

<div  id="messages" class="messages message-window" friend_id="<?=$FriendName->id ?>">
										<ul  class="message">



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
	
	
</div>