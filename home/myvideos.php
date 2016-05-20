
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
	<link rel="shortcut icon" type="image/png" href="http://www.socialnetwk.com/images/favicon.ico"/>
   	<link rel="shortcut icon" type="image/png" href="http://www.socialnetwk.com/images/favicon.png"/>
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- CSS -->
	<link rel="stylesheet" href="style.css" type='text/css'>
	<!-- FONTS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Bad+Script|Tangerine|Great+Vibes|Cinzel+Decorative|Cinzel&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link href='http://fonts.googleapis.com/css?family=Tauri:regular' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Calligraffitti:regular' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montaga:regular' rel='stylesheet' type='text/css'>

<script src='http://code.jquery.com/jquery-2.1.0.min.js'></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.6.4.js"></script>




  <?php
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com');

?>
<?php
	require_once('../connection.php');

	?>

</head>
<style>
html {
	height:100%;
	width:100%;
	overflow-y:hidden;
	overflow-x:hidden;
}

body {
	height:100%;
	overflow-x:hidden;
	overflow-y:hidden;
	width:100%;
	background:#efefef;
}


.Post_Container {
		width:95%;
		height:150px;
		background:#efefef;
		margin-left: auto;
		margin-right: auto;
		border-radius: 5px;
		margin-bottom:100px;
		left:15px;
		top:50px;
		padding:5px;
		position: relative;

	}
	.Post_Container h4 {
		color:gray;
		padding:0px;
		margin:0px;
	}
	.Post_Container textarea {
		height:90px;
		width:90%;
		margin-left: auto;
		margin-right: auto;
		border:0px;
		background:white;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
		border-radius: 5px;
		resize: none;

	}
	.Post_Container span {
		font-size: 15px;
		 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
	}
	.Post_Container span:hover {
		transition:color 0.2s;
		color:#4FC1E9;
	}
	.Post_Container .row {
		width:90%;
		margin-left: auto;
		margin-right: auto;
	}
	.Post_Container button {
		text-align: center;
		border:0px;
		height:20px;
		width:80%;
		border-radius: 5px;
		background:#4FC1E9;
		 -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		color:white;
		transition:background 0.2s;
	}
	.Post_Container button:hover {
		background:#3BAFDA;
		transition:background 0.2s;
	}
	a {
		color:inherit;
		text-decoration: none;
	}
	a:hover {
		color:inherit;
		text-decoration: none;
	}
	
			.Content_Container_Feed {
	width:65%;
	margin-left:100px;
	height:100%;
	overflow-x:hidden;
	overflow-y:scroll;
	position: fixed;
}
.Feed_Contents_Loop {
	width:95%;
	min-height: 150px;
	height:auto;
	border-radius: 5px;
	margin-left: auto;
	margin-right: auto;
	background:white;
	margin-top:10px;
	  -moz-box-shadow: inset 0 3px 8px rgba(225,255,255,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(225,255,255,.4);
   box-shadow: inset 0 3px 8px rgba(225,255,255,.24);
}
.Header_Feed_Contents_Loop {
	width:100%;
	height:50px;
	color:white;
	position: relative;
	  -moz-box-shadow:  0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:  0 3px 8px rgba(0,0,0,.4);
   box-shadow:  0 3px 8px rgba(0,0,0,.24);

}
.Music {
	background:rgba(55,188,155,0.8);
}
.Status {
	background:rgba(255,206,84,0.8);
}
.Video {
	background:rgba(218,68,83,0.8);

}
.Picture {
	background:rgba(74,137,220,0.8);

}


      .Green {
		background:rgba(55,188,155,0.5);
      }
      .Red {
		background:rgba(218,68,83,0.5);
      }
      .Blue {
		background:rgba(74,137,220,0.5);
      }
      .Yellow {
		background:rgba(255,206,84,0.5);
      }
.Header_Feed_Contents_Loop img {
	height:40px;
	margin-top:5px;
	margin-left:5px;
	border-radius: 50px;
	width:40px;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.Header_Feed_Contents_Loop h4 {
	padding:5px;
	margin:5px;
}
.Header_Feed_Contents_Loopo h5 {
	padding:5px;
	margin:5px;
}
.Header_Feed_Contents_Loop span {
	margin:15px;
	font-size: 25px;
	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(239,239,239,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
}
.Feed_Content_Load_Load {
	height:100%;
	width:90%;
	margin-left:50px;
	position: relative;
}

.Feed_Main_Load_Load {
	height:100%;
	width:100%;
	position: relative;
}


</style>

<body>
	<?php require_once('components/navbar.php'); ?>
	<?php require_once('components/left_container_profile.php'); ?>


			



<?php require_once('components/my_videos.php'); ?>


	


				
		
		
		



		




	
<?php require_once('components/right_container_chat_noti.php'); ?>



</body>

</html>

