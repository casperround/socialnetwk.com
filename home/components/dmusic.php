

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
  border:none;
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
  max-width:100%;
  max-height:auto;

  position: relative;

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
.DVRContentHead { 
padding:10px;
width:100%;
height:auto;
background: #ECF0F1;

}
.DVRContent { 
padding:0px;
background: #ECF0F1;

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
</style>
<style class="cp-pen-styles">

h1 {
  font-family: 'Open Sans', sans-serif;
  font-size: 13pt;
  font-weight: 600;
  text-transform: uppercase;
  color: white;
  cursor: default;
}

h4 {
  font-family: 'Open Sans', sans-serif;
  font-size: 8pt;
  font-weight: 400;
  cursor: default;
}

h2 {
  font-family: 'Open Sans', sans-serif;
  font-size: 13pt;
  font-weight: 300;
  color: white;
  cursor: default;
}

.player {
  height: 100%;
  width: 100%;
  background-color: #1E2125;
  position: relative;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}
.player ul {
  list-style: none;
}
.player ul li {
  display: inline-block;
}

.cover {
  position: absolute;
  top: 0;
  left: 0;
}
.cover img {
  height: 100px;
  width: 100px;
}

.info h1 {
  margin-top: 15px;
  margin-left: 70px;
  line-height: 0;
}
.info h4 {
  margin-left: ;
  line-height: 20px;
  color: #636367;
}
.info h2 {
  margin-left:100px ;
}

.button-items {
margin-top:20px;
  margin-left:100px ;
}

#slider {
  width: 182px;
  height: 4px;
  background: #151518;
  border-radius: 2px;
}
#slider div {
  width: 4px;
  height: 4px;
  margin-top: 1px;
  background: #EF6DBC;
  border-radius: 2px;
}

#timer {
  color: #494B4E;
  line-height: 0;
  font-size: 9pt;
  float: right;
  font-family: Arial, Sans-Serif;
}

.controls {
  margin-top: 20px;
}
.controls svg:nth-child(2) {
  margin-left: 5px;
  margin-right: 5px;
}

#play {
  padding: 0 3px;
  width: 30px;
  height: 30px;
  x: 0px;
  y: 0px;
  enable-background: new 0 0 25 25;
}
#play g {
  stroke: #FEFEFE;
  stroke-width: 1;
  stroke-miterlimit: 10;
}
#play g path {
  fill: #FEFEFE;
}

#play:hover {
  cursor: pointer;
}
#play:hover g {
  stroke: #8F4DA9;
  cursor: pointer;
}
#play:hover g path {
  fill: #9b59b6;
  cursor: pointer;
}

.step-backward {
  width: 18px;
  height: 18px;
  x: 0px;
  y: 0px;
  enable-background: new 0 0 25 25;
  margin-bottom: 5px;
}
.step-backward g polygon {
  fill: #FEFEFE;
}

.step-foreward {
  width: 18px;
  height: 18px;
  x: 0px;
  y: 0px;
  enable-background: new 0 0 25 25;
  margin-bottom: 5px;
}
.step-foreward g polygon {
  fill: #FEFEFE;
}

#pause {
  x: 0px;
  y: 0px;
  enable-background: new 0 0 25 25;
  width: 30px;
  height: 30px;
  position: absolute;
  margin-left: -38px;
  cursor: pointer;
}
#pause rect {
  fill: white;
}

#pause:hover rect {
  fill: #8F4DA9;
}

.step-backward g polygon:hover, .step-foreward g polygon:hover {
  fill: #EF6DBC;
  cursor: pointer;
}

.social {
  text-align: center;
}

.twitter {
  color: #BDBDBD;
  font-family: sans-serif;
  text-decoration: none;
}
.twitter:hover {
  color: #ecf0f1;
}

.github {
  color: #BDBDBD;
  font-family: sans-serif;
  text-decoration: none;
}
.github:hover {
  color: #ecf0f1;
}

p {
  color: #BDBDBD;
}

#skip {
  float: right;
  margin-top: 10px;
}
#skip p {
  color: #2980b9;
}
#skip p:hover {
  color: #e74c3c;
  cursor: pointer;
}

