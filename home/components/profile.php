
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
header('Location: http://www.socialnetwk.com#login');


$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>


<style>
	.Feed_Content_Load_Load {
	height:100%;
	width:90%;
	top:50px;
	margin-left:50px;
	position: relative;
}

.Feed_Main_Load_Load {
	height:100%;
	width:100%;
	position: relative;
}
.Feed_Contents_Loop img {
  max-width:100%;
  position: relative;
  height:auto;
}
.Feed_Contents_Loop video {
  max-width:100%;
  position: relative;
  height:auto;
}
.Feed_Contents_Loop audio {
  max-width:100%;
  position: relative;
  height:auto;
}
.Feed_Contents_Loop iframe {
  max-width:100%;
  position: relative;
  min-height:315px;
}
.Feed_Load_Tags_Cont {
  width:100%;
  min-height:30px;
  height:auto;
  position: relative;
  padding:3px;
  background: none;

}
.UserHeaderProfileContainer {
  width: 95%;
    min-height: 150px;
    height: auto;
    border-radius: 0px;
    text-align: center;
    padding:10px;
    margin-left: auto;
    margin-right: auto;
    background: #efefef;
      background-image: url("http://orig11.deviantart.net/20eb/f/2015/030/6/f/_minflat__dark_material_design_wallpaper__4k__by_dakoder-d8fjqzu.jpg");
  background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;

background-position:center;
      -moz-box-shadow: 0 5px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: 0 5px 8px rgba(0,0,0,.4);
   box-shadow: 0 5px 8px rgba(0,0,0,.4);
    margin-top: 10px;
}
.UserHeaderProfileContainer h4 {
	font-weight: 200;
	color:white;
	font-size: 15px;
}
.UserProfileImageProfile {
	border-radius: 50px;
	height:60px;
	width:60px;
	
}
.Feed_Contents_Loop h5 {
	font-weight: 400;
	font-size: 12px;
}
.Feed_Contents_Loop h4 {
	font-weight: 400;
	font-size: 15px;
}
.UserHeaderProfileContainer span {
		font-size: 18px;
	 background-color: #efefef;
  color: transparent;
  text-shadow: 0px 2px 3px rgba(0,0,0,0.2);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
}
.UserHeaderProfileContainer h5 {
	font-weight: 400;
	font-size: 10px;
	color:white;
}
</style>


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
	<div class="row">
		<div class="col-md-2">
	<img src="http://www.socialnetwk.com/media/<?= $pil->file_format ?>/<?= $pil->post_id ?><?= $pil->userID ?>.<?= $pil->file_format ?>" class="UserProfileImageProfile"/>
		</div>
		<div class="col-md-2">
    <h4><?= $updl->firstname ?> <?= $updl->lastname ?></h4>
		</div>
		<div class="col-md-8">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-2">
			<span class="glyphicon glyphicon-user"></span>
			<span class="glyphicon glyphicon-plus Small"></span>
      <?php 

      ?>
      <form>
			   <h5>Add Friend</h5>
      <form>
		</div>
		<div class="col-md-2">
			<span class="glyphicon glyphicon-comment"></span>
			<h5>Message</h5>
		</div>
		<div class="col-md-2">
			<span class="glyphicon glyphicon-th"></span>
			<h5>Gallery</h5>
		</div>
		<div class="col-md-2">
			<span class="glyphicon glyphicon-bookmark"></span>
			<h5>About</h5>
		</div>
		<div class="col-md-2">
			
		</div>
	</div>
