
<?php 


        
$dbhost   = "localhost";
$dbname   = "pdo_ret";
$dbuser   = "root";
$dbpass   = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
// new data
 
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$date = date('Y-m-d') ."\n";
					$now = time(); $utc_time = $now - intval(date('Z', $now));
					$time = date('H:i:s', $now);



// query
$sql = "INSERT INTO contactus (email,name,message,date,time) VALUES (:sas,:asas,:asafs,:asafsa,:asafsas)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$email,':asas'=>$name,':asafs'=>$message,':asafsa'=>$date,':asafsas'=>$time));
header('Location: ../message_sent.php');



?>