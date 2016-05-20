

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
				$relation = 'profile_picture';
					$author_id = $_POST['UsrID'];
					$post_id=(uniqid());

					$UsrID = $_POST['UsrID'];
					$format = 'img';
					
		if ($imageFileType == "jpg" || imageFileType == "JPG")
			{ 

	
					$file_format = 'jpg';
			
					
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/jpg/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					
					$sql = "INSERT INTO media (userID,format,file_format,relation,post_id,author_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sadgsefrtgad)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$UsrID,':sasad'=>$format,':sasadf'=>$file_format,':sasafds'=>$relation,':sasafda'=>$post_id,':sadgsefrtgad'=>$author_id));
					
			}
		elseif ($imageFileType == "png" || $imageFileType == "PNG")
			{ 
				
					$file_format = 'png';
				
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/png/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					
				$sql = "INSERT INTO media (userID,format,file_format,relation,post_id,author_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sadgsefrtgad)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$UsrID,':sasad'=>$format,':sasadf'=>$file_format,':sasafds'=>$relation,':sasafda'=>$post_id,':sadgsefrtgad'=>$author_id));
					
			}
			elseif ($imageFileType == "gif" || $imageFileType == "GIF")
			{ 
				
					$file_format = 'gif';
					
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/gif/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					
						
				$sql = "INSERT INTO media (userID,format,file_format,relation,post_id,author_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sadgsefrtgad)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$UsrID,':sasad'=>$format,':sasadf'=>$file_format,':sasafds'=>$relation,':sasafda'=>$post_id,':sadgsefrtgad'=>$author_id));
					
			}

			header('Location: http://www.socialnetwk.com/home/settings.php');
