

<style>
body {
  overflow-x:hidden;
}

.DiscoverViewCont {
  width:100%;
  margin-top:40px;
  margin-left:100px;
  height:100%;
  -webkit-overflow-scrolling: touch;
  position: relative;
  background:none;
  padding:20px;
  padding-top:10px;
}

.DSInput {
  width:78%;
  height:30px;
  margin-right:200px;
  border-radius: 10px;
  z-index: 1000;
  border:none;
  color:black;
  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  margin-bottom:20px;
}
a {text-decoration: none;color:white;}

.DVRLoopCnt {
 display:inline-table;
  height:auto;
  margin-top:none;
  margin-left:10px;
  position: relative;
  width:500px;
  margin-right:auto;
  margin-bottom:20px;
  padding:10px;
  color:black;

}
.DVRMainCnt {
  max-width:90%;
  width:auto;
  height:100%;
  margin-left:80px;
  padding:0px;
  color:black;
  position: relative;
  background:#efefef;
  border-radius: 5px;
  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
}
.DVRHeader {
  width:0;
  height:0;
  border-top: 12px solid transparent;
  border-left: 25px solid #efefef;
  border-bottom: 12px solid transparent;
  float:left;
  left:50px;

  top:15px;
  color:black;
  position: relative;

}
.DVRUIMG {
  float:left;
  width:50px;
  height:50px;
  bottom:25px;
  right:80px;
  border-radius: 5px;
  position: relative;
  -webkit-box-shadow: 0px 0px 20px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 20px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 20px 4px rgba(0,0,0,1);
}
iframe {
  width:100%;
  max-height:100%;
  position: relative;
  margin:0px;
  padding:0px;

}
.DVRFooter {
  width:100%;
  height:auto;
  padding:10px;
  position: relative;
  color:#3498DB;
  background:#2C3E50;
}
.DVIShareICO {
  width:100%;
  height:50px;
  font-size: 20px;
  color:#2980B9;

  position: relative;
  text-align: center;
}
.DVRContent { 
padding:0px;
background: black;
margin:0px;


}

.glyphicon-heart:hover {
    color:#E74C3C;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.glyphicon-refresh:hover {
    color:#27AE60;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.glyphicon-thumbs-up:hover {
    color:#27AE60;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.glyphicon-thumbs-down:hover {
    color:#E74C3C;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;

}
.DVRContentHead { 
padding:10px;
width:100%;
height:auto;
background: #ECF0F1;

}
.SideNav {
  margin-top:100px;
  width:100px;
  margin-left: 20px;
  height:80%;
  background:none;
  border-radius: 10px;
  position: fixed;
  float:left;
  color:black;
  z-index: 100;
}
.DisSphere {
  border-radius: 50px;
  height:80px;
  width:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
z-index: 100;
padding-top:10px;
  position: relative;
  background:#2C3E50;
  color:white;
  text-align: center;
    -webkit-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  box-shadow: 0px 0px 36px 2px rgba(0,0,0,1); 
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
}
.DisSphere:hover {

  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);

  color:#3498DB;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
}
a {
  text-decoration: none;
  color:white;
}
a:hover {
  text-decoration: none;
  color:white;
}
</style>


<style>
.SideNav {
  margin-top:100px;
  width:100px;
  margin-left: 20px;
  height:80%;
  background:none;
  border-radius: 10px;
  position: fixed;
  float:left;
  color:black;
  z-index: 100;
}
.DisSphere {
  border-radius: 50px;
  height:80px;
  width:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
z-index: 100;
padding-top:10px;
  position: relative;
  background:#2C3E50;
  color:white;
  text-align: center;
    -webkit-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 36px 2px rgba(0,0,0,1);
  box-shadow: 0px 0px 36px 2px rgba(0,0,0,1); 
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
}
.DisSphere:hover {

  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);

  color:#3498DB;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
}
.DisSphereActive {
  border-radius: 50px;
  height:80px;
  width:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
z-index: 100;
padding-top:10px;
  position: relative;
 
 text-align: center;
  background:#2C3E50;
  -webkit-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  -moz-box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);
  box-shadow: 0px 0px 100px 4px rgba(0,0,0,1);

  color:#3498DB;
    -webkit-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-moz-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-o-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
