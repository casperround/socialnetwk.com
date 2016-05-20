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
 
<script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://m.socialnetwk.com";
  }
  //-->
</script>


<body>


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

	
.Row1{
	overflow-x: hidden;
	    margin-top:20px;
		position: relative;
		height: auto;
		width:100%;
		
}	
.Cont2{
 	height: 120px; width: 250px; overflow: hidden;
  position: relative;
  margin:5px;



}

figure{
  margin: 0;
  position: relative;
  overflow: hidden;
  
}
.row {
		 margin-left:auto;
	 margin-right:auto;
	 width:91.5%;
}
figure img {
	position: relative;
 width:250px;
    height:500px;
    text-align: center;
    vertical-align: middle;
    display: table-cell;
    overflow: hidden;
	background-size: cover;
}
figure.effect-jeff img{
	transition: transform 0.35s;
}



figure.effect-jeff:hover img {
	opacity: 0.55;
	transform: scale3d(1.05,1.05,1);
}

.overlayText{
  position:absolute;
  top:0px;
  bottom:0px;
  left:0px;
  right:0px;
  opacity:0;
  margin-top:0px;
  background:#000000;
  color:#ffffff;
 margin-bottom:50px;
  font-size:25px;
  font-family:sans serif;
  letter-spacing:9px;
height:100%;
  transition:0.3s ease-in;
}

.overlayText:hover{
    opacity: 0.7;
    cursor:pointer;
 }
 .Contents1 {
	 height:auto;
	 width:100%;
	 margin-top:100px;
 }
.Contents2 {
	 height:auto;
	 width:100%;
	 margin-top:0px;
 }
</style>



<div class="Contents1">
	<h3 style="color:white;">Comedy</h3>	
	<div class="row">
			<?php
			$q = intval($_GET['q']);
			$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
			if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
			mysqli_select_db($con,"ajax_demo");
			$comedy_load = $con->query("SELECT * FROM films WHERE genre='comedy' ") ?>
			<?php while($comedy = $comedy_load->fetch_object()): ?>
				<div class="col-xs-6 col-md-3" style="padding:0px;margin:5px;height:120px; width: 250px;">
					<div class="Cont2">
						<figure class="effect-jeff">
							  	<<?= $comedy->format ?> alt=""  src="http://watch.socialnetwk.com/media/<?=$comedy->file_format?>/<?=$comedy->post_id?>.<?=$comedy->file_format?>"  onerror="this.src='default.png'"/>
							    <a href="trailer?id=<?=$comedy->post_id ?>">
								    <h3 class="overlayText">
									    <center><?= $comedy->name ?><br/><center>
									    	<span style="color:#10aee3"class="glyphicon glyphicon-play"></span>
									    </center><h5><?= $comedy->length ?> <?= $comedy->date ?></h5></center>
									</h3>
								</a>
						</figure>
					</div>
				</div>
			<?php endwhile; ?>
	</div>	
</div>

<div class="Contents1">
	<h3 style="color:white;">Kids</h3>	
	<div class="row">
			<?php
			$q = intval($_GET['q']);
			$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
			if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
			mysqli_select_db($con,"ajax_demo");
			$comedy_load = $con->query("SELECT * FROM films WHERE genre='kids' ") ?>
			<?php while($comedy = $comedy_load->fetch_object()): ?>
				<div class="col-xs-6 col-md-3" style="padding:0px;margin:5px;height:120px; width: 250px;">
					<div class="Cont2">
						<figure class="effect-jeff">
							  	<<?= $comedy->format ?> alt=""  src="http://watch.socialnetwk.com/media/<?=$comedy->file_format?>/<?=$comedy->post_id?>.<?=$comedy->file_format?>"  onerror="this.src='default.png'"/>
							    <a href="trailer?id=<?=$comedy->post_id ?>">
								    <h3 class="overlayText">
									    <center><?= $comedy->name ?><br/><center>
									    	<span style="color:#10aee3"class="glyphicon glyphicon-play"></span>
									    </center><h5><?= $comedy->length ?> <?= $comedy->date ?></h5></center>
									</h3>
								</a>
						</figure>
					</div>
				</div>
			<?php endwhile; ?>
	</div>	
</div> 
<div class="Contents1">
	<h3 style="color:white;">Horror</h3>	
	<div class="row">
			<?php
			$q = intval($_GET['q']);
			$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
			if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
			mysqli_select_db($con,"ajax_demo");
			$comedy_load = $con->query("SELECT * FROM films WHERE genre='horror' ") ?>
			<?php while($comedy = $comedy_load->fetch_object()): ?>
				<div class="col-xs-6 col-md-3" style="padding:0px;margin:5px;height:120px; width: 250px;">
					<div class="Cont2">
						<figure class="effect-jeff">
							  	<<?= $comedy->format ?> alt=""  src="http://watch.socialnetwk.com/media/<?=$comedy->file_format?>/<?=$comedy->post_id?>.<?=$comedy->file_format?>"  onerror="this.src='default.png'"/>
							    <a href="trailer?id=<?=$comedy->post_id ?>">
								    <h3 class="overlayText">
									    <center><?= $comedy->name ?><br/><center>
									    	<span style="color:#10aee3"class="glyphicon glyphicon-play"></span>
									    </center><h5><?= $comedy->length ?> <?= $comedy->date ?></h5></center>
									</h3>
								</a>
						</figure>
					</div>
				</div>
			<?php endwhile; ?>
	</div>	
</div>
<div class="Contents1">
	<h3 style="color:white;">Thriller</h3>	
	<div class="row">
			<?php
			$q = intval($_GET['q']);
			$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
			if (!$con) { die('Could not connect: ' . mysqli_error($con)); }
			mysqli_select_db($con,"ajax_demo");
			$comedy_load = $con->query("SELECT * FROM films WHERE genre='thriller' ") ?>
			<?php while($comedy = $comedy_load->fetch_object()): ?>
				<div class="col-xs-6 col-md-3" style="padding:0px;margin:5px;height:120px; width: 250px;">
					<div class="Cont2">
						<figure class="effect-jeff">
							  	<<?= $comedy->format ?> alt=""  src="http://watch.socialnetwk.com/media/<?=$comedy->file_format?>/<?=$comedy->post_id?>.<?=$comedy->file_format?>"  onerror="this.src='default.png'"/>
							    <a href="trailer?id=<?=$comedy->post_id ?>">
								    <h3 class="overlayText">
									    <center><?= $comedy->name ?><br/><center>
									    	<span style="color:#10aee3"class="glyphicon glyphicon-play"></span>
									    </center><h5><?= $comedy->length ?> <?= $comedy->date ?></h5></center>
									</h3>
								</a>
						</figure>
					</div>
				</div>
			<?php endwhile; ?>
	</div>	
</div>
</body>
</html>

</body>

</html>
