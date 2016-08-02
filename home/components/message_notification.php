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

	
$link = mysql_connect("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp");
mysql_select_db("pdo_ret", $link);

$result = mysql_query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'", $link);
$num_rows = mysql_num_rows($result);

$resultt = mysql_query("SELECT * FROM messages WHERE recipient='".$_SESSION['user']['id']."' AND seen='0'", $link);
$num_rowss = mysql_num_rows($resultt);

$total = $num_rowss + $num_rows;
if ($num_rows == '0') {
    echo "<span class='glyphicon glyphicon-bell icon'>";
} else {
    echo "<span class='glyphicon glyphicon-bell icon'>($total)";
}
?>