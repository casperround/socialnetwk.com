



<?php
$post_id = $_POST['postid'];
$MediaTxt = $_POST['MediaTxt'];
    session_start();
    
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])) {
      // redirect to login page
}
	
 
 $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'nKyGWryQDhZvcpAzDKWQ';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            

            $sql = "UPDATE media SET MediaTxt='".$MediaTxt."' WHERE post_id='".$post_id."'" ;
            mysql_select_db('pdo_ret');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            	header('Location: http://www.socialnetwk.com/home/index.php');	

            mysql_close($conn);
 ?>
 
