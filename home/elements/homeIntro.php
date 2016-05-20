<head>
		<link rel="stylesheet" href="home/css/layout.css" type='text/css'>

</head>
<script>
videojs('video', {}, function() {
  var player = this;
  player.vr({projection: 'Sphere'}); // initialize the plugin, 'Plane' projection by default
});
</script>




			
				<div class="Feed_Upload_Cont" style="width:40%;">
					<div class="Feed_Upload_Top_Cont">
						
				
			

						<img class="Feed_Upload_Profile_Cont" src="http://www.socialnetwk.com/images/socialnetwk.png"/>
						<div class="Feed_Upload_Txt_Cont">
						
									<input class="FileSelect" type="file" id="fileToUpload"name="fileToUpload"/>
		
			  					  	<textarea class="Feed_Upload_Textarea" id="MediaTxt"name="MediaTxt"></textarea>
						</div>
					</div>
					<div class="Feed_Upload_Bottom_Cont">
						<div class="Feed_Post_Btn_Cont">
						<button  name="Update" id="update" value="Update" class="SettingsBtn">Post</button>
					
						</div>
					</div>
				</div>



<style>

.Edit_Feed_Post_form {
    position:relative;
    height:100%;
    width:100%;
}
.black_overlay{
	display: none;
	position: relative;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index:1001;
	-moz-opacity: 0.5;
	opacity:.50;
	filter: alpha(opacity=50);
}

.white_content {
	display: none;
	position: relative;
	top: 25%;
	left: 25%;
	width: 80%;
	
	height: 80%;
	padding: 16px;
	border: 0px solid black;
	background-color: #efefef;
	z-index:1002;
	overflow: auto;
}

.FeedRCont {
	width:700px;
	height:auto;
	margin-left:50px;
	margin-right:auto;
	margin-top:50px;
	left:10px;
	position: relative;

}
.FeedRInCont {
	width:600px;
	height:100%;
	position: relative;
	display: inline-block;
	left:50px;
	background:#2C3E50;;
	border-radius: 5px;
	-webkit-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
}
.FeedROutHeadCnt {
	width:700px;
	right:100px;
	height:50px;
	z-index: 50;
	position: relative;
}
.FeedRHead {
	float:top;
	width:600px;
	padding: 10px;
	display: inline-block;
	z-index: 100;
	left:22px;
	position: relative;
	height:auto;
	color:white;
	background:#2C3E50;
}
.FeedRHeadArrow {
  width:0;
  height:0;
  border-top: 12px solid transparent;
  border-left: 25px solid #efefef;
display: inline-block;
  border-bottom: 12px solid transparent;
  float:left;
  left:60px;

  top:10px;
  color:black;
  position: relative;

}
.FeedRHead h1 {
	font-size: x-small;
	padding:0px;
	font-weight: 200;
	margin-top:0px;
	margin-bottom:0px;
	margin-right:0px;
}

.FeedRHead h3 {
	font-size: medium;
	padding:0px;
	font-weight: 200;
	margin-top:0px;
	margin-bottom:0px;
	margin-right:0px;
}

.FeedRHead h4 {
	font-size: xx-small;
	font-weight: 200;
	font-style: italic;
	padding:0px;
	margin-top:0px;
	margin-bottom:0px;
	margin-right:0px;
}
.FeedRHeadImg {
	position: relative;
	bottom:10px;
	right:25px;
	height:50px;
	display: inline-block;
	border-radius: 5px;
	-webkit-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
	width:50px;
}
.FeedRContent {
	position: relative;
	height:auto;
	width:100%;
	background: #2C3E50;
}
.FeedRFooter {
	bottom:0px;
	padding:3px;
	width:100%;
	position: relative;
	margin-top:10px;
	height:60px;
	background:#2C3E50;
	font-size: large;
	color:#2980B9;
	text-align: center;

}

