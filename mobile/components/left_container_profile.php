<style>
.column_left {
	margin-top:40px;
	height:100%;
	width:150px;
	z-index: 20;
	position: fixed;
	background:#efefef;
-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
}

.Left_Col_Head {
	background-image: url("https://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg");
	background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;

background-position:center;
padding-top:20px;
padding-left:20px;
	height:50px;
	width:100%;
	padding:5px;
	position: relative;
}
.ProfileImg {
	height:30px;
	width:30px;
	border-radius: 50px;
}
.Left_Col_Selects {
	width:100%;
	height:40px;
	padding:10px;
	background:;
	color:gray;
	margin-top:5px;
	position: relative;
	transition:background 0.2s, color 0.2s;
}
.Left_Col_Selects:hover {
	background:rgba(0,0,0,0.3);
	transition:background 0.2s, color 0.2s;
	color:white;
	  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
}
.Left_Col_Selects span {
	font-size: 25px;
	 background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;

}
.Left_Col_Selects h4 {
	padding:3px;
	margin:0px;
	font-size: 12px;
	text-align: left;
}
.New_Content_Noti {
	border-radius: 5px;
	background:#EC87C0;
	color:white;
	width:50px;
	height:100%;
	position: relative;

}
.New_Content_Noti h5 {
	padding:0px;
	margin:0px;
	font-size: 10px;
	text-align: center;
}
.Left_Col_Head h3 {
	color:white;
}

@media (max-width:570px) {
		.Left_Col_Selects h4 {
			display: none;
		}
		.New_Content_Noti {
			display: none;

		}
		.New_Content_Noti h5 {
			display: none;
		}

		.column_left {
			top:0px;
			height:100%;
			margin-top:0px;
			width:40px;
			z-index: 20;
			position: fixed;
			background:#efefef;
		-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
		}
		.Left_Col_Head h4 {
			display: none;
		}
		.Left_Col_Head {
			background-image: url("https://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg");
			background-repeat:no-repeat;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		background-size:cover;

		background-position:center;
		padding-top:20px;
		padding-left:20px;
			height:50px;
			width:100%;
			padding:5px;
			position: relative;
		}
		.ProfileImg {
			height:30px;
			width:30px;
			border-radius: 50px;
		}
		.Left_Col_Selects {
			width:100%;
			height:40px;
			padding:10px;
			background:;
			color:gray;
			margin-top:5px;
			position: relative;
			transition:background 0.2s, color 0.2s;
		}
		.Left_Col_Selects:hover {
			background:rgba(0,0,0,0.3);
			transition:background 0.2s, color 0.2s;
			color:white;
			  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
		   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
		   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
		}
		.Left_Col_Selects span {
			font-size: 15px;
			 background-color: #565656;
		  color: transparent;
		  text-shadow: 0px 2px 3px rgba(255,255,255,0.5);
		  -webkit-background-clip: text;
		     -moz-background-clip: text;
		          background-clip: text;

		}
	}

</style>
<div class="column_left">
				<div class="Left_Col_Head">
					<div class="row">
						<div class="col-md-4">
		
								<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID=".$_SESSION['user']['id']." AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>
							<img src="https://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>" class="ProfileImg"/>
							<?php endwhile;?>
						</div>
						<div class="col-md-8">
							<h4 style="color:white;font-size:15px;font-weight:500;padding:0px;margin:0px;"><?= $_SESSION["user"]["username"] ?></h4>
							<h4 style="color:white;font-size:10px;padding:0px;margin:0px;font-weight:200;"><?= $_SESSION["user"]["firstname"] ?> <?= $_SESSION["user"]["lastname"] ?></h4>
							
						</div>
					</div>
				</div>
				<a href="index.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-th-list"></span>
						</div>
						<div class="col-md-6">
							<h4>Dashboard</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
<!-- 								<h5>4 New!</h5>
 -->							</div>
						</div>
					</div>
				</div></a>

				<a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-user"></span>
						</div>
						<div class="col-md-6">
							<h4>Profile</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>
				

				<a href="myvideos.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-film"></span>
						</div>
						<div class="col-md-6">
							<h4>Videos</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="mygallery.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-picture"></span>
						</div>
						<div class="col-md-6">
							<h4>Pictures</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
<!-- 								<h5>3 New!</h5>
 -->							</div>
						</div>
					</div>
				</div></a>
				<a href="mymusic.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-music"></span>
						</div>
						<div class="col-md-6">
							<h4>My music</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="cloud.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-cloud"></span>
						</div>
						<div class="col-md-6">
							<h4>Cloud</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="maps.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-map-marker"></span>
						</div>
						<div class="col-md-6">
							<h4>Maps</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="chat.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-comment"></span>
						</div>
						<div class="col-md-6">
							<h4>Messages</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="user_country.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-globe"></span>
						</div>
						<div class="col-md-6">
							<h4>Global Users</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>

				<a href="doc_editor.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-list-alt"></span>
						</div>
						<div class="col-md-6">
							<h4>Create Document</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>


				<a href="logout.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-off"></span>
						</div>
						<div class="col-md-6">
							<h4>Logout</h4>
						</div></a>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>
			</div>