 

<?php

    session_start();
    
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
      // redirect to login page
}


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
				$category = $_POST['category'];
				$name = $_POST['name'];
				$about = $_POST['about'];
				$user_id = $_SESSION['user']['id'];
				
				
					$sql = "INSERT INTO pages (category,name,about,user_id) VALUES (:sas,:asas,:asafs,:asafsa)";
							$q = $conn->prepare($sql);
							$q->execute(array(':sas'=>$category,':asas'=>$name,':asafs'=>$about,':asafsa'=>$user_id));
							
							
								$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

header('Location: mypages.php');


 
?>