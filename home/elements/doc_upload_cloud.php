
<?php
$name = $_POST['name'];
$document = $_POST['document'];
$user_id = $_POST['user_id'];

$myfile = fopen('../cloud/'.$user_id.'/documents/'.$name.'.html', 'w') or die("Unable to open file!");
fwrite($myfile, $document);
fclose($myfile);


header('Location: ../cloud.php#cloud%2F'.$user_id.'%2Fdocuments');

?>