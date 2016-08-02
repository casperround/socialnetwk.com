
<!DOCTYPE html>
<html lang="en-US">

<head>

	<title>
	</title>

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
	<?php
error_reporting(E_ERROR);
$page = $_SERVER['PHP_SELF'];
$sec = "0.5";
$db = new mysqli("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp", "pdo_ret");
if($db->connect_error) die("Could not connect to Socialnetwk DB ".$db->connect_errno.": ".$db->connect_error);
$users = $db->query("SELECT firstname, id, lastname, video, image, text  FROM users");
?>
</head>
<style>
html,body {
	height:100%:
	width:100%;
	background:#efefef;
}
.Navbar {
	height:40px;
	width:100%;
	position: fixed;
	float:top;
	z-index: 100;
	background:#4FC1E9;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
}
.column_left {
	margin-top:40px;
	height:100%;
	width:350px;
	z-index: 20;
	position: fixed;
	background:#efefef;
-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
}
.Left_Col_Head {
	background-image: url("http://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg");
	background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;

background-position:center;
padding-top:20px;
padding-left:20px;
	height:150px;
	width:100%;
	position: relative;
}
.ProfileImg {
	height:50px;
	width:50px;
	border-radius: 50px;
}
.Left_Col_Selects {
	width:100%;
	height:40px;
	padding:10px;
	background:;
	color:gray;
	margin-top:5px;
	position: relative;
	transition:background 0.2s, color 0.2s;
}
.Left_Col_Selects:hover {
	background:rgba(0,0,0,0.3);
	transition:background 0.2s, color 0.2s;
	color:white;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.Left_Col_Selects span {
	font-size: 25px;
	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;

}
.Left_Col_Selects h4 {
	padding:0px;
	margin:0px;
	text-align: left;
}
.New_Content_Noti {
	border-radius: 5px;
	background:#EC87C0;
	color:white;
	width:80%;
	height:100%;
	position: relative;

}
.New_Content_Noti h5 {
	padding:0px;
	margin:0px;
	text-align: center;
}
.Left_Col_Head h3 {
	color:white;
}
.MainLogo {
	height:40px;
	left:10px;
	width:40px;
	border-radius: 50px;
	display: inline-block;
	bottom:10px;
	position: relative;	
}
.Navbar h3 {
	color:white;
	display: inline-block;
	padding:0px;
	margin-right:5px;
	margin-top:10px;
}


.Post_Container {
		width:90%;
		height:150px;
		background:#efefef;
		margin-left: auto;
		margin-right: auto;
		border-radius: 5px;
		margin-bottom:100px;
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

</style>

<body>
	<div class="Navbar">
		<div class="row">
			<div class="col-md-4">
						<img src="http://www.socialnetwk.com/images/socialnetwk.png" class="MainLogo"/>
						<h3>ocialnetwk</h3>
			</div>
			<div class="col-md-4">

			</div>
			<div class="col-md-4">

			</div>
		</div>
	</div>
			<div class="column_left">
				<div class="Left_Col_Head">
					<div class="row">
						<div class="col-md-4">
							<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/atom_profile_01.jpg" class="ProfileImg"/>
						</div>
						<div class="col-md-8">
							<h3>Casper Round</h3>
						</div>
					</div>
				</div>
				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-th-list"></span>
						</div>
						<div class="col-md-6">
							<h4>Dashboard</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5>4 New!</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-user"></span>
						</div>
						<a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><div class="col-md-6">
							<h4>Profile</h4>
						</div></a>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-film"></span>
						</div>
						<div class="col-md-6">
							<h4>Videos</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-picture"></span>
						</div>
						<div class="col-md-6">
							<h4>Pictures</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5>3 New!</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-home"></span>
						</div>
						<div class="col-md-6">
							<h4>Home</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-cloud"></span>
						</div>
						<div class="col-md-6">
							<h4>Cloud</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-map-marker"></span>
						</div>
						<div class="col-md-6">
							<h4>Maps</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-comment"></span>
						</div>
						<div class="col-md-6">
							<h4>Messages</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-globe"></span>
						</div>
						<div class="col-md-6">
							<h4>Global Users</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-music"></span>
						</div>
						<div class="col-md-6">
							<h4>My music</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>

				<div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-off"></span>
						</div>
						<div class="col-md-6">
							<h4>Logout</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div>
			</div>



<style>

.Content_Container_Feed {
	width:45%;
	margin-left:350px;
	height:100%;
	overflow-x:hidden;
	overflow-y:scroll;
	position: fixed;
}
.Feed_Contents_Loop {
	width:95%;
	min-height: 150px;
	border-radius: 5px;
	margin-left: auto;
	margin-right: auto;
	background:white;
	margin-top:10px;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
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
	background:#48CFAD;
}
.Status {
	background:#FFCE54;

}
.Video {
	background:#ED5565;

}
.Picture {
	background:#4FC1E9;

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
	width:80%;
	margin-left:50px;
	position: relative;
}

</style>
		
				 <script>

 $(document).ready(function() {
       $("#Feed_Content_Load_Load").load("elements/feedloadtest.php");
       var refreshId = setInterval(function() {
          $("#Feed_Content_Load_Load").load('elements/feedloadtest.php?' + 1*new Date());
       }, 60000);
    });
</script>
	<div class="Content_Container_Feed">
		<div class="Post_Container">
			<h4>Post something..</h4>
			<center><textarea>...</textarea></center>
			<div class="row">
				<div class="col-md-2">
					<span class="glyphicon glyphicon-film"></span>
				</div>
				<div class="col-md-2">
					<span class="glyphicon glyphicon-picture"></span>
				</div>

				<div class="col-md-2">
					<span class="glyphicon glyphicon-music"></span>
				</div>
				<div class="col-md-2">
					<span class="glyphicon glyphicon-map-marker"></span>
				</div>
				<div class="col-md-4">
					<center><button>Post</button></center>
				</div>
			</div>
		</div>
<div id="Feed_Content_Load_Load"class="Feed_Content_Load_Load">
	
	
</div>
				
		
		
		



		



	</div>
</body>

</html>

