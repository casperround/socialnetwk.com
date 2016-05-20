
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
			$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
				if (!$con) {
				    die('Could not connect: ' . mysqli_error($con));
				}
$url = $_POST['url'];
$email_select = $con->query("SELECT COUNT(`purl`) AS `url_count` FROM pages WHERE purl='".$url."'");
			$url = $email_select->fetch_object();
			
			if($url->url_count == 0){
			echo 'Url is free';
			}else{
			echo 'Url already exists';

			}

?>