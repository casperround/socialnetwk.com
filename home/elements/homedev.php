
	    <?php include 'elements/chat.php'; ?>





  <?php
// 	  	require_once('elements/chat.php');

	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');


$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
<style>
	.Post_Feed {
		background:#525252;
		width:650px;
		height:200px;
		padding:10px;
		position: static;
		margin-bottom:100px;
	}
	.Usr_Pst_Fd_Ico {
		height:50px;
		width:50px;
		margin:0px;
		padding:0px;
		position: relative;
		
	}
	.FeedTopPt {
		width:100%;
		margin:0px;
		padding:0px; 
		height:100px;
	}
	.FeedPostTxtFieldset {
		width:80%;
		height:90%;
		margin:0px;
		top:0px;
		padding:0px;
		margin-bottom:10px;
	}
	.RowFtt {
		bottom:0px;
		width:100%;
		margin-top:40px;
		padding:10px;
		margin-bottom:0px;
		position: relative;
		height:50px;
	}
	
	
	
	
	.MsgInputHidden {
		display:none;
	}
	
</style>
<?php
	$UsrID = $_SESSION['user']['id'];
	$profile_image = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$UsrID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<div class="Post_Feed">
	<div class="FeedTopPt">
		
		<div class="Usr_Pst_Fd_Ico">
			
			<?php while($pimage = $profile_image->fetch_object()): ?>
			<img style="border-radius: 3px;padding:0px;margin:0px;"src="http://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>">
			<?php endwhile; ?>

		</div> 
	   <form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/feedup.php" enctype="multipart/form-data">
            <fieldset>
	            		                                  <textarea style="width:80%;height:50px;position:relative;padding:0px;margin:0px;" type="text" id="MediaTxt" name="MediaTxt"></textarea>

            </div>

                	<input type="text" id="UsrFName" name="UsrFName" class="MsgInputHidden" value="<?= $_SESSION["user"]["firstname"] ?>" />
					  		   <input type="text" id="UsrLName" name="UsrLName" class="MsgInputHidden" value="<?= $_SESSION["user"]["lastname"] ?>" />
					  		   <input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
					  		   <input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
								<input type="text" id="relation" name="relation" class="MsgInputHidden" value="feed" />
					  			<input type="text" id="author_id" name="author_id" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />

<div class="RowFtt">
<div class="row" style="padding:0px;margin:0px;width:100%;">
            <div class="col-xs-2 col-xs-offset-1">
	            
	            <span style="width:100%;color:white;" class="btn btn-outline btn-default btn-sm  btn-file">
    <span style="font-size:large;color:#333333" class="glyphicon glyphicon-file"></span><span style="font-size:xx-small;color:#333333" class="glyphicon glyphicon-plus"></span><input type="file" name="fileToUpload" multiple />
</span>
            </fieldset>
	            
            </div>
            <div class="col-xs-2">
	            
	             <div class="ShareBtn">
					<a href=""><span style="font-size:large;color:white" class="glyphicon glyphicon-user"></span></a>

					<a href=""><span style="font-size:xx-small;color:white" class="glyphicon glyphicon-plus"></span></a>

				</div>
	            
	            
            </div>
            <div class="col-xs-2">
	            <div class="ShareBtn social">
					<a href=""><span style="font-size:large;color:white" class="glyphicon glyphicon-globe"></span></a>
				</div>
	            
            </div>
            <div class="col-xs-2">
	            
 <div class="ShareBtn">
					<a href=""><span style="font-size:large;color:white" class="glyphicon glyphicon-map-marker"></span></a>

				</div>
	            
            </div>
            <div class="col-xs-2">
	            
	            
	            				  <button id="updateprofile" style="background:#3cff84;width:70%;border-radius:10px;padding:0px;border:0px;" value="" name="updateprofile" class="ShareBtn social">Post</button>
            </form>
            </div>
            </div>
            </div>
            </div>
    
   <script>
function loadlink(){
    $('#feed_main_load').load('elements/feed_load.php',function () {
         $(this).wrap();
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 1000);
</script>
<div id="feed_main_load">


</div>







  
  
  
  
  
  
  
  

  
  
  
  

