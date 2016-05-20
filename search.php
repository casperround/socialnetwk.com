
<!DOCTYPE html>
<html lang="en-US">

<head>

	<title>Socialnetwk Admin</title>

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
	<link rel="stylesheet" href="home/style.css" type='text/css'>
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

	<link href="assets/css/styles.css" rel="stylesheet"/>

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
<style>

.Navbar {
	height:40px;
	width:100%;
	position: fixed;
	float:top;
	top:0px;
	z-index: 100;
	background: #434A54;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
}
.Navbar h3 {
	padding:0px;
	margin:0px;
	color:white;
	font-weight: bold;
}

.filemanager .Add li {
	border-radius: 3px;
	background-color: rgba(74,137,220,0.5) ;
	width: 307px;
	height: 118px;
	list-style-type: none;
	margin: 10px;
	display: inline-block;
	position: relative;
	overflow: hidden;
	padding: 0.3em;
	z-index: 1;
	cursor: pointer;
	box-sizing: border-box;
	transition: 0.3s background-color;
}

.filemanager .Add li:hover {
	background-color: #42424E;

}
.filemanager .Add li .name {
	color: #ffffff;
	font-size: 15px;
	font-weight: 700;
	line-height: 20px;
	width: 150px;
	white-space: nowrap;
	display: inline-block;
	position: absolute;
	overflow: hidden;
	text-overflow: ellipsis;
	top: 40px;
}

