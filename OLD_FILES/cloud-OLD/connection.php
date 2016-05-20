<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "nKyGWryQDhZvcpAzDKWQ";
$mysql_database = "pdo_ret";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>


<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "nKyGWryQDhZvcpAzDKWQ";
$mysql_database = "pdo_ret";
$prefix = "";
$conn = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $conn) or die("Could not select database");
?>


<?php
error_reporting(E_ERROR);
$page = $_SERVER['PHP_SELF'];
$sec = "0.5";
$db = new mysqli("localhost", "root", "nKyGWryQDhZvcpAzDKWQ", "pdo_ret");
if($db->connect_error) die("Could not connect to MySQL because of error number ".$db->connect_errno.": ".$db->connect_error);
$users = $db->query("SELECT firstname, id, lastname, video, image, text  FROM users");
?>