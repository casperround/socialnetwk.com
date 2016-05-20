
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
if(!isset($_SESSION["user"]) && $_SESSION["user"]["id"] === "334" or !is_array($_SESSION["user"]) && $_SESSION["user"]["id"] === "334" or empty($_SESSION["user"] && $_SESSION["user"]["id"] === "334")
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com');

?>
<?php
	require_once('connection.php');

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
</style>
</head>

<body>
	<div class="Navbar">
		<div class="row">
			<div class="col-md-2">
				<h3>Socialnetwk</h3>
			</div>
			<div class="col-md-4">
				<h3>Admin File Browser</h3>
			</div>
			<div class="col-md-6">

			</div>
		</div>
	</div>

	<div class="filemanager">

		<div class="search">
			<input type="search" placeholder="Find a file.." />
		</div>

		<div class="breadcrumbs"></div>

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>

	</div>


	<!-- Include our script files -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/script.js"></script>

</body
</body>

</html>
