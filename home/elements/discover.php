
  
  
  
  <style type='text/css'>

    .black_overlay{
	display: none;
	position: fixed;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index:1001;
	-moz-opacity: 0.8;
	opacity:.80;
	filter: alpha(opacity=80);
}

.white_content {
	display: none;
	position: fixed;
	top: 60px;
	left: 5%;
	width: 90%;
	height: 80%;
	bottom:60px;
	padding: 0px;
background:rgba(0,0,0,0.8);	z-index:1002;
	overflow: auto;
}
.PopButton {
	background:#efefef;
	width:100px;
	color:black;
	height:40px;
		   -webkit-transition: border-radius 0.5s;
border-radius: 0px;
	position: relative;
}
.PopButton:hover {
	border-radius: 10px;
	   -webkit-transition: border-radius 0.5s;

}
a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}
  </style>
  
<style>

	.absolute-center, .menu, .menu .btn .glyphicon, .menu .btn.trigger .line {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
}

.menu {
  width: 5em;
  margin-top:20%;
  position: relative;
  height: 5em;
  
}
.menu .btn {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.8);
  opacity: 0;
  z-index: -10;
  cursor: pointer;
  transition: opacity 1s, z-index 0.3s, transform 1s;
  transform: translateX(0);
}
.menu .btn .glyphicon {
  font-size: 2em;
  transition: color 0.3s;
}
.menu .btn:hover .fa {
  color: rgba(0, 0, 0, 0.7);
}
.menu .btn.trigger {
  opacity: 1;
  z-index: 100;
  cursor: pointer;
  transition: transform 0.3s;
}
.menu .btn.trigger:hover {
  transform: scale(1.2);
}
.menu .btn.trigger:hover .line {
  color: rgba(0, 0, 0, 0.7);
}
.menu .btn.trigger:hover .line:before, .menu .btn.trigger:hover .line:after {
  color: rgba(0, 0, 0, 0.7);
}
.menu .btn.trigger .line {
  width: 60%;
  height: 6px;
  background: #000;
  border-radius: 6px;
  transition: background-color 0.3s, height 0.3s, top 0.3s;
}
.menu .btn.trigger .line:before, .menu .btn.trigger .line:after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  width: 100%;
  height: 6px;
  background: #000;
  border-radius: 6px;
  transition: background-color 0.3s, transform 0.3s;
}
.menu .btn.trigger .line:before {
  top: -12px;
  transform-origin: 15% 100%;
}
.menu .btn.trigger .line:after {
  top: 12px;
  transform-origin: 25% 30%;
}
.menu .rotater {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform-origin: 50% 50%;
}
.menu .rotater a {
  color: #000;
  display: block;
}
.menu.active .btn-icon {
  opacity: 1;
  z-index: 50;
}
.menu.active .trigger .line {
  height: 0px;
  top: 45%;
}
.menu.active .trigger .line:before {
  transform: rotate(45deg);
  width: 110%;
}
.menu.active .trigger .line:after {
  transform: rotate(-45deg);
  width: 110%;
}

.rotater:nth-child(1) {
  transform: rotate(-22.5deg);
}

.menu.active .rotater:nth-child(1) .btn-icon {
  transform: translateY(-10em) rotate(22.5deg);
}

.rotater:nth-child(2) {
  transform: rotate(22.5deg);
}

.menu.active .rotater:nth-child(2) .btn-icon {
  transform: translateY(-10em) rotate(-22.5deg);
}

.rotater:nth-child(3) {
  transform: rotate(67.5deg);
}

.menu.active .rotater:nth-child(3) .btn-icon {
  transform: translateY(-10em) rotate(-67.5deg);
}

.rotater:nth-child(4) {
  transform: rotate(112.5deg);
}

.menu.active .rotater:nth-child(4) .btn-icon {
  transform: translateY(-10em) rotate(-112.5deg);
}

.rotater:nth-child(5) {
  transform: rotate(157.5deg);
}

.menu.active .rotater:nth-child(5) .btn-icon {
  transform: translateY(-10em) rotate(-157.5deg);
}

.rotater:nth-child(6) {
  transform: rotate(202.5deg);
}

