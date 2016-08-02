 

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
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'img';
					$file_format = 'jpg';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
					
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
					

					
					$target_dir = ('../media/jpg/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
					
			}
		elseif ($imageFileType == "png" || $imageFileType == "PNG")
			{ 
			$imageFileType = strtolower($imageFileType);
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$formatt = 'img';
					$file_formatt = 'png';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
					
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
					

					
					$target_dir = ('../media/png/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
					
			}
		elseif ($imageFileType == "gif" || $imageFileType == "GIF")
			{ 
			$imageFileType = strtolower($imageFileType);
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$formattt = 'img';
					$file_formattt = 'gif';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
					
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
	
					$target_dir = ('../media/gif/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
					
			}
		elseif ($imageFileType == "mp3" || $imageFileType == "MP3" || $imageFileType == "audio")
			{ 
			$imageFileType = strtolower($imageFileType);
					$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$formatttt = 'audio';
					$file_formatttt = 'mp3';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
					
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
					

					$target_dir = ('../media/mp3/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
					
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
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
					
					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
					
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
					

					
					$target_dir = ('../media/mp4/');
					$target_file = $target_dir . $post_id . $author_id .'.'.pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

					
					$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
					
			}
			
			
		elseif(stripos($MediaTxt, "iframe") !== FALSE) {
			$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'text';
					$file_format = 'iframe';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
									
			

					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  
 $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
										
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
					
			$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
		}
		else{
			
			$ip = $_POST['ip'];
					$UsrFName = $_POST['UsrFName'];
					$UsrLName = $_POST['UsrLName'];
					$UsrID = $_POST['UsrID'];
					$format = 'text';
					$file_format = 'text';
					$MediaTxt = $_POST['MediaTxt'];
					$author_id = $_POST['author_id'];
					$relation = $_POST['relation'];
					$relation_id = $_POST['relation_id'];
					$MediaTxtNw = strip_tags($MediaTxt, '<h1><h2><h3><h4><h5><h6><img><video><audio><iframe><a>');
									
			

					$tag = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $tags);
					
					$tweet = $MediaTxtNw;
					
					preg_match_all("/(#\w+)/", $tweet, $matches);
					
					foreach($matches[0] as $child) {
					  $tags = $child . "\n" ;
					  
 $tagsnew = preg_replace('/#([\w-]+)/i', '$1', $tags);

					$sql = "INSERT INTO hashtags (tag,post_id,uid,time,date) VALUES ('$tagsnew','$post_id','$UsrID','$time','$date');";
										
						if ($conn->query($sql) === TRUE) {
						} else {
						}
					}
					
			$sql = "INSERT INTO media (ip,date,time,firstname,lastname,userID,post_id,format,file_format,MediaTxt,author_id,relation,relation_id) VALUES
					 (:sasa,:sasad,:sasadf,:sasafds,:sasafda,:sasdfhj,:sasdhadka,:sasdhadkas,:sasdhadkasdas,:sashasdas,:aauutthorrid,:rrhjkjahtn,:nlkajlfskj)";
					$q = $conn->prepare($sql);
					$q->execute(array(':sasa'=>$ip,':sasad'=>$date,':sasadf'=>$time,':sasafds'=>$UsrFName,':sasafda'=>$UsrLName,':sasdfhj'=>$UsrID,
					':sasdhadka'=>$post_id,':sasdhadkas'=>$format,':sasdhadkasdas'=>$file_format,':sashasdas'=>$MediaTxtNw,
					':aauutthorrid'=>$author_id,':rrhjkjahtn'=>$relation,':nlkajlfskj'=>$relation_id));
		}
		
header('Location: ' . $_SERVER['HTTP_REFERER']);


 
?>