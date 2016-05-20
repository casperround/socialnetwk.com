
<?php 


        
$dbhost   = "localhost";
$dbname   = "pdo_ret";
$dbuser   = "root";
$dbpass   = "nKyGWryQDhZvcpAzDKWQ";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
// new data
 
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
$date = $_POST['date'];
$time = $_POST['time'];


// query
$sql = "INSERT INTO contactus (email,name,message,date,time) VALUES (:sas,:asas,:asafs,:asafsa,:asafsas)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$email,':asas'=>$name,':asafs'=>$message,':asafsa'=>$date,':asafsas'=>$time));
header('Location: ../../message_sent');



?>