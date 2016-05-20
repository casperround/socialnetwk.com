

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

					$date = date('Y-m-d') ."\n";
					$now = time(); $utc_time = $now - intval(date('Z', $now));
					$time = date('H:i:s', $now);
					$post_id=(uniqid());
		if ($imageFileType == "jpg" || imageFileType == "JPG")
			{ 
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'img';
					$file_format = 'jpg';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/jpg/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation));
					
			}
		elseif ($imageFileType == "png" || $imageFileType == "PNG")
			{ 
					$ip = $_POST['ip'];
					
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'img';
					$file_format = 'png';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/png/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation));
			}
		elseif ($imageFileType == "gif" || $imageFileType == "GIF")
			{ 
					$ip = $_POST['ip'];
					
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'img';
					$file_format = 'gif';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('http://www.socialnetwk.com/media/gif/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation));
			}
			elseif ($imageFileType == "mp3" || $imageFileType == "MP3")
			{ 
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'audio';
					$file_format = 'mp3';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('../media/mp3/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 10;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation));

			}
		elseif ($imageFileType == "mp4" || $imageFileType == "MP4")
			{ 
					$ip = $_POST['ip'];
					
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'video';
					$file_format = 'mp4';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					
					$imageFileType = strtolower($imageFileType);
					$_FILES["fileToUpload"]["name"] = strtolower($_FILES["fileToUpload"]["name"]);
					$target_file = strtolower($target_file,PATHINFO_EXTENSION);
					
					$target_dir = ('http://www.socialnetwk.com/media/mp4/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 10;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation));
			}
		else {
			$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'text';
					$file_format = 'text';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
			$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation));
		}
		
header('Location: index.php');


 
?>