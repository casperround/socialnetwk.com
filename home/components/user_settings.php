<style>
section {
  float: left;
  min-width: 150px;
  width: 33.33%;
  padding: 25px 0;
  min-height: 100px;
}

/*=====================*/
.checkbox {
  position: relative;
  display: inline-block;
}
.checkbox:after, .checkbox:before {
  font-family: FontAwesome;
  -webkit-font-feature-settings: normal;
          font-feature-settings: normal;
  -webkit-font-kerning: auto;
          font-kerning: auto;
  -webkit-font-language-override: normal;
          font-language-override: normal;
  font-stretch: normal;
  font-style: normal;
  font-synthesis: weight style;
  font-variant: normal;
  font-weight: normal;
  text-rendering: auto;
}
.checkbox label {
  width: 90px;
  height: 42px;
  background: #ccc;
  position: relative;
  display: inline-block;
  border-radius: 46px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox label:after {
  content: '';
  position: absolute;
  width: 50px;
  height: 50px;
  border-radius: 100%;
  left: 0;
  top: -5px;
  z-index: 2;
  background: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}
.checkbox input:hover + label:after {
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2), 0 3px 8px 0 rgba(0, 0, 0, 0.15);
}
.checkbox input:checked + label:after {
  left: 40px;
}


.model-13 .checkbox:after {
  content: 'OFF';
  font-family: Arial;
  position: absolute;
  color: #666;
  top: 12px;
  right: 15px;
}
.model-13 .checkbox label {
  background: none;
  border: 3px solid #777;
  height: 40px;
  border-radius: 20px;
}
.model-13 .checkbox label:after {
  content: 'ON';
  font-family: Arial;
  color: #fff;
  line-height: 28px;
  text-indent: 100px;
  background: #777;
  overflow: hidden;
  box-shadow: none;
  border-radius: 14px;
  -webkit-transform: translateX(-50px);
  transform: translateX(-50px);
  -moz-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  -o-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  -webkit-transition: all 0.4s, width 0.2s linear, text-indent 0.4s linear;
  -webkit-transition-delay: 0.2s, 0s, 0s;
  -webkit-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  top: 3px;
  left: auto;
  right: 2px;
  width: 28px;
  height: 28px;
}
.model-13 .checkbox input:checked + label {
  border-color: #329043;
}
.model-13 .checkbox input:checked + label:after {
  background: #3fb454;
  left: auto;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -moz-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  -o-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  -webkit-transition: all 0.4s, width 0.2s linear, text-indent 0.3s linear;
  -webkit-transition-delay: 0s, 0.4s, 0.4s;
  -webkit-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  width: 80px;
  text-indent: 0;
}
</style>
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
header('Location: ../https://www.socialnetwk.com');


$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>


      <?php
                    $UsrID = $_SESSION['user']['id'];

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
		</div>
		<div class="col-xs-2">
			<?php if($_SESSION['user']['id'] === $UsrID ): ?>
			
			<?php else: ?>
			<span class="glyphicon glyphicon-comment"></span>
			<h5>Message</h5>
			<?php endif;?>
		</div>
		<a href="user_gallery.php?id=<?=$UsrID?>"><div class="col-xs-2">
			<span class="glyphicon glyphicon-th"></span>
			<h5>Gallery</h5>
		</div></a>
		<div class="col-xs-2">
			<span class="glyphicon glyphicon-bookmark"></span>
			<h5>About</h5>
		</div>
	</div>

</div>
<?php endwhile;?>
<?php endwhile;?>


<style>


	.ProfileImageSettings {
		width:40px;
		height:40px;
		display:inline-block;
	}
	.WallPhotoSettings {
		width:80%;
		height:70px;
		  background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
background-position:center;
	}
	#upload_inputt {
		display:inline-block;
	}
		.UsrSettingsBtn {
		text-align: center;
		border:0px;
		height:20px;
		width:100px;
		border-radius: 5px;
		
		background:#4FC1E9;
		bottom:0px;
		margin-top:20px;
		 -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		color:white;
		transition:background 0.2s;
	}
	.user_Mobile_Settings {
			display:none;
		}
