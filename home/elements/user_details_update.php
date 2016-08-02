
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
// new data



error_reporting(E_ALL);

					$work = $_POST['work'];
					$education = $_POST['education'];
					$location = $_POST['location'];
					$relationship = $_POST['relationship'];
					$phone = $_POST['phone'];
					$website = $_POST['website'];
					$language = $_POST['language'];
					$skill = $_POST['skill'];
					$tumblr = $_POST['tumblr'];
					$instagram = $_POST['instagram'];
					$skype = $_POST['skype'];
					$facebook = $_POST['facebook'];
					$youtube = $_POST['youtube'];
					$twitter = $_POST['twitter'];
					$about = $_POST['about'];
					$user_id = $_SESSION['user']['id'];
					
					echo $work."</br>";
					echo $education."</br>";
					echo $location."</br>";
					echo $relationship."</br>";
					echo $phone."</br>";
					echo $website."</br>";
					echo $language."</br>";
					echo $skill."</br>";
					echo $tumblr."</br>";
					echo $instagram."</br>";
					echo $skype."</br>";
					echo $facebook."</br>";
					echo $youtube."</br>";
					echo $twitter."</br>";
					echo $about."</br>";
					echo $user_id;
	
/*
		"IF EXISTS (SELECT * FROM Table1 WHERE Column1=’SomeValue’)
    UPDATE Table1 SET (…) WHERE Column1=’SomeValue’
ELSE
    INSERT INTO Table1 VALUES (…)"
*/



		

$con=mysqli_connect("localhost","root","pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp","pdo_ret");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform a query, check for error
if (!mysqli_query($con,"INSERT INTO user_details (user_id,work,education,location,relationship,phone,website,language,skill,tumblr,instagram,skype,facebook,youtube,twitter,about) VALUES ('".$user_id."','".$work."','".$education."','".$location."','".$relationship."','".$phone."','".$website."','".$language."','".$skill."','".$tumblr."','".$instagram."','".$skype."','".$facebook."','".$youtube."','".$twitter."','".$about."')
  ON DUPLICATE KEY UPDATE user_id='".$user_id."',work='".$work."',education='".$education."',location='".$location."',relationship='".$relationship."',phone='".$phone."',website='".$website."',language='".$language."',skill='".$skill."',tumblr='".$tumblr."',instagram='".$instagram."',skype='".$skype."',facebook='".$facebook."',youtube='".$youtube."',twitter='".$twitter."',about='".$about."';"))
  {
  echo("Error description: " . mysqli_error($con));
  }

mysqli_close($con);
header('Location: ../usr_settings.php');
?>



