<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->
<!-- AUTHOR CASPER JOHN ROUND -->
<!-- THIS CONTENT IS NOT TO BE USED PUBLICLY OR UNDER ANY DOMAIN NOT AUTHORIZED TO HOLD THIS CONTENT -->
<!-- PUBLIC RELEASE OF THIS CONTENT IS FORBIDDEN UNLESS GIVEN AUTHORITY BY THE AUTHOR -->
<!-- DISTRIBUTION OF THIS CONTENT IS ALSO FORBIDDEN -->
<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->



<!DOCTYPE html>
<html lang="en-US">

<head>
	<!-- META -->
	<title>Socialnetwk</title>
    <meta charset="utf-8">
    <meta name="author" content="Casper Round" />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="Socialnetwk is a site which connects you and your friends, allowing you to share any media, and giving you the ability to change the site to how you want it, while connecting any type of social media" />
    <meta name="keywords" content="social,socialnetwk,network,media,community,friends,people,life,skills,pictures,video,films,music,login,register,sign up,artists,facebook,youtube,instagram,twitter,tumblr,google" />
    <meta name="robots" content="noindex,nofollow">
   	<link rel="shortcut icon" type="image/png" href="http://dev.socialnetwk.com/favicon.ico"/>
   	   	   	<link rel="shortcut icon" type="image/png" href="../favicon.ico"/>
	<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="assets/js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="assets/js/jquery.ui.widget.js"></script>
        <script src="assets/js/jquery.iframe-transport.js"></script>
        <script src="assets/js/jquery.fileupload.js"></script>
<link href='http://fonts.googleapis.com/css?family=Khula&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Our main JS file -->
        <script src="assets/js/script.js"></script>
	<!-- STYLESHEET -->
		<script src="js/tabs.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" type='text/css'>
	<!-- FONTS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Bad+Script|Tangerine|Great+Vibes|Cinzel+Decorative|Cinzel&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<style>
	html {
		width:100%;
		height:100%;
	}
	body {
		width:100%;
		background:#333;
		height:100%;
	}
	.UploadContainer {
		background:white;
		position: fixed;
		width:400px;
		padding:20px;
		height:200px;
		-webkit-box-shadow: 0px 0px 25px 10px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 25px 10px rgba(0,0,0,0.75);
box-shadow: 0px 0px 25px 10px rgba(0,0,0,0.75);
	}
	.UploadImg {
		position: relative;
		width:40;
		height:40px;
		z-index: 50;
		border-radius: 3px;
		bottom:50px;
		margin-bottom:20px;
-webkit-box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.75);
	}
	hr {
     color: #333;
     background: #333; 
     width: 100%; 
     height: 1px;
     padding:0px;
     margin-bottom:2px;
     margin-top:2px;
     z-index: 50;
     -webkit-box-shadow: 0px 0px 25px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 25px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 25px 1px rgba(0,0,0,0.75);
}
.FeedInput {
	width:80%;
	top:20px;
	z-index: 48;
	resize:none;
	height: 100px;
	padding:0px;
	border:none;
	padding:2px;
	position: relative;
	
}
span.feed {
	margin-left:5px;
	color:#333;
	font-size: large;
	    -webkit-transition: color 1000ms linear;
    -moz-transition: color 1000ms linear;
    -o-transition: color 1000ms linear;
    -ms-transition: color 1000ms linear;
    transition: color 1000ms linear;
}
span.feed:hover {
	 color: #007cff;
    -webkit-transition: color 1000ms linear;
    -moz-transition: color 1000ms linear;
    -o-transition: color 1000ms linear;
    -ms-transition: color 1000ms linear;
    transition: color 1000ms linear;
}
.feedbtnadd {
	border:0px;
	margin:0px;
	padding:0px;
	background:none;
}

/* Button */

.button {
	border: 1px solid #333333;
	max-width: 100%;
	display: inline-block;
	text-align: center;
	position: relative;
	margin-left:150px;
	padding-bottom:5px;
}

.button .button-text {
	color: #1e1e1e;
	text-transform: uppercase;
	font-size: 10px;
	display: absolute;
}

.button-dark {
	border: 1px solid #fff;
}

.button-dark .button-text {
	color: #fff;
}


.button .button-icon {
	top: 33%;
	color: #333333;
	right: 20px;
	float: right;
	position: absolute;
	opacity: 0;
	-webkit-transition: all 250ms ease-out;
    -moz-transition: all 250ms ease-out;
    -o-transition: all 250ms ease-out;
    transition: all 250ms ease-out;
}


.button-dark .button-icon {
	color: #fff;
}

.button:hover .button-icon {
	opacity: 1;
	-moz-transform: translateX(15px);
	-webkit-transform: translateX(15px);
	transform: translateX(15px);
	-webkit-transition: all 150ms ease-out;
    -moz-transition: all 150ms ease-out;
    -o-transition: all 150ms ease-out;
    transition: all 150ms ease-out;
}

.button .fa {
	color: #1e1e1e;
}

.button-dark .fa {
	color: #fff;
}

.col-centered {
	display: inline-block;
    text-align: center;
}
.col-centered .col-md-1,
.col-centered .col-md-2,
.col-centered .col-md-3,
.col-centered .col-md-4,
.col-centered .col-md-5,
.col-centered .col-md-6,
.col-centered .col-md-7,
.col-centered .col-md-8,
.col-centered .col-md-9,
.col-centered .col-md-10,
.col-centered .col-md-11,
.col-centered .col-md-12 {
	margin: 0 auto;
	float: none;
}

</style>

<body>
	<div class="UploadContainer">
		<div class="hr"><hr/></div>
		<img class="UploadImg" src="http://www.socialnetwk.com/media/jpg/55529055162cf0.jpg" />
		<textarea placeholder="Whats on you're mind?" class="FeedInput" type="text"></textarea>
		
		<div class="hr"><hr/></div>
		<button class="feedbtnadd"><span class="feed glyphicon glyphicon-camera"></span></button>
		<button class="feedbtnadd"><span class="feed glyphicon glyphicon-user"></span></button>
		<button class="feedbtnadd"><span class="feed glyphicon glyphicon-globe"></span></button>
		<button class="button" type="submit" style="width:100px;"><span class="button-text">Post</span><span class="button-icon"><i class="fa fa-arrow-right"></i></span></button>
	</div>
	
</body>

</html>
