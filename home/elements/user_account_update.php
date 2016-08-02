

<?php
    session_start();
    
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
      // redirect to login page
}
	require_once('../connection.php');

$servername = "localhost";
$username = "root";
$password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$dbname = "pdo_ret";
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$email = $_POST['email'];
					$passwordd = $_POST['password'];
					$country = $_POST['country'];
					$age = $_POST['age'];
					$gender = $_POST['gender'];
					$theme = $_POST['theme'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE users
SET firstname='".$firstname."', lastname='".$lastname."', email='".$email."', password='".$passwordd."', country='".$country."', age='".$age."', gender='".$gender."', theme='".$theme."'
WHERE id='".$_SESSION['user']['id']."'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: ../usr_settings.php');

?>