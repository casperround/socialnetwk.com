<?php
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

error_reporting(E_ALL);
ini_set('display_errors', '1');


?>


			<?php
	$users = $con->query("SELECT id FROM users");?>
<?php while($id = $users->fetch_object()): ?>

<?php
echo $id->id;
mkdir("cloud/$id->id", 0777);
mkdir("cloud/$id->id/image", 0777);
mkdir("cloud/$id->id/image/jpg", 0777);
mkdir("cloud/$id->id/image/png", 0777);
mkdir("cloud/$id->id/image/tiff", 0777);
mkdir("cloud/$id->id/image/gif", 0777);
mkdir("cloud/$id->id/audo", 0777);
mkdir("cloud/$id->id/audo/mp3", 0777);
mkdir("cloud/$id->id/audo/wav", 0777);
mkdir("cloud/$id->id/video", 0777);
mkdir("cloud/$id->id/video/mp4", 0777);
mkdir("cloud/$id->id/video/mov", 0777);
mkdir("cloud/$id->id/documents", 0777);
mkdir("cloud/$id->id/documents/txt", 0777);
mkdir("cloud/$id->id/documents/doc", 0777);

?>
<?php endwhile?>