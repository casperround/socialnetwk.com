<?php 
		  error_reporting(0);

		  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');

	
$link = mysql_connect("localhost", "root", "nKyGWryQDhZvcpAzDKWQ");
mysql_select_db("pdo_ret", $link);

$result = mysql_query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'", $link);
$num_rows = mysql_num_rows($result);

if ($num_rows == '0') {
    echo "Socialnetwk";
} else {
    echo "($num_rows) Socialnetwk";
}
?>
