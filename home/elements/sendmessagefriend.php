<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost   = "localhost";
$dbname   = "pdo_ret";
$dbuser   = "root";
$dbpass   = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
// new data

$s_firstname = $_POST['s_firstname'];
$s_lastname = $_POST['s_lastname'];
$sender = $_POST['sender'];
$recipient = $_POST['recipient'];
$message = $_POST['message'];
$r_firstname = $_POST['r_firstname'];
$r_lastname = $_POST['r_lastname'];
$ip = $_POST['ip'];
$date = $_POST['date'];
$time = $_POST['time'];

$newmsg = strip_tags($message, '<img><video><audio><iframe>');

$sql = "INSERT INTO message (s_firstname,s_lastname,sender,recipient,message,r_firstname,r_lastname,ip,date,time) VALUES
 (:sas,:asas,:asafs,:asafsa,:asafsas,:asafsasa,:asafsasaf,:asafsasafaf,:asafsasafafsad,:asafsasafafhaps)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$s_firstname,':asas'=>$s_lastname,':asafs'=>$sender,':asafsa'=>$recipient,':asafsas'=>
$newmsg,':asafsasa'=>$r_firstname,':asafsasaf'=>$r_lastname,':asafsasafaf'=>$ip,':asafsasafafsad'=>$date,':asafsasafafhaps'=>$time));
?>

</html>