<?php
$db_username = 'root';
$db_password = 'pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp';
$db_name = 'pdo_ret';
$db_host = 'localhost';
$items_per_group = 3;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 1");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 2");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
						<?php  
        // redirect to index page if not superuser  
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');  
if (!$con) {  
    die('Could not connect to Socialnetwk DB: ' . mysqli_error($con));  
} ?>
