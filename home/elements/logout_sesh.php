
		
		 <?php
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com/#login');

?>
<?php
		require_once('../../connection.php');

	$link = mysql_connect("localhost", "root", "nKyGWryQDhZvcpAzDKWQ");
		mysql_select_db("pdo_ret", $link);
		$seshID = $_SESSION["user"]["id"];
		$result = mysql_query("DELETE FROM sessions WHERE usr_id = ".$seshID." ");

				header("location: http://www.socialnetwk.com/home/elements/logout_logout.php");

		?>