.expend {
  padding: 0.5px;
  cursor: pointer;
}
.expend svg:hover g polygon {
  fill: #EF6DBC;
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
   <a href="dvideo.php"><div class="DisSphere">
    <span class="glyphicon glyphicon-film"></span>
    <h6>Videos</h6>
  </div></a>
  <a href="dmusic.php"><div class="DisSphereActive">
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
  <center><input class="DSInput" placeholder="Search tags for videos..."/></center>
  <?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();

$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$feed_load = $con->query("SELECT DISTINCT users.id, users.firstname, users.lastname, 
    media.date, media.id, media.time, media.text, media.userID, 
    media.author_id, media.ip, media.post_id, media.format, media.visable,
    media.file_format, media.MediaTxt, media.author_firstname, 
    media.author_lastname, media.shared, media.relation
FROM users 
JOIN media 
    ON (users.id = media.userID)
    AND media.relation = 'feed'
    AND media.format = 'audio'
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
   
        </div>

        <div class="player">
           <ul>
              <li class="cover"><img src="http://www.socialnetwk.com/media/<?= $pimage_feed->file_format ?>/<?= $pimage_feed->post_id ?><?= $pimage_feed->userID ?>.<?= $pimage_feed->file_format ?>"/></li>
              <li class="info">
                 <h1><?php 
echo $MediaTxtNew;
?></h1>


                 <div class="button-items">
                    <audio id="music" preload="auto" loop="false">
                       <source src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" type="audio/mp3">
                          <source src="http://www.socialnetwk.com/media/<?=$feed->file_format?>/<?=$feed->post_id?><?=$feed->author_id?>.<?=$feed->file_format?>" type="audio/ogg">
                    </audio>
                    <div id="slider"><div id="elapsed"></div></div>
                    <p id="timer">0:00</p>
                    <div class="controls">
                       <span class="expend"><svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
                          <g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
                       </svg></span>

                       <svg id="play" viewBox="0 0 25 25" xml:space="preserve">
                           <defs><rect x="-49.5" y="-132.9" width="446.4" height="366.4"/></defs>
                          <g><circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
                          </g>
                       </svg>
                      

                       <svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
                          <g>
                             <rect x="6" y="4.6" width="3.8" height="15.7"/>
                             <rect x="14" y="4.6" width="3.9" height="15.7"/>
                          </g>
                       </svg>

                       <span class="expend"><svg class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
                          <g><polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/></g>
                        </svg></span>
                    </div>
                 </div>
              </li>
           </ul>
        </div>
      </div>
      <div class="DVRFooter">
        <h6><?php
	$tags_load = $con->query("SELECT * FROM hashtags WHERE post_id='".$feed->post_id."' AND uid='".$feed->userID."'");?><?php while($tags = $tags_load->fetch_object()): ?><a href="http://www.socialnetwk.com/home/search.php?query=<?= $tags->tag ?>">#<?= $tags->tag ?><?php endwhile;?></a></h6>
        <div class="DVIShareICO">
                  <?php 
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>

<?php else: ?>
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
        <?php endif;?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile;?>
<?php endwhile;?>

</div>






		<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
<script>
var music = document.getElementById('music');
var playButton = document.getElementById('play');
var pauseButton = document.getElementById('pause');
var playhead = document.getElementById('elapsed');
var timeline = document.getElementById('slider');
var timer = document.getElementById('timer');
var duration;
pauseButton.style.visibility = 'hidden';
var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
music.addEventListener('timeupdate', timeUpdate, false);
function timeUpdate() {
    var playPercent = timelineWidth * (music.currentTime / duration);
    playhead.style.width = playPercent + 'px';
    var secondsIn = Math.floor(music.currentTime / duration / 3.5 * 100);
    if (secondsIn <= 9) {
        timer.innerHTML = '0:0' + secondsIn;
    } else {
        timer.innerHTML = '0:' + secondsIn;
    }
}
playButton.onclick = function () {
    music.play();
    playButton.style.visibility = 'hidden';
    pause.style.visibility = 'visible';
};
pauseButton.onclick = function () {
    music.pause();
    playButton.style.visibility = 'visible';
    pause.style.visibility = 'hidden';
};
music.addEventListener('canplaythrough', function () {
    duration = music.duration;
}, false);
//# sourceURL=pen.js
</script>
<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</polygon>