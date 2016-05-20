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
<link href="http://www.socialnetwk.com/css/bootstrap.min.css" rel="stylesheet">
<link href="http://www.socialnetwk.com/js/javascript.js" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>





<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="http://www.socialnetwk.com/assets/css/style.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://www.socialnetwk.com/assets/js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="http://www.socialnetwk.com/assets/js/jquery.ui.widget.js"></script>
        <script src="http://www.socialnetwk.com/assets/js/jquery.iframe-transport.js"></script>
        <script src="http://www.socialnetwk.com/assets/js/jquery.fileupload.js"></script>
<link href='http://fonts.googleapis.com/css?family=Khula&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Our main JS file -->
        <script src="http://www.socialnetwk.com/assets/js/script.js"></script>
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


  </head>


  </head>
 
<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://m.socialnetwk.com";
  }
  //-->
</script>

<body>
<style>
	body {
		background:darkgray;
	}
	textarea.form-control {
		background:#efefef;
		color:black;
	}
</style>

<div class="UploadText" >
 <div class="TextForm"  >
   <form id="upload" method="post"  style="height:200px;" class="form-horizontal"action="add-db.php" enctype="multipart/form-data">
	            <div id="drop" style="height:100px;" >

                Drop Here

                <a>Browse</a>
            <fieldset>

                <input type="file" name="fileToUpload" multiple/>
		                                  <textarea class="form-control input-md" style="margin-top:100px;"type="text" placeholder="Name" id="name" name="name"></textarea>
		                                  <textarea class="form-control input-md"type="text" placeholder="Genre" id="genre" name="genre"></textarea>
		                                  <textarea class="form-control input-md"type="text" placeholder="Age" id="age" name="age"></textarea>
		                                  <textarea class="form-control input-md"type="text" placeholder="Length" id="length" name="length"></textarea>
		                                  <textarea class="form-control input-md"type="text" placeholder="Date" id="date" name="date"></textarea>
		                                  <textarea class="form-control input-md"type="text" placeholder="Country" id="country" name="country"></textarea>
		                                  <textarea class="form-control input-md"type="text" placeholder="trailer" id="trailer" name="trailer"></textarea>


            </fieldset>
            </div>

            <ul>
                <!-- The file uploads will be shown here -->
            </ul>
    <button id="updateprofile" value="" name="updateprofile" class="btn btn-success">Post</button>

        </form>



    
    </div>
    <div class="clearfix"></div>
</div>



</body>
</html>