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


<link rel="stylesheet" type="text/css" href="css/navbar.css">



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


require_once('elements/navbar.php');

             
?>


  </head>
	
	
<body>
	<style>
	
	</style>

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
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
.TrailerCont {
	margin-left:auto;
	margin-right:auto;
	margin-top:10%;
	width:38%;
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

</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$trailer_load = $con->query("SELECT * FROM films WHERE post_id='".$id."' ") ?>
	<?php while($trailer = $trailer_load->fetch_object()): ?>


   <div class="TrailerCont">
	<center><h3 style="color:white"><?= $trailer->name ?></h3></center>
<?= $trailer->trailer ?>
   </div>
<?php endwhile; ?>
</body>
	
	
</html>
	