.Navbar {
	height:40px;
	width:100%;
	position: fixed;
	float:top;
	z-index: 100;
	background: #434A54;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
}
.column_left {
	margin-top:40px;
	height:100%;
	width:150px;
	top:0px;
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
	height:50px;
	width:100%;
	padding:5px;
	position: relative;
}
.ProfileImg {
	height:30px;
	width:30px;
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
	padding:3px;
	margin:0px;
	font-size: 12px;
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
.New_Content_Noti h5 {
	padding:0px;
	margin:0px;
	font-size: 10px;
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
	.Navbar input {
		height:30px;
		margin-top:5px;
		width:50%;
		color:gray;
		position: relative;
		border:0px;
		background:white;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
		border-radius: 5px;
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
	.Chat_Notification_Container {
		width:450px;
		right:0px;
		float:right;
		top:0px;
		margin-top:40px;
		position: fixed;
				background:#656D78 ;

		height:100%;
	}
	.Chat_Notification_Container h4 {
		color:gray;
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
	.Chat_Container_Fab {
		width:200px;
		display: inline-block;
		position: relative;
		background: #434A54;
		float:right;
	-moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
		height:100%;

	}
.Chat_Container_Fab_Head {
		position: relative;
		height:40px;
		display: inline-block;
		width:100%;

	}
	.Chat_Usr_Loop_Fab {
	   width:90%;
	   margin-top:0px;
	   position: relative;
	   height:40px;
	   	color:white;
	   	padding:5px;
	   	background:;
	   	margin-left: auto;
	   	margin-right: auto;
border-top-left-radius:25px;

border-bottom-left-radius:25px;


	}
	.Chat_Usr_Loop_Fab:hover {
	background:rgba(0,0,0,0.3);
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
      .Notification {
		min-height:30px;
		padding:3px;
		width:90%;
		height:auto;
		margin-left: auto;
		margin-right: auto;
		-moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
   margin-top:5px;
   color:white;
   	transition:background 0.2s, color 0.2s;

   border-radius: 5px;
      }
	.Notification:hover {
		background:rgba(0,0,0,0.3);
	transition:background 0.2s, color 0.2s;
	color:white;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
	}
	.Notification h5 {
		padding:0px;
		margin:0px;
		color:white;
		font-weight:400;
		font-size:14px;
	}
	.Notification h6 {
		padding:0px;
		margin:0px;
		color:white;
		font-weight:400;
		font-size:12px;
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
      .Chat_Live_Green {
      		font-size: 20px;
	 background-color: #37BC9B ;
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
	        -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
   background:#efefef;
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

</style>
</head>

<body>
<div class="Navbar">
		<div class="row">
			<div class="col-md-2">
				<img src="http://www.socialnetwk.com/images/socialnetwk.png" class="MainLogo"/>
				<h3>ocialnetwk</h3>
			</div>
			<div class="col-md-4">
				<form action="search.php" method="GET" >
				<input  type="text" name="query"  placeholder="Search for people, pages, videos, etc"/>
				</form>
			</div>
			<div class="col-md-6">

			</div>
		</div>
	</div>
			<div class="column_left">
				<div class="Left_Col_Head">
					<div class="row">
						<div class="col-md-4">
								<?php
	      // redirect to index page if not superuser
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect to Socialnetwk DB: ' . mysqli_error($con));
} ?>


								<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID=".$_SESSION['user']['id']." AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>
							<img src="http://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>" class="ProfileImg"/>
							<?php endwhile;?>
						</div>
						<div class="col-md-8">
							<h4 style="color:white;font-size:10px;"><?= $_SESSION["user"]["firstname"] ?> <?= $_SESSION["user"]["lastname"] ?></h4>
						</div>
					</div>
				</div>
				<a href="index.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-th-list"></span>
						</div>
						<div class="col-md-6">
							<h4>Dashboard</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
<!-- 								<h5>4 New!</h5>
 -->							</div>
						</div>
					</div>
				</div></a>

				<a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-user"></span>
						</div>
						<div class="col-md-6">
							<h4>Profile</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>
				
				<a href="notifications.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-bell"></span>
						</div>
						<div class="col-md-6">
							<h4>Notifications</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="myvideos.php"><div class="Left_Col_Selects">
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
				</div></a>

				<a href="mygallery.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-picture"></span>
						</div>
						<div class="col-md-6">
							<h4>Pictures</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
<!-- 								<h5>3 New!</h5>
 -->							</div>
						</div>
					</div>
				</div></a>


				<a href="cloud.php"><div class="Left_Col_Selects">
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
				</div></a>

				<a href="maps.php"><div class="Left_Col_Selects">
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
				</div></a>

				<a href="chat.php"><div class="Left_Col_Selects">
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
				</div></a>

				<a href="user_country.php"><div class="Left_Col_Selects">
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
				</div></a>

				<a href="mymusic.php"><div class="Left_Col_Selects">
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
				</div></a>

				<a href="logout.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-off"></span>
						</div>
						<div class="col-md-6">
							<h4>Logout</h4>
						</div></a>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>
			</div>

<style>
	.filemanager {
		color:white;
		margin-left:170px;
		width:65%;
	}
</style>
<style>
.filemanager img {
	max-width:100%;
	position: relative;
	height:auto;
}
.filemanager video {
	max-width:100%;
	position: relative;
	height:auto;
	display:inline-block;

}
.filemanager audio {
	max-width:100%;
	position: relative;
	height:auto;
}
.filemanager iframe {
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
	width:40%;
	display:inline-block;
	min-height:150px;
		margin:10px;

	height:auto;
	padding:5px;
	background:#efefef ;
	border-radius: 5px;
	border:0px;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.MySearchTitleLoop {
	height:30px;
	width:100%;
	color:black;
	text-align: center;
}
.MySearchTitleLoop h6 {
	display:inline-block;
}
.MySearchTitleLoop img {
	display:inline-block;
	border-radius: 50px;
	height:30px;
	width:30px;
}
</style>

<?php

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM media WHERE userID = ".$_SESSION["user"]["id"]." AND format = 'video' OR file_format = 'iframe' ORDER BY id DESC") ?>
	

	<div class="filemanager" >







   <?php 
   echo $query;
    $query = $_GET['query']; 
$SearchQuery = $db->query("SELECT * FROM users") ?>
<?php while($sq = $SearchQuery->fetch_object()): ?>
		<div  class="MySearchloop">

   ?>         
<?php 



$SearchUserImage = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$sq['id']." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($SPI = $SearchUserImage->fetch_object()): ?>
			<div class="MySearchTitleLoop">
				<img src="http://www.socialnetwk.com/media/<?= $SPI->file_format ?>/<?= $SPI->post_id ?><?= $SPI->userID ?>.<?= $SPI->file_format ?>"/><h6><?= $results['firstname'] ?>  <?= $results['lastname'] ?></h6>
			</div>
			           <?php endwhile; ?> 





		</div>

      <?php endwhile; ?>

	</div>




	<div class="Chat_Notification_Container">
		<div class="Notification_Container_Fab">
			<div class="Notification_load_containers">
				<center><h4  style="color:white;font-weight:400;font-size:14px;">Notifications</h4></center>
					<?php  $userss = $con->query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'");?>
					<?php while($friend = $userss->fetch_object()): ?>
					<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend->sender."'");?>
					<?php while($user = $user_select->fetch_object()): ?>
						<div class="Red Notification">
							<div class="row">
								<div class="col-md-9">
									<h5>Friend Request</h5>
									<h6><?= $user->firstname ?> <?= $user->lastname ?></h6>
								</div>
								<div class="col-md-3">
									<span class="glyphicon glyphicon-user Chat_Notification_Container_span"></span>
								</div>
							</div>
						</div>
					<?php endwhile;?>
					<?php endwhile;?>
					<div class="Yellow Notification">
						<div class="row">
							<div class="col-md-9">
								<h5>New Message</h5>
								<h6>Casper Round</h6>
							</div>
							<div class="col-md-3">
								<span class="glyphicon glyphicon-comment Chat_Notification_Container_span"></span>
							</div>
						</div>	
					</div>
					<div class="Blue Notification">
						<div class="row">
							<div class="col-md-9">
								<h5>New comment</h5>
								<h6>Casper Round</h6>
							</div>
							<div class="col-md-3">
								<span class="glyphicon glyphicon-pencil Chat_Notification_Container_span"></span>
							</div>
						</div>
					</div>
					<div class="Green Notification">
						<div class="row">
							<div class="col-md-9">
								<h5>Friend Request</h5>
								<h6>Casper Round</h6>
							</div>
							<div class="col-md-3">
								<center><span class="glyphicon glyphicon-certificate Chat_Notification_Container_span"></span></center>
							</div>
						</div>
					</div>
			</div>

			<div class="Feed_toggle">
								<center><h6 style="color:white;font-weight:400;font-size:14px;">Filter Stream</h6></center>

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
				     <center><span class="glyphicon glyphicon-globe" style="/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#da3f53+0,37bc9b+51,37bc9b+51,4a89dc+100 */
background: rgb(218,63,83); /* Old browsers */
background: -moz-linear-gradient(left,  rgba(218,63,83,1) 0%, rgba(55,188,155,1) 51%, rgba(55,188,155,1) 51%, rgba(74,137,220,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(218,63,83,1) 0%,rgba(55,188,155,1) 51%,rgba(55,188,155,1) 51%,rgba(74,137,220,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(218,63,83,1) 0%,rgba(55,188,155,1) 51%,rgba(55,188,155,1) 51%,rgba(74,137,220,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#da3f53', endColorstr='#4a89dc',GradientType=1 ); /* IE6-9 */
-webkit-background-clip: text;
  -webkit-text-fill-color: transparent;/* IE6-9 */
"></span></center>
				  </a>
				  </div>
			</div>
		</div>
		<div class="Chat_Container_Fab">
		<center><h5 style="color:white;font-weight:400;font-size:14px;">Online</h5></center>



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
							<h5 style="display:inline-block;width:auto;height:30px;padding:0px;margin:0px;font-size:12px;font-weight:200;"><?= $FriendName->firstname ?> <?= $FriendName->lastname ?></h5>
						</div>
						<div class="col-md-3">
							<span  style="display:inline-block;width:auto;right:0px;height:30px;position: relative;padding:0px;margin:0px;"class="glyphicon glyphicon-user Chat_Live_Green"></span>
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
					<span onclick="UpPopup('<?=$FriendName->id ?>');" style="cursor: pointer;display:inline;font-size:15px;	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;margin:0px;padding:2px;float:right;"class="glyphicon glyphicon-plus btn-lg Msg_Pop_Ico"></span>
					
					<span onclick="MinPopup('<?=$FriendName->id ?>');" style="cursor: pointer;display:inline;font-size:15px;	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;margin:0px;padding:2px;float:right;"class="glyphicon glyphicon-minus btn-lg Msg_Pop_Ico"></span>
					<span onclick="closePopup('<?=$FriendName->id ?>');" style="cursor: pointer;display:inline;font-size:15px;	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;margin:2px;padding:0px;float:right;"class="glyphicon glyphicon-remove btn-lg Msg_Pop_Ico"></span>
		</div>

<script type='text/javascript'>//<![CDATA[
var scrolled = false;
function updateScroll(){
    if(!scrolled){
        var element = document.getElementById("ChatPopScroll");
        element.scrollTop = element.scrollHeight;
    }
}

$("#ChatPopScroll").on('scroll', function(){
    scrolled=true;
});
</script>
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
   		setInterval(fetchMessages, 500, messageWindow);
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
	   $("#" + ID).fadeOut(200);
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
	<!-- Include our script files -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


</body

</html>
