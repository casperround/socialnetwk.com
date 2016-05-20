<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->
<!-- AUTHOR CASPER JOHN ROUND -->
<!-- THIS CONTENT IS NOT TO BE USED PUBLICLY OR UNDER ANY DOMAIN NOT AUTHORIZED TO HOLD THIS CONTENT -->
<!-- PUBLIC RELEASE OF THIS CONTENT IS FORBIDDEN UNLESS GIVEN AUTHORITY BY THE AUTHOR -->
<!-- DISTRIBUTION OF THIS CONTENT IS ALSO FORBIDDEN -->
<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->



<!DOCTYPE html>
<html lang="en">

  <head>
<title>Socialnetwk</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Social Network" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Author" content="Casper Round" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="http://socialnetwk.com/favicon.png"/>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="js/javascript.js" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>





<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="../socialnetwk.com/assets/css/style.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../socialnetwk.com/assets/js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="../socialnetwk.com/assets/js/jquery.ui.widget.js"></script>
        <script src="../socialnetwk.com/assets/js/jquery.iframe-transport.js"></script>
        <script src="../socialnetwk.com/assets/js/jquery.fileupload.js"></script>
<link href='http://fonts.googleapis.com/css?family=Khula&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Our main JS file -->
        <script src="../socialnetwk.com/assets/js/script.js"></script>
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<style type="text/css">
  .vjs-default-skin { color: #00cfff; }
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #00a5ff }
  .vjs-default-skin .vjs-control-bar,
  .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.7) }
  .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.2333333333333333) }
  .vjs-default-skin .vjs-control-bar { font-size: 60% }
</style>
<script type="text/javascript">
  document.createElement('video');document.createElement('audio');document.createElement('track');
</script>
<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative' rel='stylesheet' type='text/css'>

  <?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

	  
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: index.php');
?>

<?php

require_once('connection.php');



             
?>
<style class="cp-pen-styles">

title {
font-family: 'Khula', sans-serif;
color: #FFF;
}
body::-webkit-scrollbar {
    width: 0.5em;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.0);
}
 
body::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  position: static;
  outline: 1px solid slategrey;
}



body{
	@import url(http://fonts.googleapis.com/css?family=Raleway:100,400,700);
background: #373a3d;
height: 100%;
width: 100%;
  background-size:100% 100%;
  background-attachment: fixed; 
  background-repeat:no-repeat;
font-family: 'Khula', sans-serif;
    padding-bottom: 40px;
}
.Navbar {
	width:100%;
	height:30px;
	background:black;
}
.Content {
	margin-top:100px;
	width:30%;
	height:500px;
	border-radius: 5px;
	-webkit-box-shadow: 0px 0px 43px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 43px 2px rgba(0,0,0,0.75); 
box-shadow: 0px 0px 43px 2px rgba(0,0,0,0.75);
	background: #f5f2f5;
	margin-left:auto;
	margin-right:auto;
}
.File {
	font-size:2em;
	color:#3488ff;
	  transition: color 0.5s ease;

	margin:2%;
}
.File:hover {
	color:#4cc84e;
}
</style>




<div class="Navbar">
	
	
</div>

<div class="Content">
	<center><h3 style="padding-top:10px;">Create file</h3></center>
	<center><a href=""><span class="glyphicon glyphicon-folder-open File"><h6 style="margin:0px;">New Folder</h6></span></a><a href=""><span class="glyphicon glyphicon-file File"><h6 style="margin:0px;">New File</h6></span></a></center>

	<center><h3 style="margin-top:20px;">Your files</h3></center>
	<div class="row" style="width:100%;margin-left:auto;margin-right:auto;">
		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-folder-open File"><h6 style="margin:0px;">Storage</h6></span></a>
  		</div>
  		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-folder-open File"><h6 style="margin:0px;">PHP</h6></span></a>
  		</div>
  		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-file File"><h6 style="margin:0px;">help<span style="color:black">.docx</h6></span></span></a>
  		</div>
  		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-file File"><h6 style="margin:0px;">nav<span style="color:black">.css</h6></span></span></a>
  		</div>
  		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-folder-open File"><h6 style="margin:0px;">Video</h6></span></a>
  		</div>
  		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-folder-open File"><h6 style="margin:0px;">Music</h6></span></a>
  		</div>
  		<div class="col-xs-6 col-md-3">
		 	<a href=""><span class="glyphicon glyphicon-file File"><h6 style="margin:0px;">index<span style="color:black">.php</h6></span></span></a>
  		</div>
  		
	</div>
</div>











































