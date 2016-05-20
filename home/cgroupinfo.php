
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


					$pname = $_POST['pname'];
					$pdetails = $_POST['pdetails'];
					$pabout = $_POST['pabout'];
					$pwebsite = $_POST['pwebsite'];
					$pyoutube = $_POST['pyoutube'];
					$pfacebook = $_POST['pfacebook'];
					$uID = $_POST['uID'];
					$id = $_POST['id'];
					$seshID = $_SESSION['user']['id'];
					



			$stmt = $conn->prepare("UPDATE groups SET pname='$pname', pdetails='$pdetails', pabout='$pabout', pwebsite='$pwebsite', pyoutube='$pyoutube', pfacebook='$pfacebook' WHERE id='$id' AND author_id='$seshID'");
			$stmt->execute();
	header('Location: http://www.socialnetwk.com/home/group.php?id='.$id.'');	



 
?>