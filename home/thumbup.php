
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
$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$author_id = $_POST['author_id'];
					$relation = 'like';
					$thumbup = $_POST['thumb_up'];
					$post_id = $_POST['postid'];
					$format = $_POST['format'];
					$file_format = $_POST['file_format'];
					
			$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,author_id,relation,thumb_up,format,file_format) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:sgraegsfdefw,:efwsadef)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$author_id,':sasdhadkasdas'=>$relation,':sashasdas'=>$thumbup,':sgraegsfdefw'=>$format,':efwsadef'=>$file_format));
	header('Location: http://www.socialnetwk.com/home/index.php');	
		



 
?>