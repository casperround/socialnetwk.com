
<div class="Content_Container_Feed">
	<div class="Feed_Content_Load_Load">

<style class="cp-pen-styles">::-webkit-scrollbar {
	display: none;
}

body {
	background:white;
	overflow:none;
}

blockquote {
	position:absolute;
	left:0;
  right:0;
	top:0;
	padding:1.5rem 0;
	margin:0;
	color:#8a8a8a;
	text-align:center;
}

.screen {
	position:absolute;
	width:100%;
	height:100%;
	overflow:hidden;
}

header {
	position:absolute;
	left:0;
	top:0;
	right:0;
	height:60px;
	overflow:hidden;
	background:#f8f8f8;
	z-index:2;
	box-shadow:0 1px 0 rgba(0,0,0,.1),0 1px 2px rgba(0,0,0,.1);
}

header h1 {
position: relative;
	font-family:"Helvetica Neue","Helvetica",sans-serif;
	font-weight:normal;
	font-size:1rem;
	margin:0;
	padding:0;
	line-height:44px;
	text-align:center;
  z-index: 2;
  font-weight:300;
	box-shadow:inset 0 -1px 0 rgba(255,255,255,.25);
}

.content-blurred {
	margin-top:44px;
	padding:0 1rem;
	position:absolute;
	top:0;
	left:0;
	right:0;
	-webkit-filter:blur(10px);
	filter:url(#blur-effect);
	opacity:.35;
   z-index: 1;
}

.content-blurred .content {
  -webkit-backface-visibility:hidden;
  -moz-backface-visibility:hidden;
  -ms-backface-visibility:hidden;
  backface-visibility:hidden;
}

.content-wrapper {
	position:relative;
	padding:0 1rem;
	z-index:1;
	height:100vh;
	overflow:auto;
  -webkit-backface-visibility:hidden;
}

.content-wrapper .content {
 	margin-top:44px;
}

.content {
	display:block;
	padding-top:1em;
}

.messages {
	margin:0;
	padding:0;
	list-style-type:none;
}

.messages li {
	display:block;
	float:left;
	clear:both;
	max-width:65%;
	margin:0 0 1rem 0;
	padding:0;
}

.messages li:nth-child(even) {
	float:right;
}

.messages li:nth-child(even) img {
	float:right;
}

.messages p {
	border-radius:.75rem;
	background:#e6e5eb;
	color:#383641;
	padding:.6875rem;
	margin:0;
	font-size:.875rem;
}

.messages li:nth-child(even) p {
	background:#158ffe;
	color:#fff;
}

.messages img {
	display:block;
	max-width:65%;
	border-radius:.75rem;
}

.phone {
	position:fixed;
	width:50%;
	height:50%;
  margin:0 auto;
}
	.Message_Input_Container {
		position: fixed;
		height:40px;
		width:50%;
		z-index: 100;
		bottom:0px;
		background:#efefef;
	}
	
	.Message_Input_Container span {
		text-align: center;
		font-size: 15px;
		margin-top:3px;
		padding:0px;
	}
	.Message_Input_Container input {
		width:100%;
		border-radius: 5px;
		color:darkgray;
		height:30px;
		margin-top:5px;
		border:1px solid lightgray;
	}
	.Message_Input_Container button {
		width:80%;
		height:30px;
		margin-top:5px;
		border-radius: 5px;
		margin-right:20px;
		border:0px;
		font-weight: 200;
		background:lightgreen;
		color:white;
	}

.Message_Header img {
		height:40px;
		width:40px;
		border-radius: 50px;
		position: relative;
		margin-top:5px;
	}
	.Message_Header h6 {
		font-size: 10px;
		font-weight: 200;
	}
	.Message_Header span {
		font-size: 15px;
		margin-top:13px;
		padding:0px;
	}
	.col-xs-4 {
		padding:3px;
	}



@media (max-width:770px) {
		.Message_Container {
			width:100%;
			margin-top:0px;
		}
		.Message_Input_Container {
			width:100%;
			margin-top:0px;
		}
		.Message_Header {
			width:100%;
			margin-top:0px;
		}
		.phone {
			width:100%;
			height:100%;
		}
	}
	@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
		.Message_Container {
			width:100%;
			margin-top:0px;
		}
		.Message_Input_Container {
			width:100%;
			margin-top:0px;
		}
		.Message_Header {
			width:100%;
			margin-top:0px;
		}
		.phone {
			width:100%;
			height:100%;
		}

	}

	.messages ul li span.sent {
		background-color:#e6e5eb;
		color:#383641;
		padding:.6875rem;
		font-size: .875rem;
	}
