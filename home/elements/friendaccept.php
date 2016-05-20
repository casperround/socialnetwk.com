
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

		
		
		$sql = "UPDATE friends SET status = 1 WHERE recipient='".$_SESSION['user']['id']."' AND sender='".$sender."'";
					$q = $conn->prepare($sql);
					$q->execute();
		

		
header('Location: http://www.socialnetwk.com/home/index.php');

 
?>