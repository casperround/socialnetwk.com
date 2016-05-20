

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

					
					$post_id=(uniqid());
		if ($imageFileType == "jpg" || imageFileType == "JPG")
			{ 

					$format = 'img';
					$file_format = 'jpg';
					$date = $_POST['date'];
					$name = $_POST['name'];
					$genre = $_POST['genre'];
					$age = $_POST['age'];
					$length = $_POST['length'];
					$country = $_POST['country'];
					$trailer = $_POST['trailer'];

					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('media/jpg/');
					$target_file = $target_dir . $post_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 10;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = filter_var($MediaTxt, FILTER_SANITIZE_STRING);
					
					$sql = "INSERT INTO films (date,post_id,format,file_format,name,genre,age,length,country,trailer) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:kasdards)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$date,':sasad'=>$post_id,':sasadf'=>$format,':sasafds'=>$file_format,':sasafda'=>$name,':sasdfhj'=>$genre,
					':sasdhadka'=>$age,':sasdhadkas'=>$length,':sasdhadkasdas'=>$country,':kasdards'=>$trailer));
					header("Location: add");
					
			}
		elseif ($imageFileType == "png" || $imageFileType == "PNG")
			{ 
					
	
					$format = 'img';
					$file_format = 'png';
					$format = 'img';
					$file_format = 'jpg';
					$date = $_POST['date'];
					$name = $_POST['name'];
					$genre = $_POST['genre'];
					$age = $_POST['age'];
					$length = $_POST['length'];
					$country = $_POST['country'];
										$trailer = $_POST['trailer'];

					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('media/png/');
					$target_file = $target_dir . $post_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = filter_var($MediaTxt, FILTER_SANITIZE_STRING);
					
					$sql = "INSERT INTO films (date,post_id,format,file_format,name,genre,age,length,country,trailer) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:kasdards)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$date,':sasad'=>$post_id,':sasadf'=>$format,':sasafds'=>$file_format,':sasafda'=>$name,':sasdfhj'=>$genre,
					':sasdhadka'=>$age,':sasdhadkas'=>$length,':sasdhadkasdas'=>$country,':kasdards'=>$trailer));
										header("Location: add");

			}
elseif ($imageFileType == "mp4" || $imageFileType == "MP4")
			{ 
					
	
					$format = 'img';
					$file_format = 'png';
					$format = 'img';
					$file_format = 'jpg';
					$date = $_POST['date'];
					$name = $_POST['name'];
					$genre = $_POST['genre'];
					$age = $_POST['age'];
					$length = $_POST['length'];
					$country = $_POST['country'];
										$trailer = $_POST['trailer'];

					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('media/mp4/');
					$target_file = $target_dir . $post_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = filter_var($MediaTxt, FILTER_SANITIZE_STRING);
					
					$sql = "INSERT INTO films (date,post_id,format,file_format,name,genre,age,length,country,trailer) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:kasdards)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$date,':sasad'=>$post_id,':sasadf'=>$format,':sasafds'=>$file_format,':sasafda'=>$name,':sasdfhj'=>$genre,
					':sasdhadka'=>$age,':sasdhadkas'=>$length,':sasdhadkasdas'=>$country,':kasdards'=>$trailer));
										header("Location: add");

			}
	

 
 
?>

