<!-- 
- - - - - - - - - - - - - - - - - - - AUTHOR - - - - - - - - - - - - - - - - - - - - - - - -
 ██████╗ █████╗ ███████╗██████╗ ███████╗██████╗     ██████╗  ██████╗ ██╗   ██╗███╗   ██╗██████╗ 
██╔════╝██╔══██╗██╔════╝██╔══██╗██╔════╝██╔══██╗    ██╔══██╗██╔═══██╗██║   ██║████╗  ██║██╔══██╗
██║     ███████║███████╗██████╔╝█████╗  ██████╔╝    ██████╔╝██║   ██║██║   ██║██╔██╗ ██║██║  ██║
██║     ██╔══██║╚════██║██╔═══╝ ██╔══╝  ██╔══██╗    ██╔══██╗██║   ██║██║   ██║██║╚██╗██║██║  ██║
╚██████╗██║  ██║███████║██║     ███████╗██║  ██║    ██║  ██║╚██████╔╝╚██████╔╝██║ ╚████║██████╔╝
 ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝     ╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═══╝╚═════╝ 
- - - - - THIS CONTENT IS NOT TO BE USED PUBLICLY OR UNDER ANY DOMAIN - - - - - - - - - - - 
- - - - - - - - - - -  NOT AUTHORIZED TO HOLD THIS CONTENT - - - - - - - - - - - - - - - - - 
- - - - - - - - - - -  PUBLIC RELEASE OF THIS CONTENT IS - - - - - - - - - - - - - - - - - -
- - - - - - - - - FORBIDDEN UNLESS GIVEN AUTHORITY BY THE AUTHOR - - - - - - - - - - - - - -
- - - - - - - - - DISTRIBUTION OF THIS CONTENT IS ALSO FORBIDDEN - - - - - - - - - - - - - -
- - - - - - - - - - - COPY RIGHT OF Casper John Round 2015 - - - - - - - - - - - - - - - - - - 
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


-->
<!DOCTYPE html>
<html lang="en-US">

<head><?php $site_id ="5739dfe3a5703";?>
	<!-- META -->
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "0.5";
$db = new mysqli("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp", "CMS");

	 $sites_load = $db->query("SELECT * FROM sites WHERE site_id='".$site_id."'");?>
	 
	
	<?php while($sites = $sites_load->fetch_object()): ?>	

	<title>
<?= $sites->site;?>
	</title>
	<?php endwhile; ?>
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
	<!-- SCRIPTS -->
</head>
<style>
a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}
a:hover {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}
</style>
<?php $nav_load = $db->query("SELECT * FROM navbar WHERE site_id='".$site_id."'"); ?>	
<?php while($navbar = $nav_load->fetch_object()): ?>
<style>
	.row {
		background:<?=$navbar->background; ?>;	
		color:<?=$navbar->text_color; ?>;
		text-align:<?=$navbar->text_align; ?>;
	}
	.row h1 {
		font-size:<?=$navbar->font_size; ?>;
	}
	.NavColHover {
		background:col_background;
		transition:background <?=$navbar->col_hover_tras_time; ?>s;
	}
	.NavColHover:hover {
		background:<?=$navbar->col_hover_background; ?>;
		transition:background <?=$navbar->col_hover_tras_time; ?>s;
	}
</style>
<?php endwhile; ?>
<body>
	<div class="Header">
		<div class="row">
			<?php
				 $nav_conts = $db->query("SELECT * FROM navbar_contents WHERE site_id='".$site_id."'");?>	

				<?php while($nav_contents = $nav_conts->fetch_object()): ?>	
					<a href="<?=$nav_contents->url; ?>"><div class="<?=$nav_contents->cols; ?> NavColHover">
						<h1><?=$nav_contents->title; ?></h1>
					</div></a>
				<?php endwhile;?>
		</div>
	</div>
</body>
</html>