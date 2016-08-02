<style>
	@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
	.Mobile_Nav_Sec {
		display:block;
	}
	.column_left {
		display:none;
	}
	.Mobile_Nav_Hidden {
		display:none;
	}
}
@media (max-width:770px) {
	.Mobile_Nav_Sec {
		display:block;
	}
	.column_left {
		display:none;
	}
	.Mobile_Nav_Hidden {
		display:none;
	}
	}
</style>
<div class="Left_Col_Head">
					<div class="row" >
						<div class="col-xs-2" >
		
								<?php $profile_image = $con->query("SELECT id, post_id, relation, userID, file_format FROM media WHERE userID=".$_SESSION['user']['id']." AND relation = 'profile_picture' UNION ALL SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format ORDER BY id DESC LIMIT 1"); ?>
						<?php while($pimage = $profile_image->fetch_object()): ?>
							<img src="../media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>" class="ProfileImg"/>
							<?php endwhile;?>
						</div>
						<div class="col-md-2 Mobile_Nav_Hidden">
							<h4 style="color:white;font-size:15px;font-weight:500;padding:0px;margin:0px;"><?= $_SESSION["user"]["username"] ?></h4>
							<h4 style="color:white;font-size:10px;padding:0px;margin:0px;font-weight:200;"><?= $_SESSION["user"]["firstname"] ?> <?= $_SESSION["user"]["lastname"] ?></h4>
							
						</div>
						<div class="Mobile_Nav_Sec">
							<div class="col-xs-4 Mobile_Nav_Sec">
								<form action="search.php" method="GET" >
								<input  type="text" name="query"  placeholder="Search for anything" style="width:100%;position:relative;margin-top:10px;"/>
								</form>
							
							</div></a>
							<div class="col-xs-1 Mobile_Nav_Sec">
								<a href="notification.php"><div class="Left_Col_Selects">
										<span class="glyphicon glyphicon-bell"style="height:40px;line-height:30px;"></span>
								</div>
							</div></a>
							<div class="col-xs-1 Mobile_Nav_Sec">
								<a href="https://www.socialnetwk.com"><div class="Left_Col_Selects">
										<div class="home"></div>
								</div>
							</div></a>
							</div>
							<div class="col-xs-1 Mobile_Nav_Sec">
								<a href="profile?id=<?= $_SESSION["user"]["id"]?>"><div class="Left_Col_Selects">
										<div class="user"></div>
								</div>
							</div>
							<div class="col-xs-1 Mobile_Nav_Sec">
								<a href="chat"><div class="Left_Col_Selects">
										<div class="chat"></div>
								</div>
							</div>
							<div class="col-xs-1 Mobile_Nav_Sec">
								<a href="logout"><div class="Left_Col_Selects">
										<span class="glyphicon glyphicon-off"style="height:40px;line-height:30px;"></span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			 	<div class="column_left">

				<a href="index.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<div class="home"></div>
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

				<a href="profile?id=<?= $_SESSION["user"]["id"]?>"><div class="Left_Col_Selects Profile">
					<div class="row">
						<div class="col-md-2">
							<div class="user"></div>
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
				

				<a href="myvideos"><div class="Left_Col_Selects ColLeftVideos">
					<div class="row">
						<div class="col-md-2">
							<div class="video"></div>
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

				<a href="mygallery"><div class="Left_Col_Selects ColLeftPictures">
					<div class="row">
						<div class="col-md-2">
							<div class="picture"></div>
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
				<a href="mymusic"><div class="Left_Col_Selects ColLeftMusic">
					<div class="row">
						<div class="col-md-2">
							<div class="music"></div>
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

				<a href="cloud.php"><div class="Left_Col_Selects ColLeftCloud">
					<div class="row">
						<div class="col-md-2">
							<div class="cloud"></div>
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

				<a href="maps"><div class="Left_Col_Selects ColLeftMaps">
					<div class="row">
						<div class="col-md-2">
							<div class="map"></div>
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

				<a href="chat"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<div class="chat"></div>
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

				<a href="user_country"><div class="Left_Col_Selects ColLeftUsers">
					<div class="row">
						<div class="col-md-2">
							<div class="globe"></div>
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

				<a href="doc_editor"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<div class="document"></div>
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
				<a href="newpage.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<div class="document"></div>
						</div>
						<div class="col-md-6">
							<h4>Create Page</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>
				<a href="mypages.php"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<div class="document"></div>
						</div>
						<div class="col-md-6">
							<h4>My Pages</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>
				<a href="doc_editor"><div class="Left_Col_Selects">
					<div class="row">
						<div class="col-md-2">
							<div class="document"></div>
						</div>
						<div class="col-md-6">
							<h4>Create Event</h4>
						</div>
						<div class="col-md-4">
							<div class="New_Content_Noti">
								<h5></h5>
							</div>
						</div>
					</div>
				</div></a>


				<a href="logout"><div class="Left_Col_Selects">
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
			</div>
