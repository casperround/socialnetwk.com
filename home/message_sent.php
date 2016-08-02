
<!DOCTYPE html>
<html lang="en-US">

<head>

	<title>Socialnetwk</title>

    <meta charset="utf-8">
    <meta name="author" content="Casper Round" />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="Create an account or login to Socialnetwk. Socialnetwk connects you and your friends, allowing you to share any media, and giving you the ability to change the site to how you want it, while connecting any type of social media" />
    <meta name="keywords" content="social,socialnetwk,network,media,community,friends,people,life,skills,pictures,video,films,music,login,register,sign up,artists,facebook,youtube,instagram,twitter,tumblr,google" />
    <meta name="robots" content="noindex,nofollow">
	<link rel="shortcut icon" type="image/png" href="https://www.socialnetwk.com/images/favicon.ico"/>
   	<link rel="shortcut icon" type="image/png" href="https://www.socialnetwk.com/images/favicon.png"/>
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/main.css" type='text/css'>
	<link rel="stylesheet" href="css/responsive_main.css" type='text/css'>
	<link rel="stylesheet" href="css/icons.css" type='text/css'>
	<!-- FONTS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Parisienne|Bad+Script|Tangerine|Great+Vibes|Cinzel+Decorative|Cinzel&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link href='https://fonts.googleapis.com/css?family=Tauri:regular' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Calligraffitti:regular' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montaga:regular' rel='stylesheet' type='text/css'>

<script src='https://code.jquery.com/jquery-2.1.0.min.js'></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.6.4.js"></script>





<?php
	require_once('../connection.php');

	?>
 <?php
	  $user_data_load = $con->query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");?>
	<?php while($userloaded = $user_data_load->fetch_object()): ?>	
		<link id="stylesheet" rel="stylesheet" href="<?=$userloaded->theme?>" type='text/css'>
<?php endwhile;?>
		<link id="stylesheet" rel="stylesheet" href="css/theme_dark.css" type='text/css'>

</head>


<body>
	<?php require_once('components/navbar.php'); ?>
	<?php 
		if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
			
		}
		else{			
			require_once('components/left_container_profile.php');
		}
		
	?>




<style>
	.Search_container {
		color:white;
		padding-top:50px;
		margin-left:170px;
		width:40%;
		height:100%;
		position: relative;
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
	width:90%;
	display:inline-block;
	min-height:50px;
		margin:10px;

	height:auto;
	color:black;
	padding:5px;
	background:white ;
	border-radius: 2px;
	border:0px;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
   transition:box-shadow 0.2s;
}
.MySearchloop:hover {
	transition:box-shadow 0.2s;
	box-shadow:none;
}
.MySearchTitleLoop {
	height:70px;
	width:100%;
	color:black;
	text-align: center;
}
.MySearchTitleLoop h6 {
	display:inline-block;
}
.MySearchTitleLoop img {
	height:60px;
	width:60px;
}
.MySearchloop button {
	background:none;
	border:none;
	color:none;
	background-color:none;
}
@media (max-width:770px) {
 	.Search_container {
	 	width:100%;
	 	margin-left:auto;
	 	margin-right:auto;
 	}
 	.Search_container {
	 	font-size: 12px;
 	}
 	.Search_container h5 {
	 	font-size: 12px;
 	}
 	.Search_container h6 {
	 	font-size: 10px;
 	}
 
 }
 .Contact_Container input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: #434A54;
  width: 40%;
  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
.Contact_Container input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
.Contact_Container input:focus {
  background-color: white;
  width: 90%;
  color: #53e3a6;
}
 .Contact_Container {
	 width:50%;
	 padding:15px;
	 margin-left:auto;
	 margin-right:auto;
	 position: relative;
	 background:#efefef;
	 margin-top:100px;
	 border-radius: 3px;
	 -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
   height:auto;
 }
 textarea {
	 -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: #434A54;
  width: 90%;
  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
  resize: none;
 }

 button {
	 background:#4A89DC;
	 color:white;
	 height:30px;
	 width:150px;
	 border:0px;
	 border-radius: 5px;
	 -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
   transition:background 0.2s;
	 
 }
 .button:hover {
	 transition:background 0.2s;
	 background:#3BAFDA;
 }
</style>


<div class="Contact_Container">
	<center><h3>Message Sent</h3>
	 <form class="form-horizontal" role="form" action="elements/contact_send.php" method="POST">
				      

				        <center><input name="name" type="text"  placeholder="Name" id="name" />

				      
				        <input name="email" type="text" id="email" placeholder="Email" />

				      

				        <textarea name="message"  id="comment" placeholder="message"></textarea></center>

				      <input type="text" id="date" name="date" style="display:none;" value="<?= date('Y-m-d') ."\n" ?>" />
								<?php $now = time(); $utc_time = $now - intval(date('Z', $now)); ?>
								<input type="text" id="time" name="time"style="display:none;" value="<?= '' . date('H:i:s', $now) . '' ?>" />  
				      						<center><button class="button" type="submit" style="margin-bottom:10px;"><span class="button-text">Send</span><span class="button-icon"><i class="fa fa-arrow-right"></i></span></a></button></center>

				      	
				      
				    </form>
</div>
				
		
		
		



		


	<?php 
		if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
			
		}
		else{
			require_once('components/right_container_chat_noti.php');
		}
		
	?>




</body>

</html>