</div>
<?php endwhile;?>
<?php endwhile;?>
<?php
              $UsrID = $_GET['id'];

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT * FROM media WHERE userID = ".$UsrID."
AND media.visable IS NULL

    ORDER BY media.date DESC, media.time DESC") ?>
  <?php while($feed = $feed_load->fetch_object()): ?>
  
  
  
      <?php
  $profile_image_feed = $con->query("SELECT id, post_id, relation, userID, file_format
FROM media 
WHERE userID = ".$feed->userID." 
    AND relation = 'profile_picture' 
UNION ALL 
SELECT -1 id, '55529055162cf' post_id, 'profile_picture' relation, '0' userID, 'jpg' file_format
ORDER BY id DESC LIMIT 1");?>
<?php while($pimage_feed = $profile_image_feed->fetch_object()): ?>









<?php if ($feed->format === "video"): ?>
        <div id="Feed_Contents_Loop" class="Feed_Contents_Loop">
  
  <div class="Header_Feed_Contents_Loop Video">
          <div class="row">
            <div class="col-md-2">
              <img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/>
            </div>
            <?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
          <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
        <?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
            <div class="col-md-4">
              <h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
            </div>
            <div class="col-md-4">
              <h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
            </div>
            <div class="col-md-2">
              <span class="glyphicon glyphicon-film"></span>
            </div>
          </div>
        </div>
        <?php echo ($iframeonly[0]); ?>
          <<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
          </<?= $feed->format ?>>
           <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
            <div class="Feed_Load_Tags_Cont">
               <?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?tag=<?= $tags->tag ?>">
               <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
               </div>
        </div>



<?php elseif ($feed->format === "img"): ?>
        <div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

  <div class="Header_Feed_Contents_Loop Picture">
          <div class="row">
            <div class="col-md-2">
              <img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/>
            </div>
            <?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
          <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
        <?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
            <div class="col-md-4">
              <h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
            </div>
            <div class="col-md-4">
              <h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
            </div>
            <div class="col-md-2">
              <span class="glyphicon glyphicon-picture"></span>
            </div>
          </div>
        </div>
      <?php if ($feed->format === "img"): ?>

          <?php echo ($iframeonly[0]); ?>
          <<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
          </<?= $feed->format ?>>
           <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
            <div class="Feed_Load_Tags_Cont">
               <?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?tag=<?= $tags->tag ?>">
               <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
               </div>
          <?php endif; ?>
        </div>













<?php elseif ($feed->format === "audio"): ?>
        <div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

  <div class="Header_Feed_Contents_Loop Music">
          <div class="row">
            <div class="col-md-2">
              <img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/>
            </div>
            <?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
          <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
        <?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
            <div class="col-md-4">
              <h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
            </div>
            <div class="col-md-4">
              <h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
            </div>
            <div class="col-md-2">
              <span class="glyphicon glyphicon-music"></span>
            </div>
          </div>
        </div>
        <?php echo ($iframeonly[0]); ?>
          <<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
          </<?= $feed->format ?>>
           <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
            <div class="Feed_Load_Tags_Cont">
               <?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?tag=<?= $tags->tag ?>">
               <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
               </div>
        </div>
























<?php elseif ($feed->format === "text"): ?>
        <div id="Feed_Contents_Loop" class="Feed_Contents_Loop">

          <div class="Header_Feed_Contents_Loop Status">
            <div class="row">
              <div class="col-md-2">
                <img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"  class="ProfileImg"/>
              </div>
              <?php $newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
            <?php $newcaptwo = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
          <?php preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $newCaption, $iframeonly); ?>
              <div class="col-md-4">
                <h4><?= $feed->firstname ?> <?= $feed->lastname ?></h4>
              </div>
              <div class="col-md-4">
                <h5><?= $feed->shared ?> Posted at <?= $feed->date ?> <?= $feed->time ?></h5>
              </div>
              <div class="col-md-2">
                <span class="glyphicon glyphicon-pencil"></span>
              </div>
            </div>
          </div>

          <h4><?php echo $newcaptwo; ?></h4>
          <?php if ($feed->format === "text"): ?>

          <?php echo ($iframeonly[0]); ?>
          <<?= $feed->format ?>  src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls /> 
          </<?= $feed->format ?>>

           <?php $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?>
            <div class="Feed_Load_Tags_Cont">
               <?php while($tags = $tags_load->fetch_object()): ?><a href="search.php?tag=<?= $tags->tag ?>">
               <h5 style="display:inline-block">#<?= $tags->tag ?> </h5></a><?php endwhile;?>
               </div>
          <?php endif; ?>

        </div>














<?php else: ?>
<h1>No content</h1>
<?php endif; ?>
<?php endwhile;?>
        <?php endwhile;?>
        
        

    
</div>

  

        
    
    
    



    



  </div>
