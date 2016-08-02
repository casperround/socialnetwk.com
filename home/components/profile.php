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
	
	$('#results').load("elements/profileloadcontent.php?id=<?=$UsrID?>", {'group_no':track_load}, function() {track_load++;}); //load first group
	
	$(window).scroll(function() { //detect page scroll
		
		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{
			
			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				$.post('elements/profileloadcontent.php?id=<?=$UsrID?>',{'group_no': track_load}, function(data){
									
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
                    $UsrID = $_GET['id'];

  $user_profile_dat_load = $con->query("SELECT * FROM users WHERE id = ".$UsrID."");?>
<?php while($updl = $user_profile_dat_load->fetch_object()): ?>
  <?php
  $pimageload = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID = $UsrID AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1");?>
<?php while($pil = $pimageload->fetch_object()): ?>


<div class="UserHeaderProfileContainer">
	<div class="row" style="width:100%;position:relative;">
		<div class="col-xs-2">
	<img src="../media/<?= $pil->file_format ?>/<?= $pil->post_id ?><?= $pil->userID ?>.<?= $pil->file_format ?>" class="UserProfileImageProfile"/>
		</div>
		<div class="col-xs-2">
    <h4><?= $updl->firstname ?> <?= $updl->lastname ?></h4>
    <h4><?= $updl->username ?></h4>
		</div>
			<div class="col-xs-2">
				<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>
				
				<?php else: ?>			
					<?php if($_SESSION['user']['id'] === $UsrID ): ?>
							<a href="usr_settings.php" style="background:none;border:none;color:none;">
								<button style="background:none;border:none;color:none;">
									<span class="glyphicon glyphicon-cog"></span>
									<h5>Settings</h5>
								</button>
							</a>
					<?php else: ?>
						<form id="upload" method="post" action="addfriend.php" enctype="multipart/form-data">
							<button style="background:none;border:none;color:none;">
								<span class="glyphicon glyphicon-user"></span>
								<span class="glyphicon glyphicon-plus Small"></span>
								<input style="display:none" value="<?= $UsrID ?>" name="recipient"/>
								<h5>Add Friend</h5>
							</button>
						<form>
					<?php endif;?>
				<?php endif;?>
			</div>
			<div class="col-xs-2">
				<?php if($_SESSION['user']['id'] === $UsrID ): ?>
				
				<?php elseif(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>
					
				<?php else:?>
					<span class="glyphicon glyphicon-comment"></span>
					<h5>Message</h5>
				<?php endif;?>
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
<?php endwhile;?>
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
