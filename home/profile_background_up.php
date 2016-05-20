

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


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$imageFileType = strtolower($imageFileType);


		if ($imageFileType == "jpg" || imageFileType == "JPG")
			{ 

					$UsrID = $_POST['UsrID'];
					$format = 'img';
					$file_format = 'jpg';
					$relation = 'profile_background';
					$post_id=(uniqid());
					
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/jpg/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = filter_var($MediaTxt, FILTER_SANITIZE_STRING);
					
					$sql = "INSERT INTO media (userID,format,file_format,relation,post_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$UsrID,':sasad'=>$format,':sasadf'=>$file_format,':sasafds'=>$relation,':sasafda'=>$post_id));
					
			}
		elseif ($imageFileType == "png" || $imageFileType == "PNG")
			{ 
					$UsrID = $_POST['UsrID'];
					$format = 'img';
					$file_format = 'png';
					$relation = 'profile_background';
					$post_id=(uniqid());
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/png/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = filter_var($MediaTxt, FILTER_SANITIZE_STRING);
					
						
					$sql = "INSERT INTO media (userID,format,file_format,relation,post_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$UsrID,':sasad'=>$format,':sasadf'=>$file_format,':sasafds'=>$relation,':sasafda'=>$post_id));
					
			}

			header('Location: http://www.socialnetwk.com/home/settings.php');