.UsrSettingsBtn:hover {
		background:#3BAFDA;
		transition:background 0.2s;
	}
	@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
		.user_Desktop_Settings {
			display:none;
		}
		.user_Mobile_Settings {
			display:block;
		}
	}
	
	@media (max-width:770px) {
		.user_Desktop_Settings {
			display:none;
		}
		.user_Mobile_Settings {
			display:block;
		}
	}

	.big {
  font-size: 1.2em;
}

.small {
  font-size: .7em;
}

.square {
  width: .7em;
  height: .7em;
  margin: .5em;
  display: inline-block;
}

/* Custom dropdown */
.custom-dropdown {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 10px; /* demo only */
}

.custom-dropdown select {
  background-color: rgb(44, 62, 80);
  color: #fff;
  font-size: inherit;
  padding: .5em;
  padding-right: 2.5em;	
  border: 0;
  margin: 0;
  border-radius: 3px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: button; /* hide default arrow in chrome OSX */
}

.custom-dropdown::before,
.custom-dropdown::after {
  content: "";
  position: absolute;
  pointer-events: none;
}

.custom-dropdown::after { /*  Custom dropdown arrow */
  content: "\25BC";
  height: 1em;
  font-size: .625em;
  line-height: 1;
  right: 1.2em;
  top: 50%;
  margin-top: -.5em;
}

.custom-dropdown::before { /*  Custom dropdown arrow cover */
  width: 2em;
  right: 0;
  top: 0;
  bottom: 0;
  border-radius: 0 3px 3px 0;
}

.custom-dropdown select[disabled] {
  color: rgba(0,0,0,.3);
}

.custom-dropdown select[disabled]::after {
  color: rgba(0,0,0,.1);
}

.custom-dropdown::before {
  background-color: rgba(0,0,0,.15);
}

.custom-dropdown::after {
  color: rgba(0,0,0,.4);
}
</style>


