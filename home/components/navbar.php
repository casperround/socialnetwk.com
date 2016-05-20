<style>
.Navbar {
	height:40px;
	width:100%;
	display:inline-block;
	position: fixed;
	display:inline-block;
	float:top;
	z-index: 100;
	background: #434A54;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
}
.MainLogo {
	height:40px;
	left:10px;
	width:40px;
	border-radius: 50px;
	display: inline-block;
	bottom:10px;
	position: relative;	
}
.Navbar h3 {
	color:white;
	display: inline-block;
	padding:0px;
	margin-right:5px;
	margin-top:10px;
}
.Navbar input {
		height:30px;
		margin-top:5px;
		width:50%;
		color:gray;
		position: relative;
		border:0px;
		background:white;
		  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.5);
		border-radius: 5px;
	}
	.Mobile_Navbar {
		display:none;
	}
<<<<<<< Updated upstream


	@media (max-width:570px) {
		.Navbar {
			display:none;
		}

=======
	@media (max-width:770px) {

		.Mobile_Navbar {
			height:40px;
	width:100%;
	position: fixed;
	display:inline-block;
	float:top;
	z-index: 100;
	background: #434A54;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0.75);
		}
		.Navbar {
			display:none;
		}
>>>>>>> Stashed changes
	}
</style>

	<div class="Navbar">
		<div class="row">
			<div class="col-md-2">
				<img src="http://www.socialnetwk.com/images/socialnetwk.png" class="MainLogo"/>
				<h3>ocialnetwk</h3>
			</div>
			<div class="col-md-4">
				<form action="search.php" method="GET" >
				<input  type="text" name="query"  placeholder="Search for people, pages, videos, etc"/>
				</form>
			</div>
			<div class="col-md-6">

			</div>
		</div>
	</div>
<div class="Mobile_Navbar">
    <div style="width:25%;display:inline-block;background-color:red;">Right</div>
    <div style="width:25%;display:inline-block;background-color:yellow;">Left</div>
    <div style="width:25%;display:inline-block;background-color:green;">Right</div>
    <div style="width:25%;display:inline-block;background-color:blue;">Left</div>
</div>