.FeedRFooter .row {
	padding:0px;
	margin:0px;
}
.FeedRFootComment {
	bottom:0px;
	padding:3px;
	width:100%;
	border-top:1px solid #2980B9;
	position: relative;
	height:auto;
	background:#2C3E50;
	font-size: large;
	color:#2980B9;
	text-align: center;
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
.FeedRComIn {
	margin-left: auto;
	margin-right: auto;
	position: relative;
	height:30px;
	width:90%;
	font-size: small;
	padding:0px;
	margin-top:2px;
	color:#2980B9;
	padding:2px;
	border-radius: 5px;
	border:2px solid #2980B9;
}
.FeedRComLoad {
	width:100%;
	height:auto;
	padding:5px;
	background:#2C3E50;
}
.FeedRComUsImg {
	display: inline-block;
	height:30px;
	width:30px;
	border-radius: 50px;
	position: relative;
}
.FeedRComLoad h1 {
	font-size: small;
	padding:0px;
	margin: 0px;
	display: inline-block;
	color:#2980B9;
}
.FeedRComLoad h3 {
	font-size: small;
	padding:0px;
	margin: 0px;
	display: inline-block;
	color:white;
	
}
.FeedRComLoad h5 {
	font-size: x-small;
	padding:0px;
	margin: 0px;
	display: inline-block;
	color:white;
	
}
.FeedRComLoadLoop {
	width:90%;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	padding:3px;
	-webkit-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 65px 1px rgba(0,0,0,0.75);
	border-radius: 5px;
}
.FeedRContent img {
	height:auto;
	margin-top:0px;
	padding-top:0px;
	width:600px;
	position: relative;
}
.FeedRContent iframe {
	height:350px;
	width:600px;
	padding:0px;
	margin:0px;
	position: relative;
}
.FeedRContent video {
	height:330px;
	width:600px;
	padding:0px;
	margin:0px;
	position: relative;
}
.FeedRContent audio {
	height:40px;
	width:500px;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	padding:0px;
	margin:0px;
	position: relative;
}
.FeedRFooter h3 {
	font-size: x-small;
	padding:0px;
	margin:0px;
}
</style>
<div id="feed_main_load">



<div class="FeedRCont">


	<div class="FeedRInCont">
		<div class="FeedROutHeadCnt">
<img src="http://www.socialnetwk.com/images/socialnetwk.png" class="FeedRHeadImg" />
		<div class="FeedRHeadArrow"></div>
			<div class="FeedRHead">

				<h1>Casper Round</h1>
				<h4>Posted at 17/1/2016 at 17:36</h4>
				<h3>Some description</h3>
			</div>
		</div>
		<div class="FeedRContent">
			<video  src="http://www.socialnetwk.com/media/mp4/56476bc52f2c5334.mp4" controls /> 
</video>
		</div>
		<div class="FeedRFooter">
			<div class="row" style="width:100%;position:relative;">
	              <div class="col-xs-6 col-sm-3">
	                


					  				<button style='background:inherit;border:none;color:#2980B9;'><span class='LikesDislikesComments glyphicon glyphicon-heart'>7</span></button>
			
	              </div>
	              <div class="col-xs-6 col-sm-3">
	                <button style='background:inherit;border:none;color:#2980B9;'><span class="glyphicon glyphicon-refresh"></span></button>
	              </div>
	              <div class="col-xs-6 col-sm-3">
	            

<button style='background:inherit;border:none;color:#2980B9;'><span class='LikesDislikesComments glyphicon glyphicon-thumbs-up'>12</span></button>
				  

	              </div>
	              <div class="col-xs-6 col-sm-3">
	               

					  			<button style='background:inherit;border:none;color:#2980B9;'><span class='LikesDislikesComments glyphicon glyphicon-thumbs-down'>2</span></button>
							
	              </div>
	         </div>
	         <center><h3>
	         
	         #drone #aerial #showreel</h3></center>
		</div>
		
		<div class="FeedRFootComment">
		<form>
			<input class="FeedRComIn" placeholder="Write a comment.."/>
		</form>
		</div>
	</div>
</div>



</div>
				
				
				
