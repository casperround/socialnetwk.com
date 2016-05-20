
<?php

    session_start();
    
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
      // redirect to login page
}
$dbhost   = "localhost";
$dbname   = "pdo_ret";
$dbuser   = "root";
$dbpass   = "nKyGWryQDhZvcpAzDKWQ";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
// new data





					$sender = $_POST['sender'];
					$recipient = $_POST['recipient'];
					$status = '0';

			$sql = "INSERT INTO friends (sender,recipient,status) VALUES
					 (:skasdh,:lklkgsad,:egsedrg)";
					$q = $conn->prepare($sql);
					$q->execute(array(':skasdh'=>$sender,':lklkgsad'=>$recipient,':egsedrg'=>$status));
		
		
header('Location: settings.php');


 
?>