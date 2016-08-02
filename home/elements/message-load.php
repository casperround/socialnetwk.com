<style>
.messages ul li span.received {
		background-color:#e6e5eb;
		color:#383641;
		padding:.6875rem;
		font-size: .875rem;
		float:left;
		word-break:break-word;
	}
	.messages ul li span.sent {
		background-color:#158ffe;
		color:white;
		padding:.6875rem;
		font-size: .875rem;
		float:right;
		word-break:break-word;
	}
	.messages iframe {
		width:100%;
		height:auto;
		position: relative;
	}
	.messages ul li span.received:before {
		border-right:0px;
	}

</style>
<script type='text/javascript'>//<![CDATA[
$(".messages").animate({
    scrollTop: $(".messages")[0].scrollHeight
 },'slow');
</script>
<?php


	
	session_start();
	if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
		// redirect to index page if not superuser
		header('Location: index');
	}
	
	// Check that we have a valid friend ID passed in.
	$friend_id = filter_var((int)$_GET['id'], FILTER_VALIDATE_INT);
	if($friend_id === false) {
		die("Malformed or no friend_id provided.");
	}
	
	
	// If a 'last message ID' has been provided, check it's an int, and load it in.
	$last_message_id = filter_var((int)$_GET['last_message_id'], FILTER_VALIDATE_INT);
	
	// If validation fails, default 'last message ID' to zero.
	// This way, if we don't provide the last message ID, we will get all the messages.
	if($last_message_id === false or empty($last_message_id)) $last_message_id = 0;
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
	if (!$con) die('Could not connect: ' . mysqli_error($con));
	
	/*
	$sql="SELECT IF(friends.sender = ".$_SESSION["user"]["id"].", friends.recipient, friends.sender) AS user_id
	FROM friends
	WHERE friends.sender = ".$_SESSION["user"]["id"]."
		OR friends.recipient = ".$_SESSION["user"]["id"]."";
		$Frind = mysqli_query($con,$sql);
	while($Friends = mysqli_fetch_array($Frind)) {
	$sql="SELECT firstname, lastname, id FROM users WHERE id = ".$Friends['user_id']." ";
		$UsrFrind = mysqli_query($con,$sql);
	while($UserFriends = mysqli_fetch_array($UsrFrind)) {
	*/
	
	// Query for messages to/from $friend_id, with a message.id higher than $last_message_id.
	$sql="SELECT id, message, sender, recipient, date, time, IF(recipient = ".$_SESSION["user"]["id"].", 'received', 'sent') AS direction
		FROM message
		WHERE
			(recipient = $friend_id AND sender = ".$_SESSION["user"]["id"]." OR recipient = ".$_SESSION["user"]["id"]." AND sender = $friend_id)
			AND id > $last_message_id";
	$messages = mysqli_query($con, $sql);
	
	while($message = mysqli_fetch_array($messages)) {
		
		echo "<li message_id='". $message['id'] ." messageloading'>";
		echo "<p  class='". $message['direction'] ."'>". $message['message'] .'</p>';
		echo "<div class='clear'></div>";
		echo "</li>";
	};
?>