</style>
	<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 1");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 2");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
						<?php  
        // redirect to index page if not superuser  
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');  
if (!$con) {  
    die('Could not connect to Socialnetwk DB: ' . mysqli_error($con));  
} ?>
<?php
$id = $_GET['id'];
	 $users = $con->query("SELECT * FROM users WHERE id='".$id."'");?>
<?php while($friend = $users->fetch_object()): ?>
<div class="phone">
	<div class="screen">
		<header class="Message_Header">
					<div class="row" style="text-align:center;height:60px;">
						<div class="col-xs-2" style="padding:8px;">
							<center><span class="glyphicon glyphicon-chevron-left"></span></center>
						</div>
						<div class="col-xs-8">
							<img src="http://www.wealthdynamicscentral.com/product_images/b/profile_test_icon__74443.jpg"/>
							<h6>Casper</h6>
						</div>
						<div class="col-xs-2" style="padding:8px;">
							<center><span class="glyphicon glyphicon-info-sign"></span></center>
						</div>
					</div>
		</header>
		<div class="content-wrapper">
			<div class="content">
				<ol class="messages">
					<li>
						<p>Praesent porttitor nisl vel enim consectetur, vitae dictum ipsum condimentum.</p>
					</li>
					<li>
						<p>Sed convallis lorem non augue lobortis tincidunt.</p>
					</li>
					<div  id="messages" class="messages message-window" friend_id="<?=$friend->id ?>">
										<ul  id="ScrollAuto" class="message">



										</ul>
					</div>
					
				</ol>
			</div>
		</div>
		<div class="Message_Input_Container">
				<div class="row">
					<div class="col-xs-2" style="padding:8px;">
						<center><span class="glyphicon glyphicon-camera"></span></center>
					</div>
					<div class="col-xs-7">
						<center><input placeholder="Message" autofocus/></center>
					</div>
					<div class="col-xs-3">
						<center><button>Send</button></center>
					</div>
				</div>
			</div>
	</div>
</div>

<?php endwhile;?>

<!-- firefox svg blurring trick -->
<svg id="svg-image-blur">
	<filter id="blur-effect">
		<feGaussianBlur stdDeviation="10" />
	</filter>
</svg>
<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
<script>var content = document.querySelector('.content');
var duplicate = content.cloneNode(true);
var contentBlurred = document.createElement('div');
contentBlurred.className = 'content-blurred';
contentBlurred.appendChild(duplicate);
var header = document.querySelector('header');
header.appendChild(contentBlurred);
var contentWrapper = document.querySelector('.content-wrapper'), translation;
contentWrapper.addEventListener('scroll', function () {
    translation = 'translate3d(0,' + (-this.scrollTop + 'px') + ',0)';
    duplicate.style['-webkit-transform'] = translation;
    duplicate.style['-moz-transform'] = translation;
    duplicate.style['transform'] = translation;
    console.log(duplicate);
});
contentWrapper.scrollTop = 140;
//# sourceURL=pen.js
</script>

<script>
	$(function() {
		$(document).on('submit', 'form#SendForm', function(e){
    e.preventDefault();
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
		})

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
        $.get("elements/message-load.php", {
        last_message_id: last_message_id,
        friend_id: friend_id
        }, function(messages) {
        // This function is run when the AJAX request succeeds.				        
        // Append the new messages to the end of the chat
	        messageWindow.find("ul").append(messages);
	        });
		}

</script>
	</div>
</div>