<div class="User_Settings_Container" >
	<center><h5>Account Settings</h5></center>
	<div class="row">
		<div class="user_Desktop_Settings">
			<div class="col-xs-6">
				<div class="SettingsUsrInput">
					<div class="row">
						<div class="col-xs-6">
							<h6>General Details</h6>


						 <?php
	  $user_data_load = $con->query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");?>
	<?php while($userloaded = $user_data_load->fetch_object()): ?>	
							<form id="upload" method="post" action="elements/user_account_update.php" enctype="multipart/form-data">
							<input placeholder="Firstname" name="firstname" type="text" value="<?= $userloaded->firstname?>"/></br>
							<input placeholder="Lastname" name="lastname" type="text" value="<?= $userloaded->lastname?>"/></br>
							<input placeholder="Email" name="email" type="email" value="<?= $userloaded->email?>"/></br>
							<input placeholder="Repeat Email" name="email" type="email" value="<?= $userloaded->email?>"/></br>
							<input placeholder="Password" name="password" type="password" value="<?= $userloaded->password?>"/></br>
							<input placeholder="Repeat Password" name="password" type="password"value="<?= $userloaded->password?>"/></br>
							<input placeholder="Country" name="country"  type="text"value="<?= $userloaded->country?>"/></br>
							<input placeholder="Age" name="age"  type="text"value="<?= $userloaded->age?>"/></br>
							<input placeholder="Gender" name="gender" type="text" value="<?= $userloaded->gender?>"/></br>
							 <span class="custom-dropdown">
							<select id="themes" name="theme">>
							<option value="<?= $userloaded->theme?>"><?= $userloaded->theme?></option>
							  <option value="css/theme_dark.css">Dark</option>
							  <option value="css/theme_default.css">Default</option>
							  <option value="css/theme_grass.css">Grass</option>
							  <option value="css/theme_aqua.css">Aqua</option>
							</select></span>
					<?php endwhile;?>
						</div>
						<div class="col-xs-6">
										<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
						
						</div>
						</form>
								<script>
								$('#themes').change(function(){
								    $("#stylesheet").attr({href : $('#themes').find(":selected").val()});
								});
							</script>
					</div>
				</div>
			</div>
			<div class="col-xs-6" style="height:350px;">
				
				<h6>Change Profile Picture</h6>
				  <?php
	  $pimageload = $con->query("SELECT id, post_id, relation, userID, file_format
	FROM media 
	WHERE userID = ".$_SESSION['user']['id']." 
	    AND relation = 'profile_picture' 
	UNION ALL 
	SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
	ORDER BY id DESC LIMIT 1");?>
	<?php while($pil = $pimageload->fetch_object()): ?>
				<img class="ProfileImageSettings" src="../media/<?= $pil->file_format ?>/<?= $pil->post_id ?><?= $pil->userID ?>.<?= $pil->file_format ?>"/></br>
				<input id="upload_inputt"type="file" name="fileToUpload"/>
			<?php endwhile;?>
				<h6>Change Wall Photo</h6>
				<img class="WallPhotoSettings" src="https://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg"/>
				<input id="upload_inputt"type="file" name="fileToUpload"/>
				<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
			</div> 
		</div>
		<div class="user_Mobile_Settings">
			<div class="row">
				<div class="col-xs-12">
					<div class="SettingsUsrInput" style="width:90%;">
								<h6>General Details</h6>
															<form id="upload" method="post" action="elements/user_account_update.php" enctype="multipart/form-data">

								<center><input placeholder="Firstname" name="firstname" type="text" value="<?= $userloaded->firstname?>"/></br>
							<input placeholder="Lastname" name="lastname" type="text" value="<?= $userloaded->lastname?>"/></br>
							<input placeholder="Email" name="email" type="email" value="<?= $userloaded->email?>"/></br>
							<input placeholder="Repeat Email" name="email" type="email" value="<?= $userloaded->email?>"/></br>
							<input placeholder="Password" name="password" type="password" value="<?= $userloaded->password?>"/></br>
							<input placeholder="Repeat Password" name="password" type="password"value="<?= $userloaded->password?>"/></br>
							<input placeholder="Country" name="country"  type="text"value="<?= $userloaded->country?>"/></br>
							<input placeholder="Age" name="age"  type="text"value="<?= $userloaded->age?>"/></br>
							<input placeholder="Gender" name="gender" type="text" value="<?= $userloaded->gender?>"/></br>
							 <span class="custom-dropdown">
							<select id="themes" name="theme">>
							<option value="<?= $userloaded->theme?>"><?= $userloaded->theme?></option>
							  <option value="css/theme_dark.css">Dark</option>
							  <option value="css/theme_default.css">Default</option>
							  <option value="css/theme_grass.css">Grass</option>
							  <option value="css/theme_aqua.css">Aqua</option>
							</select></span></center>
							<script>
								$('#themess').change(function(){
								    $("#stylesheet").attr({href : $('#themess').find(":selected").val()});
								});
							</script>
								<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
					</div></form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					
					<h6>Change Profile Picture</h6>
					  <?php
		  $pimageload = $con->query("SELECT id, post_id, relation, userID, file_format
		FROM media 
		WHERE userID = ".$_SESSION['user']['id']." 
		    AND relation = 'profile_picture' 
		UNION ALL 
		SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
		ORDER BY id DESC LIMIT 1");?>
		<?php while($pil = $pimageload->fetch_object()): ?>
					<center><img class="ProfileImageSettings" src="../media/<?= $pil->file_format ?>/<?= $pil->post_id ?><?= $pil->userID ?>.<?= $pil->file_format ?>"/></br>
					<input id="upload_inputt"type="file" name="fileToUpload"/></center>
				<?php endwhile;?>
					<!--
<h6>Change Wall Photo</h6>
					<center><img class="WallPhotoSettings" src="https://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg"/>
					<input id="upload_inputt"type="file" name="fileToUpload"/></center>
					<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
-->
				</div>
			</div>
		</div>
	</div>
</div>



















<div class="User_Settings_Container" >
	<center><h5>Privacy</h5></center>
	<div class="row">
		<div class="user_Desktop_Settings">
			<div class="col-xs-6">
				<div class="SettingsUsrInput">
					<div class="row">
						<div class="col-xs-12">


						 <?php
	  $user_data_load = $con->query("SELECT * FROM all_settings WHERE user_id='".$_SESSION['user']['id']."'");?>
	<?php while($userloaded = $user_data_load->fetch_object()): ?>	
							<form id="upload" method="post" action="elements/user_account_update.php" enctype="multipart/form-data">
								<!-- <section class="model-13">
								<h6>Searchable</h6>
								  <div class="checkbox">
								    <input type="checkbox" value="<?= $userloaded->public?>" name="public" <?= $userloaded->public?>/>
								    <label></label>
								  </div>
								 </section>
								  <section class="model-13">
								  <h6>Public Profile</h6>
								  <div class="checkbox">
								    <input type="checkbox" value="<?= $userloaded->searchable?>" name="public" <?= $userloaded->searchable?>/>
								    <label></label>
								  </div>
								 </section> -->
								 <h6>Who can see my feed</h6>
								 <span class="custom-dropdown">
								 <select id="feed" name="feed" style="width:150px;">
									<option value="<?= $userloaded->feed?>"><?= $userloaded->feed?></option>
									  <option value="public">public</option>
									  <option value="hidden">hidden</option>
									  <option value="friends">friends</option>
									</select>
								</span>
								<h6>Who can see my photos, videos, music etc.</h6>
								 <span class="custom-dropdown">
								 <select id="media" name="media" style="width:150px;">
									<option value="<?= $userloaded->media?>"><?= $userloaded->media?></option>
									  <option value="public">public</option>
									  <option value="hidden">hidden</option>
									  <option value="friends">friends</option>
									</select>
									</span>
								<h6>Who can message me</h6>
								 <span class="custom-dropdown">
								 <select id="message" name="message" style="width:150px;">
									<option value="<?= $userloaded->message?>"><?= $userloaded->message?></option>
									  <option value="all">Anyone</option>
									  <option value="friends">Friends</option>
									  <option value="none">No one</option>
									</select>
									</span>
								<h6>What apears on my feed</h6>
								 <span class="custom-dropdown">
								 <select id="feed_content" name="feed_content" style="width:150px;">
									<option value="<?= $userloaded->feed_content?>"><?= $userloaded->feed_content?></option>
									  <option value="allads">Content and sudgested ads</option>
									  <option value="all">Content only</option>
									  <option value="friends">Friends content only</option>
									  <option value="me">My content only</option>
									</select>
									</span>
					<?php endwhile;?>
					
						</div>
						<div class="col-xs-6">
										<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
						
						</div>
						</form>



					</div>
				</div>
			</div>
		</div>
	</div>
</div>








































<?php
		  $sql=("SELECT * FROM user_details WHERE user_id = ".$_SESSION['user']['id']."");
$udl = mysql_fetch_assoc( mysql_query($sql) ); ?>


<div class="User_Settings_Container" >
	<center><h5>Account Settings</h5></center>
	<div class="row">
		<div class="user_Desktop_Settings">
			<div class="col-xs-6">
				<div class="SettingsUsrInput">
					<div class="row">
					<div class="col-xs-6">
						<form id="upload" method="post" action="elements/user_details_update.php" enctype="multipart/form-data">
						<h6>Work, Education, etc</h6>
						<input placeholder="Work" name="work" type="text" value="<?php echo $udl['work']?>"/></br>
						<input placeholder="Education" name="education" type="text" value="<?= $udl['education']?>"/></br>
						<input placeholder="Currently live in.." name="location" type="text" value="<?= $udl['location']?>"/></br>
						<input placeholder="Relationship status" name="relationship" type="text" value="<?= $udl['relationship']?>"/></br>
						<input placeholder="Phone number" name="phone" type="text" value="<?= $udl['phone']?>"/></br>
						<input placeholder="Languages.." name="language" type="text" value="<?= $udl['language']?>"/></br>
						<input placeholder="Skills" name="skill" type="text" value="<?= $udl['skill']?>"/></br>	
					</div>
					<div class="col-xs-6">
						<h6>Social</h6>
						<input placeholder="Tumblr" name="tumblr" type="text" value="<?= $udl['tumblr']?>"/></br>
						<input placeholder="Instagram" name="instagram" type="text" value="<?= $udl['instagram']?>"/></br>
						<input placeholder="Skype" name="skype" type="text" value="<?= $udl['skype']?>"/></br>
						<input placeholder="Facebook" name="facebook" type="text" value="<?= $udl['facebook']?>"/></br>
						<input placeholder="Youtube" name="youtube" type="text" value="<?= $udl['youtube']?>"/></br>
						<input placeholder="Twitter" name="twitter" type="text" value="<?= $udl['twitter']?>"/></br>
						<input placeholder="Website" name="website" type="text" value="<?= $udl['website']?>"/></br>
					</div>
				</div>
			</div>
			<div class="SettingsUsrInput">		
				<h6>About me</h6>
					<textarea placeholder="Write something about yourself.." name="about"><?= $udl['about']?></textarea>
				<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
				</form>
			</div>
		</div>
		</div>
		<div class="user_Mobile_Settings">
			<div class="row">
				<div class="col-xs-12">
					<div class="SettingsUsrInput" style="width:90%;">
					<div class="col-xs-12">
						<form id="upload" method="post" action="elements/user_details_update.php" enctype="multipart/form-data">
						<h6>Work, Education, etc</h6>
						<input placeholder="Work" name="work" type="text" value="<?php echo $udl['work']?>"/></br>
						<input placeholder="Education" name="education" type="text" value="<?= $udl['education']?>"/></br>
						<input placeholder="Currently live in.." name="location" type="text" value="<?= $udl['location']?>"/></br>
						<input placeholder="Relationship status" name="relationship" type="text" value="<?= $udl['relationship']?>"/></br>
						<input placeholder="Phone number" name="phone" type="text" value="<?= $udl['phone']?>"/></br>
						<input placeholder="Languages.." name="language" type="text" value="<?= $udl['language']?>"/></br>
						<input placeholder="Skills" name="skill" type="text" value="<?= $udl['skill']?>"/></br>	
					</div>
					<div class="col-xs-12">
						<h6>Social</h6>
						<input placeholder="Tumblr" name="tumblr" type="text" value="<?= $udl['tumblr']?>"/></br>
						<input placeholder="Instagram" name="instagram" type="text" value="<?= $udl['instagram']?>"/></br>
						<input placeholder="Skype" name="skype" type="text" value="<?= $udl['skype']?>"/></br>
						<input placeholder="Facebook" name="facebook" type="text" value="<?= $udl['facebook']?>"/></br>
						<input placeholder="Youtube" name="youtube" type="text" value="<?= $udl['youtube']?>"/></br>
						<input placeholder="Twitter" name="twitter" type="text" value="<?= $udl['twitter']?>"/></br>
						<input placeholder="Website" name="website" type="text" value="<?= $udl['website']?>"/></br>
					</div>
					</div>
					<div class="SettingsUsrInput">		
							<h6>About me</h6>
								<textarea placeholder="Write something about yourself.." name="about"><?= $udl['about']?></textarea>
								<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
							</form>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>


		
	


</div>
</div>