
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
					$id = $_POST['id'];
					$accountname = $_POST['accountname'];
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$password1 = $_POST['password1'];
					$password2 = $_POST['password2'];
					$password1 = md5($password1);
					$password2 = md5($password2);
					$email1 = $_POST['email1'];
					$email2 = $_POST['email1'];
					$country = $_POST['country'];
					$website = $_POST['website'];
					$youtube = $_POST['youtube'];
					$facebook = $_POST['facebook'];
					$twitter = $_POST['twitter'];
					$tumblr = $_POST['tumblr'];
					$otheremail = $_POST['otheremail'];
					$accountvis = $_POST['accountvis'];
					$age = $_POST['age'];
					$gender = $_POST['gender'];
					$dateofbirth = $_POST['dob-day']."/".$_POST['dob-month']."/".$_POST['dob-year'];

/*

					if ($password1 == $password2 && $email1 == $email2) {
*/
					    
					    $stmt = $conn->prepare("UPDATE users SET accountname='$accountname', firstname='$firstname', lastname='$lastname', email='$email1', country='$country', website='$website', youtube='$youtube', facebook='$facebook', twitter='$twitter', tumblr='$tumblr', otheremail='$otheremail', accountvis='$accountvis', age='$age', gender='$gender', datebirth='$dateofbirth' WHERE id='$id'");
			$stmt->execute();
	header('Location: http://www.socialnetwk.com/home/settings.php');
					    
					    
		/*
			    
					} else {
					    echo "Email or Password mismatch!";
					}
*/



					
					
					



				



 
?>