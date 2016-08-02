 

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


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

/*
echo $target_file;

echo $imageFileType;
*/
					$date = date('Y-m-d') ."\n";
					$now = time(); $utc_time = $now - intval(date('Z', $now));
					$time = date('H:i:s', $now);
					$post_id=(uniqid());
					$MediaTxt = $_POST['MediaTxt'];

		if ($imageFileType == "jpg" || $imageFileType == "JPG")
			{ 
			$imageFileType = strtolower($imageFileType);

					$format = 'img';
					$file_format = 'jpg';
					$user_id = $_POST['author_id'];


	
					

					
					$target_dir = ('cloud/'.$user_id.'/image/jpg/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		elseif ($imageFileType == "png" || $imageFileType == "PNG")
			{ 
			$imageFileType = strtolower($imageFileType);

					$format = 'img';
					$file_format = 'png';
					$user_id = $_POST['author_id'];




					
					$target_dir = ('cloud/'.$user_id.'/image/png/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		elseif ($imageFileType == "gif" || $imageFileType == "GIF")
			{ 
			$imageFileType = strtolower($imageFileType);

					$format = 'img';
					$file_format = 'gif';
					$user_id = $_POST['author_id'];




					
					$target_dir = ('cloud/'.$user_id.'/image/gif/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		elseif ($imageFileType == "mp3" || $imageFileType == "MP3" || $imageFileType == "audio")
			{ 
			$imageFileType = strtolower($imageFileType);

					$format = 'audio';
					$file_format = 'mp3';
					$user_id = $_POST['author_id'];



					
					$target_dir = ('cloud/'.$user_id.'/audio/mp3/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		elseif ($imageFileType == "mp4" || $imageFileType == "MP4" || $imageFileType == "video")
			{ 
			
			$imageFileType = strtolower($imageFileType);

					$format = 'video';
					$file_format = 'mp4';
					$user_id = $_POST['author_id'];




					
					$target_dir = ('cloud/'.$user_id.'/video/mp4/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		elseif ($imageFileType == "mov" || $imageFileType == "MOV" || $imageFileType == "video")
			{ 
			
			$imageFileType = strtolower($imageFileType);

					$format = 'video';
					$file_format = 'mov';
					$user_id = $_POST['author_id'];




					
					$target_dir = ('cloud/'.$user_id.'/video/mov/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		elseif ($imageFileType == "wav" || $imageFileType == "WAV" || $imageFileType == "audio")
			{ 
			
			$imageFileType = strtolower($imageFileType);

					$format = 'audio';
					$file_format = 'mp4';
					$user_id = $_POST['author_id'];




					
					$target_dir = ('cloud/'.$user_id.'/audio/wav/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO cloud (format,file_format,user_id) VALUES
					 (:sasa,:sasad,:sasadf)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$format,':sasad'=>$file_format,':sasadf'=>$user_id));
					
			}
		else
			{ 
				echo "File type not found";
			}
			
			

		
header('Location: index.php');


 
?>