
<?php 
session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])):?>

<?php else: ?>
<style>
	@media (max-width:770px) {
		.Navbar {
			display:none;
		}
	}
	@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
		.Navbar {
			display:none;
		}
	}
</style>			
<?php endif;?>


			<div class="Navbar">
		<div class="row">
			<div class="col-xs-2">
				<img src="../images/socialnetwk.png" class="MainLogo"/>

				<h3 class="Site_Title">ocialnetwk</h3>
				
			</div>
			<div class="col-xs-2" >
				<form action="search.php" class="SearchInput" method="GET" >
				<input  type="text" name="query"  placeholder="Search for anything"/>
				</form>
			</div>
			
			<div class="col-xs-6">

			<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])):?>
				<div class="col-xs-3">
					<a href="index.php"><div class="Navbar_Tabs">
						<h4>Register / Login</h4>
					</div></a>	
				</div>
				<div class="col-xs-3">
					<a href="search-home.php"><div class="Navbar_Tabs">
						<h4>Search</h4>
					</div></a>
				</div>
				<div class="col-xs-3">
					<a href="discover.php"><div class="Navbar_Tabs">
						<h4>Discover</h4>
					</div></a>
				</div>
				<div class="col-xs-3">
					<a href="contact.php"><div class="Navbar_Tabs">
						<h4>Contact / About</h4>
					</div></a>
				</div>
				
			<?php else: ?>
				
			<?php endif;?>
			</div>
		</div>
	</div>