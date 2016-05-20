<?php

        $email;$comment;$captcha;
        if(isset($_POST['email']))
          $email=$_POST['email'];
        if(isset($_POST['comment']))
          $comment=$_POST['comment'];
        if(isset($_POST['g-recaptcha-response']))
          $captcha=$_POST['g-recaptcha-response'];

        if(!$captcha){
          echo header('Location: http://www.socialnetwk.com/captchacheck.php');
          exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf2vQ0TAAAAAGWlM4awy6bEU5LobnhbGWYJuBPS&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          echo header('Location: http://www.socialnetwk.com/nospamplease.php');
        }
        else
        {
			$dbhost   = "localhost";
			$dbname   = "pdo_ret";
			$dbuser   = "root";
			$dbpass   = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
			 
			// database connection
			$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
			$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
				if (!$con) {
				    die('Could not connect: ' . mysqli_error($con));
				}
				$email1 = $_POST['email'];
				$password = $_POST['password'];
				$passdecrypt = $_POST['password'];
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$country = $_POST['country'];
				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$date = $_POST['date'];
				$time = $_POST['time'];
				$ip = $_POST['ip'];
				$datebirth = $_POST['dob-day'].'/'.$_POST['dob-month'].'/'.$_POST['dob-year'];
				$password1 = md5($password);


			$email_select = $con->query("SELECT COUNT(`email`) AS `email_count` FROM users WHERE email='".$email1."'");
			$email = $email_select->fetch_object();
			
			if($email->email_count == 0){
			$sql = "INSERT INTO users (email,password,firstname,lastname,country,age,gender,datebirth,ip,date,time,passdecrypt) VALUES (:sas,:asas,:asafs,:asafsa,:asafsas,:asafsasa,:asafsasaf,:asafsasafa,:tdrezdgaec,:fyjhtgrtgfd,:egtrvcsefrv,:daesfgseferwg)";
							$q = $conn->prepare($sql);
							$q->execute(array(':sas'=>$email1,':asas'=>$password1,':asafs'=>$firstname,':asafsa'=>$lastname,':asafsas'=>$country,':asafsasa'=>$age,':asafsasaf'=>$gender,':asafsasafa'=>$datebirth,':tdrezdgaec'=>$date,':fyjhtgrtgfd'=>$time,':egtrvcsefrv'=>$ip,':daesfgseferwg'=>$passdecrypt));
							header('Location: http://www.socialnetwk.com/thankyou');
			}else{
			echo header('Location: http://www.socialnetwk.com/userexists.php');

			}

        }
?>