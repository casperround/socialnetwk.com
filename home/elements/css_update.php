
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





					$navbar = $_POST['hat-color'];
					$feed = $_POST['hat-color2'];
					$feed_content = $_POST['hat-color3'];
					$background_theme = $_POST['hat-color4'];
					$usr_id = $_POST['usr_id'];
		
		
		$sql = "INSERT INTO css (navbar,feed,feed_content,background_theme,usr_id) VALUES
					 (:sasa,:sasad,:sasadf,:dfesgredgf,:sasafds)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$navbar,':sasad'=>$feed,':sasadf'=>$feed_content,':dfesgredgf'=>$background_theme,':sasafds'=>$usr_id));
		
		
header('Location: http://www.socialnetwk.com/home/settings.php');

?>