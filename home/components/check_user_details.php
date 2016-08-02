<?php
error_reporting(E_ERROR);
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$mysql_database = "pdo_ret";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database 1");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
<?php
error_reporting(E_ERROR);
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

<?php

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM user_details") ?>
	
<table>
	<?php while($feed = $feed_load->fetch_object()): ?>
	
		<?php
			echo "<tr><td>" . $feed->work . "</td><td>" . $feed->user_id . "</td></tr>";  //$row['index'] the index here is a field name
		?>
	<?php endwhile;?>
	</table>	
