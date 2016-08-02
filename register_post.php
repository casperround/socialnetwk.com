<?php


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
				$username1 = $_POST['username'];
				$date = $_POST['date'];
				$time = $_POST['time'];
				$ip = $_POST['ip'];
				
				
				
				$password1 = md5($password);


			$email_select = $con->query("SELECT COUNT(`email`) AS `email_count` FROM users WHERE email='".$email1."'");
			$email = $email_select->fetch_object();
			
			if($email->email_count == 0){
				
				$username_select = $con->query("SELECT COUNT(`username`) AS `username_count` FROM users WHERE username='".$username1."'");
				$username = $username_select->fetch_object();
				if($username->username_count == 0){
					$sql = "INSERT INTO users (email,password,ip,date,time,passdecrypt,username) VALUES (:sas,:asas,:asafs,:asafsa,:asafsas,:asafsasa,:asafsasaf)";
							$q = $conn->prepare($sql);
							$q->execute(array(':sas'=>$email1,':asas'=>$password1,':asafs'=>$ip,':asafsa'=>$date,':asafsas'=>$time,':asafsasa'=>$passdecrypt,':asafsasaf'=>$username1));
							
							
								$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}



	$users = $con->query("SELECT id FROM users");
while($id = $users->fetch_object()):

// echo $id->id;
mkdir("home/cloud/$id->id", 0777);
mkdir("home/cloud/$id->id/image", 0777);
mkdir("home/cloud/$id->id/image/jpg", 0777);
mkdir("home/cloud/$id->id/image/png", 0777);
mkdir("home/cloud/$id->id/image/tiff", 0777);
mkdir("home/cloud/$id->id/image/gif", 0777);
mkdir("home/cloud/$id->id/audo", 0777);
mkdir("home/cloud/$id->id/audo/mp3", 0777);
mkdir("home/cloud/$id->id/audo/wav", 0777);
mkdir("home/cloud/$id->id/video", 0777);
mkdir("home/cloud/$id->id/video/mp4", 0777);
mkdir("home/cloud/$id->id/video/mov", 0777);
mkdir("home/cloud/$id->id/documents", 0777);
mkdir("home/cloud/$id->id/documents/txt", 0777);
mkdir("home/cloud/$id->id/documents/doc", 0777);
endwhile;

						
							header("Location:https://www.socialnetwk.com/index.php");



				}
				else {
					echo header('Location: https://www.socialnetwk.com/usernameexists.php');
				}
			}else{
			echo header('Location: http://www.socialnetwk.com/emailexists.php');

			}

 
?>