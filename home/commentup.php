
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
					$c_id=(uniqid());
					
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$MediaTxt = $_POST['MediaTxt'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$author_id = $_POST['author_id'];
					$relation = 'comment';
					$post_id = $_POST['postid'];
					$format = $_POST['format'];
					$file_format = $_POST['file_format'];
			$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,author_id,relation,format,file_format,c_id,MediaTxt) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sgraegsfdefw,:efwsadef,:frsfdwrgzed,:frared4wesda)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$author_id,':sasdhadkasdas'=>$relation,':sgraegsfdefw'=>$format,':efwsadef'=>$file_format,':frsfdwrgzed'=>$c_id,':frared4wesda'=>$MediaTxt));
		
		
	header('Location: http://www.socialnetwk.com/home/index.php');	


 
?>