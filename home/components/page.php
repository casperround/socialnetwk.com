<?php
                    $UsrID = $_GET['id'];
include("elements/config.php");

$get_total_rows = 0;
$results = $mysqli->query("SELECT COUNT(*) FROM media");

if($results){
	$get_total_rows = $results->fetch_row(); 
}
//break total records into pages
$total_groups= ceil($get_total_rows[0]/$items_per_group);	
?>

<script type="text/javascript">
$(document).ready(function() {
	var track_load = 0; //total loaded record group(s)
	var loading  = false; //to prevents multipal ajax loads
	var total_groups = <?=$total_groups;?>; //total record group(s)
	
	$('#results').load("elements/pageloadcontent.php?id=<?=$UsrID?>", {'group_no':track_load}, function() {track_load++;}); //load first group
	
	$(window).scroll(function() { //detect page scroll
		
		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{
			
			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				$.post('elements/pageloadcontent.php?id=<?=$UsrID?>',{'group_no': track_load}, function(data){
									
					$("#results").append(data); //append received data into the element

					//hide loading image
					$('.animation_image').hide(); //hide loading image once data is received
					
					track_load++; //loaded group increment
					loading = false; 
				
				}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
					
					alert(thrownError); //alert with HTTP error
					$('.animation_image').hide(); //hide loading image
					loading = false;
				
				});
				
			}
		}
	});
});
</script>



  <div class="Content_Container_Feed">

<div class="Feed_Content_Load_Load">
  
  <head>  
<?php
    
    ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: ../index.php');


$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>



      <?php
                    $page_id = $_GET['id'];

  $user_profile_dat_load = $con->query("SELECT * FROM pages WHERE id = ".$page_id."");?>
<?php while($updl = $user_profile_dat_load->fetch_object()): ?>


<div class="UserHeaderProfileContainer">
	<div class="row" style="width:100%;position:relative;">
		<div class="col-xs-2">
	<img src="../media/<?= $pil->file_format ?>/<?= $pil->post_id ?><?= $pil->userID ?>.<?= $pil->file_format ?>" class="UserProfileImageProfile"/>
		</div>
		<div class="col-xs-2">
    <h4><?= $updl->name ?></h4>
		</div>
			<div class="col-xs-2">
							
							
					<?php if($_SESSION['user']['id'] === $updl->user_id ): ?>
							<a href="page_edit.php?id=<?=$page_id?>" style="background:none;border:none;color:none;">
								<button style="background:none;border:none;color:none;">
									<span class="glyphicon glyphicon-cog"></span>
									<h5>Edit</h5>
								</button>
							</a>
					<?php else: ?>
					
				<?php endif;?>
				
			</div>
			<div class="col-xs-2">
				
					
					<span class="glyphicon glyphicon-comment"></span>
					<h5>Message</h5>
			</div>
			
		
		<a href="user_gallery.php?id=<?=$UsrID?>"><div class="col-xs-2">
			<span class="glyphicon glyphicon-th"></span>
			<h5>Gallery</h5>
		</div></a>
		<a href="user_about.php?id=<?=$UsrID?>"><div class="col-xs-2">
			<span class="glyphicon glyphicon-bookmark"></span>
			<h5>About</h5>
		</div></a>
	</div>

</div>

<style>
.SidePageContainer {
	width:100%;
	padding:5px;
	height:200px;
	background:#efefef;
	box-shadow: 0 5px 8px rgba(0,0,0,.4);
}

</style>
<div class="row" style="margin-left:85px;width:90%">
<div class="col-xs-3">
<div class="SidePageContainer">
<h5><?= $updl->about ?></h5>

</div>
</div>
<div class="col-xs-9">

<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
		 <script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 
<style>
#upload_button {
    display: none;
    background:none;
    border:none;
    color:black;
    font-size: 15px;
    border:0px;
    border-radius: 0px;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);}
