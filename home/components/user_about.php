
  <div class="Content_Container_Feed">

<div class="Feed_Content_Load_Load">
  
  <head>  
<?php
    


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
  $pimageload = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$updl->id." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
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
			
			<div class="col-xs-2">
				<?php if($_SESSION['user']['id'] === $UsrID ): ?>
				
				<?php else: ?>
					<span class="glyphicon glyphicon-comment"></span>
					<h5>Message</h5>
				<?php endif;?>
			</div>
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
<style>
	.User_About_Container {
		  width: 95%;
    min-height: 150px;
    height: auto;
    border-radius: 0px;
    text-align: left;
    padding:10px;
    margin-left: auto;
    margin-right: auto;
	background:#efefef;
    margin-top: 10px;
	}


	
</style>
<div class="User_About_Container">
	<h4>About <?= $updl->firstname ?> <?= $updl->lastname ?></h4>
	
	
  <?php
  $udload = $con->query("SELECT * FROM user_details WHERE user_id = ".$updl->id."");?>
<?php while($udloaded = $udload->fetch_object()): ?>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Work</h5>
				<h5 style="font-weight:200;"><?=$udloaded->work ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Education</h5>
				<h5 style="font-weight:200;"><?=$udloaded->education ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Location</h5>
				<h5 style="font-weight:200;"><?=$udloaded->location ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Relationship Status</h5>
				<h5 style="font-weight:200;"><?=$udloaded->relationship ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Phone Number</h5>
				<h5 style="font-weight:200;"><?=$udloaded->phone ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Website</h5>
				<h5 style="font-weight:200;"><?=$udloaded->website ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Languages</h5>
				<h5 style="font-weight:200;"><?=$udloaded->language ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Skills</h5>
				<h5 style="font-weight:200;"><?=$udloaded->skill ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Email</h5>
				<h5 style="font-weight:200;"><?=$updl->email ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Country</h5>
				<h5 style="font-weight:200;"><?=$updl->country ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Age</h5>
				<h5 style="font-weight:200;"><?=$updl->age ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Gender</h5>
				<h5 style="font-weight:200;"><?=$updl->gender ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Date of birth</h5>
				<h5 style="font-weight:200;"><?=$updl->datebirth ?></h5>
			</div>
			<div class="col-xs-6">
				<h5 style="font-weight:bold;">Username</h5>
				<h5 style="font-weight:200;"><?=$updl->username ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h5 style="font-weight:bold;">About me</h5>
				<h5 style="font-weight:200;"><?=$udloaded->about ?></h5>
			</div>
		</div>
		
		</br>
		<div class="row">
			<div class="col-xs-3">
				<center><a href="<?= $udloaded->instagram ?>"><img src="css/icons/instagram.png" style="height:20px;width:20px;position:relative"/></a></center>
			</div>
			<div class="col-xs-3">
				<center><a href="<?= $udloaded->youtube ?>"><img src="css/icons/youtube.png" style="height:20px;width:20px;position:relative"/></a></center>
			</div>
			<div class="col-xs-3">
				<center><a href="<?= $udloaded->twitter ?>"><img src="css/icons/twitter.png" style="height:20px;width:20px;position:relative"/></a></center>
			</div>
			<div class="col-xs-3">
				<center><a href="<?= $udloaded->facebook ?>"><img src="css/icons/facebook.png" style="height:20px;width:20px;position:relative"/></a></center>
			</div>
		</div>
		
		
	
	<?php endwhile;?>
</div>
<?php endwhile;?>
<?php endwhile;?>





        

    
</div>

  

        
    
    
    



    



  </div>
