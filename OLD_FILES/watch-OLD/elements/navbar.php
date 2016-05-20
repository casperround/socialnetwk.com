
<div id="Nav" class="navbar">

    <a href="http://watch.socialnetwk.com/watch"><img class="logo" src="http://www.socialnetwk.com/image/socialnetwk.png"></a>


            <div id="navbar">
              <a href="main" style="color:white">
            <span size: "20pt" class="glyphicon glyphicon-home btn-lg"></span>


            <a href="help" style="color:white">
            <span size: "20pt" class="glyphicon glyphicon-asterisk btn-lg"></span>
            </a>

            <a href="notifications" style="color:white">
            <span size: "20pt" class="glyphicon glyphicon-bell btn-lg"></span>
            </a>

            <a href="discover" style="color:white">
            <span class="glyphicon glyphicon-leaf btn-lg"></span>
            </a>

            <a href="messages" style="color:white">
            <span class="glyphicon glyphicon-envelope btn-lg"></span>
            </a>

            <a href="profile?id=<?= $_SESSION["user"]["id"] ?>" style="color:white">
            <span class="glyphicon glyphicon-user btn-lg"></span>
            </a>

            <a href="logout" style="color:white">
            <span class="glyphicon glyphicon-log-out btn-lg"></span>
            </a>


            </div>


<?php $profile_image = $db->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$_SESSION["user"]["id"]." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($pimage = $profile_image->fetch_object()): ?>

<img class="profileimage" src="http://www.socialnetwk.com/media/<?= $pimage->file_format ?>/<?= $pimage->post_id ?><?= $pimage->userID ?>.<?= $pimage->file_format ?>"/>
      <?php endwhile; ?>

  

<h4 style="position:absolute;top:10%;right:40%;color:#efefef;"><?= $_SESSION["user"]["firstname"] ?></h4>
</div>
<form >
	<input class="Search" type="text" id="search" placeholder="Search.."></form>
</form>  

<style>
	.Search {
	width: 100%;
	height:40px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
	border:0px;
	top:50px;
	background:white;
	z-index: 10;
	position: fixed;
	transition-delay: 1s;

}
	
	
</style>