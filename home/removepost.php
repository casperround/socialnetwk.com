

<?php
    session_start();
    
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
  }

$servername = "94.193.231.24";
$username = "root";
$password = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
$dbname = "pdo_ret";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$uid = $_POST['id'];
$post_id = $_POST['postid'];
// sql to delete a record
$sql = "DELETE FROM media WHERE post_id='".$post_id."' AND userID='".$uid."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header('Location: index.php');

?>