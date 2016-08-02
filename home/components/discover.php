<style>
	.Discover_Container span {
 background-color: #565656 ;
  color: transparent;	 font-size: 55px;
  text-shadow: 0px 2px 2px rgba(255,255,255,0.5);

}
	.Discover_Container span:hover {
		color:#434A54;
	}


	.Discover_Container span {
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
	}
	.Discover_Container span:hover {
		transition:color 0.2s;
	}
	body {


  overflow-y:hidden;
}
body {
	background: url(images/discover.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height:100%;
  	position: relative;

  width:100%;
}
.Discover_Container h2 {
	padding-top:20%;
		position: relative;

	color:white;
	font-weight: bold;

}
.Discover_Container_row {
	background:rgba(255,255,255,0.5);
	width:50%;
	padding:10px;
	position: relative;
	text-align: center;
	margin-left:auto;
	margin-right: auto;
}
</style>
<div class="Discover_Container">
<center><h2>Discover Anything</h2></center>
	<div class="row Discover_Container_row">
		<div class="col-xs-3">
			<a href="dvideo.php"><span class="glyphicon glyphicon-film"></span></a>
		</div>
		<div class="col-xs-3">
			<a href="dstatus.php"><span class="glyphicon glyphicon-pencil"></span></a>
		</div>
		<div class="col-xs-3">
			<a href="dpicture.php"><span class="glyphicon glyphicon-picture"></span></a>
		</div>	
		<div class="col-xs-3">
			<a href="dmusic.php"><span class="glyphicon glyphicon-music"></span></a>
		</div>
	</div>
</div>