
<?php

    session_start();
    
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
      // redirect to login page
}
$dbhost   = "localhost";
$dbname   = "pdo_ret";
$dbuser   = "root";
$dbpass   = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
// new data





					$sender = $_SESSION['user']['id'];
					$recipient = $_POST['recipient'];
					$status = '0';
					echo $sender;
					echo $recipient;
					echo $status;
			$sql = "INSERT INTO friends (sender,recipient,status) VALUES
					 (:skasdh,:lklkgsad,:egsedrg)";
					$q = $conn->prepare($sql);
					$q->execute(array(':skasdh'=>$sender,':lklkgsad'=>$recipient,':egsedrg'=>$status));
		
		
header('Location: index.php');


 
?>