.Post_Container button {
			text-align: center;
		border:0px;
		height:20px;
		width:100px;
		border-radius: 5px;
		background:#4FC1E9;
		float:bottom;
		bottom:0px;
		 -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		color:white;
		transition:background 0.2s;
	}
	.Post_Container button:hover {
		background:#3BAFDA;
		transition:background 0.2s;
	}
</style>


<script type='text/javascript'>//<![CDATA[
window.onload=function(){
var button = document.getElementById('upload_button');
var input  = document.getElementById('upload_input');

// Making input invisible, but leaving shown fo graceful degradation
input.style.display = 'none';
button.style.display = 'initial';

button.addEventListener('click', function (e) {
    e.preventDefault();
    
    input.click();
});

input.addEventListener('change', function () {
   button.innerText = this.value; 
});
}//]]> 

</script>

 

 <?php
                    $page_id = $_GET['id'];

  $user_profile_dat_load = $con->query("SELECT * FROM pages WHERE id = ".$page_id."");?>
<?php while($updl = $user_profile_dat_load->fetch_object()): ?>




		<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])):?>
		
		<?php elseif($_SESSION['user']['id'] == $updl->user_id):?>
		<div class="Post_Container" style="width:100%;margin:0px;">
										<form id="upload" method="post"  class="form-horizontal" action="elements/feedup.php" enctype="multipart/form-data">

			<center><textarea name="MediaTxt"placeholder="Post something."></textarea></center>
			<div class="row">
				<div class="col-md-6">
					 <p><button id="upload_button"><span class="glyphicon glyphicon-file"></span></button></p>
					 <p><input  id="upload_input"type="file"name="fileToUpload"/></p>
			  					  	<input type="text" id="UsrID" name="UsrID" style="display:none;" value="<?= $_SESSION["user"]["id"] ?>" />
			  					  	<input type="text" id="ip" name="ip" style="display:none;" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
			  					  	<input type="text" id="relation" name="relation" style="display:none;" value="page" />
			  					  	<input type="text" id="relation_id" name="relation_id" style="display:none;" value="<?= $_GET['id'] ?>" />
			  					  	<input type="text" id="author_id" name="author_id" style="display:none;" value="page" />
				</div>
				<div class="col-md-6">
					<center><button name="Update" id="update" value="Update">Post</button></center>
				</div>
			</form>
			</div>
		</div>
		<?php else:?>
		<div class="Post_Container" style="width:100%;margin:0px;">
										<form id="upload" method="post"  class="form-horizontal" action="elements/feedup.php" enctype="multipart/form-data">

			<center><textarea name="MediaTxt"placeholder="Post something."></textarea></center>
			<div class="row">
				<div class="col-md-6">
					 <p><button id="upload_button"><span class="glyphicon glyphicon-file"></span></button></p>
					 <p><input  id="upload_input"type="file"name="fileToUpload"/></p>
					 <input type="text" id="UsrLName" name="UsrLName" style="display:none;" value="<?= $_SESSION["user"]["lastname"] ?>" />
			  					  	<input type="text" id="UsrID" name="UsrID" style="display:none;" value="<?= $_SESSION["user"]["id"] ?>" />
			  					  	<input type="text" id="ip" name="ip" style="display:none;" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
			  					  	<input type="text" id="relation" name="relation" style="display:none;" value="page" />
			  					  	<input type="text" id="relation_id" name="relation_id" style="display:none;" value="<?= $_GET['id'] ?>" />
			  					  	<input type="text" id="author_id" name="author_id" style="display:none;" value="<?= $_SESSION["user"]["id"] ?>" />
				</div>
				<div class="col-md-6">
					<center><button name="Update" id="update" value="Update">Post</button></center>
				</div>
			</form>
			</div>
		</div>
		<?php endif;?>
<?php endwhile;?>

</div>
</div>
<?php endwhile;?>





        
     <ol id="results">
			</ol>
				<div class="animation_image" style="display:none" align="center">
					<div class="loader">
					  <div class="loader__box loader__box--1"></div>
					  <div class="loader__box loader__box--2"></div>
					</div>
				</div>
           

    
</div>

  

        
    
    
    



    



  </div>
