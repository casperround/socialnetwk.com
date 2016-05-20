
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
					$date = date('Y-m-d') ."\n";
					$now = time(); $utc_time = $now - intval(date('Z', $now));
					$time = date('H:i:s', $now);
					$page_id=(uniqid());
					$pname = $_POST['pname'];
					$pcategory = $_POST['pcategory'];
					$pdetails = $_POST['pdetails'];
					$pabout = $_POST['pabout'];
					$country = $_POST['country'];
					$pwebsite = $_POST['pwebsite'];
					$pyoutube = $_POST['pyoutube'];
					$pfacebook = $_POST['pfacebook'];
					$uID = $_POST['uID'];
					$author_id = $_POST['author_id'];
					



			$sql = "INSERT INTO groups (pname,pcategory,pdetails,pabout,country,pwebsite,pyoutube,pfacebook,uID,author_id,page_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:desdgsdawrfw,:frgdafef)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$pname,':sasad'=>$pcategory,':sasadf'=>$pdetails,':sasafds'=>$pabout,':sasafda'=>$country,':sasdfhj'=>$pwebsite,':sasdhadka'=>$pyoutube,':sasdhadkas'=>$pfacebook,':sasdhadkasdas'=>$uID,':desdgsdawrfw'=>$author_id,':frgdafef'=>$page_id));
		
	header('Location: http://www.socialnetwk.com/home/group.php?id='.$page_id.'');	



 
?>