

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
					
					$user_id = $_SESSION['user']['id'];
					$id = $_POST['id'];
					$name = $_POST['name'];
					$category = $_POST['category'];
					$about = $_POST['about'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE pages
SET user_id='".$user_id."', name='".$name."', category='".$category."', about='".$about."'
WHERE user_id='".$user_id."' AND id='".$id."'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: ../mypages.php');

?>