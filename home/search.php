
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
	    session_start();

	require_once('../connection.php');

	?>
 <?php
	  $user_data_load = $con->query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");?>
	<?php while($userloaded = $user_data_load->fetch_object()): ?>	
		<link id="stylesheet" rel="stylesheet" href="<?=$userloaded->theme?>" type='text/css'>
<?php endwhile;?>
<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])):?>
		<link id="stylesheet" rel="stylesheet" href="css/theme_dark.css" type='text/css'>
		<?php else:?>					
		<?php endif;?>
</head>

<style>
	.Search_containerR {
		color:white;
		padding-top:50px;
		margin-left:170px;
		width:40%;
		height:auto;
		position: relative;
	}


 .Search_containerR input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 40%;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  float:left;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
.Search_containerR input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
.Search_containerR input:focus {
  background-color: white;
  width: 90%;
  color: #53e3a6;
}
 
 

 
</style>

<body>





	<?php require_once('components/navbar.php'); ?>
<div class="Search_containerR" style="width:55%;">


<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>

<h3>Search Socialnetwk</h3>
		<form action="search.php" method="GET" >
		<input   type="text" name="query"  placeholder="Search Anything"/></br></br>
		</form></br>
		<h5>Search videos, tags, music, users...</h5>
		<?php endif;?>

	</div>
<?php require_once('components/search_container.php'); ?>
				
<?php 
		if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
			
		}
		else{
			require_once('components/left_container_profile.php');
		}
		
	?>



		


	<?php 
		if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
			
		}
		else{
			require_once('components/right_container_chat_noti.php');
		}
		
	?>




</body>

</html>