.menu.active .rotater:nth-child(6) .btn-icon {
  transform: translateY(-10em) rotate(-202.5deg);
}

.rotater:nth-child(7) {
  transform: rotate(247.5deg);
}

.menu.active .rotater:nth-child(7) .btn-icon {
  transform: translateY(-10em) rotate(-247.5deg);
}

.rotater:nth-child(8) {
  transform: rotate(292.5deg);
}

.menu.active .rotater:nth-child(8) .btn-icon {
  transform: translateY(-10em) rotate(-292.5deg);
}
.glyphicon {
	margin-left:auto;
	margin-right:auto;
position: relative;

}
.glyphicon:hover {
	margin-left:auto;
	margin-right:auto;
	color:white;
position: relative;

}
</style>
   		<div id="dpeople" class="white_content">
	    <a href = "javascript:void(0)" onclick = "document.getElementById('dpeople').style.display='none';document.getElementById('dpeople_fade').style.display='none'"class="btn btn-icon">
       <i style="font-size:x-large;border-radius:50px;"class="glyphicon glyphicon-remove"></i>
      </a>
	    <?php include 'dpeople.php'; ?>
	    
</div>

       		<div id="dvideo" class="white_content">
	    <a href = "javascript:void(0)" onclick = "document.getElementById('dvideo').style.display='none';document.getElementById('dvideo_fade').style.display='none'"class="btn btn-icon">
       <i style="font-size:x-large;border-radius:50px;"class="glyphicon glyphicon-remove"></i>
      </a>
	    <?php include 'dvideo.php'; ?>
	    
</div>

       		<div id="dpicture" class="white_content">
	    <a href = "javascript:void(0)" onclick = "document.getElementById('dpicture').style.display='none';document.getElementById('dpicture_fade').style.display='none'"class="btn btn-icon">
       <i style="font-size:x-large;border-radius:50px;"class="glyphicon glyphicon-remove"></i>
      </a>
	    <?php include 'dpicture.php'; ?>
	    
</div>

       		<div id="dmusic" class="white_content">
	    <a href = "javascript:void(0)" onclick = "document.getElementById('dmusic').style.display='none';document.getElementById('dmusic_fade').style.display='none'"class="btn btn-icon">
       <i style="font-size:x-large;border-radius:50px;"class="glyphicon glyphicon-remove"></i>
      </a>
	    <?php include 'dmusic.php'; ?>
	    
</div>
		<div class="menu">
  <div class="btn trigger">
    <span class="line"></span>
  </div>
  <div class="icons">
    <div class="rotater">
      <a href = "javascript:void(0)" onclick = "document.getElementById('dpeople').style.display='block';document.getElementById('dpeople_fade').style.display='block'" class="btn btn-icon">
       <i class="glyphicon glyphicon-user"></i>
      </a>
    </div>
   	
    <div class="rotater">
      <a href = "javascript:void(0)" onclick = "document.getElementById('dvideo').style.display='block';document.getElementById('dvideo_fade').style.display='block'"  class="btn btn-icon">
       <i class="glyphicon glyphicon-film"></i>
      </a>
    </div>
    <div class="rotater">
      <a href = "javascript:void(0)" onclick = "document.getElementById('dmusic').style.display='block';document.getElementById('dmusic_fade').style.display='block'" class="btn btn-icon">
        <i class="glyphicon glyphicon-music"></i>
      </a>
    </div>
    <div class="rotater">
      <a  href = "javascript:void(0)" onclick = "document.getElementById('dpicture').style.display='block';document.getElementById('dpicture_fade').style.display='block'" class="btn btn-icon">
        <i class="glyphicon glyphicon-picture"></i>
      </a>
    </div>
    <div class="rotater">
  
    </div>
    <div class="rotater">

    </div>
    <div class="rotater">
  
    </div>
    <div class="rotater">
   
    </div>
  </div>
</div>

<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
$(document).ready(function () {
    $('.trigger').click(function () {
        $('.menu').toggleClass('active');
    });
});
//@ sourceURL=pen.js
</script>
<script src='/assets/editor/live/css_live_reload_init.js'></script>




