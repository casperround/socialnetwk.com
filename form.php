<?php

        $email;$comment;$captcha;
        if(isset($_POST['email']))
          $email=$_POST['email'];
        if(isset($_POST['comment']))
          $comment=$_POST['comment'];
        if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf2vQ0TAAAAAGWlM4awy6bEU5LobnhbGWYJuBPS&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
        else
        {
$dbhost   = "localhost";
$dbname   = "pdo_ret";
$dbuser   = "root";
$dbpass   = "nKyGWryQDhZvcpAzDKWQ";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
	
	  $email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$time = $_POST['time'];
$ip = $_POST['ip'];
$datebirth = $_POST['dob-day'].'/'.$_POST['dob-month'].'/'.$_POST['dob-year'];
 
$password = md5($password);
$sql = "INSERT INTO users (email,password,firstname,lastname,country,age,gender,datebirth,ip,date,time) VALUES (:sas,:asas,:asafs,:asafsa,:asafsas,:asafsasa,:asafsasaf,:asafsasafa,:tdrezdgaec,:fyjhtgrtgfd,:egtrvcsefrv)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$email,':asas'=>$password,':asafs'=>$firstname,':asafsa'=>$lastname,':asafsas'=>$country,':asafsasa'=>$age,':asafsasaf'=>$gender,':asafsasafa'=>$datebirth,':tdrezdgaec'=>$date,':fyjhtgrtgfd'=>$time,':egtrvcsefrv'=>$ip));
// header('Location: http://www.socialnetwk.com/thankyou');
        }
?>