-ms-transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
transition: box-shadow 0.2s ease-in-out 0.2s, color 0.2s ease;
}
a {
  text-decoration: none;
  color:white;
}
a:hover {
  text-decoration: none;
  color:white;
}
.DVRImgR {
  max-width: 100%;
  position: relative;
}
</style>
<?php 
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>
       <style>
        .Main_Discover_Container {
          width:100%;
          height:100%;
          position: relative;
        }
       </style> 
<?php else: ?>
      <style>
        .Main_Discover_Container {
          width:50%;
          height:100%;
          margin-left: 150px;
          position: relative;
        }
       </style>
<?php endif;?>
<div class="Main_Discover_Container">
<div class="SideNav">
   <a href="dvideo.php"><div class="DisSphereActive">
    <span class="glyphicon glyphicon-film"></span>
    <h6>Videos</h6>
  </div></a>
  <a href="dmusic.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-headphones"></span>
    <h6>Music</h6>
  </div></a>
  <a href="dpicture.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-picture"></span>
    <h6>Pictures</h6>
  </div></a><br/>
  <a href="dgif.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-picture">-</span><span class="glyphicon glyphicon-film"></span>
    <h6>Gif's</h6>
  </div></a>
  <a href="dchannel.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-list-alt"></span>
    <h6>Channels</h6>
  </div></a>
  <a href="dpage.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-th-list"></span>
    <h6>Pages</h6>
  </div></a>
</div>

<div class="DiscoverViewCont">
<form action="discoversearch.php" method="GET" >
  <center><input class="DSInput" type="text" name="discover"  placeholder="Search tags for videos..."/></center>
</form>
  <?php


$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} ?>
<?php 
$query = $_GET['discover'];  
$tagsload = $con->query("SELECT * FROM hashtags WHERE tag LIKE '%".$query."%'"); ?>
<?php while($tags = $tagsload->fetch_object()): ?>
<?php
mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT DISTINCT users.id, users.firstname, users.lastname, 
    media.date, media.id, media.time, media.text, media.userID, 
    media.author_id, media.ip, media.post_id, media.format, media.visable,
    media.file_format, media.MediaTxt, media.author_firstname, 
    media.author_lastname, media.shared, media.relation
FROM users 
JOIN media 
    ON (users.id = media.userID)
    WHERE media.post_id = '".$tags->post_id."'
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
   <?php 
$newCaption = preg_replace('/#\S+ */', '', $feed->MediaTxt); ?>
<?php
$MediaTxtNew = preg_replace('/<iframe.*?\/iframe>/i','', $newCaption); ?>
  <div class="DVRLoopCnt">
    <div class="DVRHeader">
      <img class="DVRUIMG" src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"/>
      
    </div>
    <div class="DVRMainCnt">

      <div class="DVRContent">
        <div class="DVRContentHead">
        <h5><?= $feed->firstname ?> <?= $feed->lastname ?></h5>
      <h6>Posted on <?= $feed->date ?> at <?= $feed->time ?></h6>
        <h5>  <?php 
echo $MediaTxtNew;
?></h5>
      </div>
<?php 
echo $newCaption;
?><br/>
            <<?= $feed->format ?> alt="" class="DVRImgR" style="color:black;text-transform: capitalize;" class="FeedRCntSize"  id="video" data-setup='{"example_option":true}' src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" controls onerror="this.src='default.png'"/> 
</<?= $feed->format ?>>

      </div>
      <div class="DVRFooter">
        <h6><?php
  $tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?><?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?tag=<?= $tags->tag ?>">#<?= $tags->tag ?><?php endwhile;?></a></h6>
        <div class="DVIShareICO">
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-heart"></span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-refresh"></span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-thumbs-up"></span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <span class="glyphicon glyphicon-thumbs-down"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile;?>
<?php endwhile;?>

<?php endwhile;?>





</div>
</div>




