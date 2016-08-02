

<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
		 <script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 
<style>
#upload_button {
    display: none;
    background:none;
    border:none;
    color:black;
    font-size: 15px;
    border:0px;
    border-radius: 0px;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);}
.Post_Container button {
			text-align: center;
		border:0px;
		height:20px;
		width:100px;
		border-radius: 5px;
		background:#4FC1E9;
		float:bottom;
		bottom:0px;
		 -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		color:white;
		transition:background 0.2s;
	}
	.Post_Container button:hover {
		background:#3BAFDA;
		transition:background 0.2s;
	}
</style>


<script type='text/javascript'>//<![CDATA[
window.onload=function(){
var button = document.getElementById('upload_button');
var input  = document.getElementById('upload_input');

// Making input invisible, but leaving shown fo graceful degradation
input.style.display = 'none';
button.style.display = 'initial';

button.addEventListener('click', function (e) {
    e.preventDefault();
    
    input.click();
});

input.addEventListener('change', function () {
   button.innerText = this.value; 
});
}//]]> 

</script>

	
		<div class="Post_Container">
										<form id="upload" method="post"  class="form-horizontal" action="elements/feedup.php" enctype="multipart/form-data">

			<center><textarea name="MediaTxt"placeholder="Post something."></textarea></center>
			<div class="row">
				<div class="col-md-6">
					 <p><button id="upload_button"><span class="glyphicon glyphicon-file"></span></button></p>
					 <p><input  id="upload_input"type="file"name="fileToUpload"/></p>
					 <input type="text" id="UsrLName" name="UsrLName" style="display:none;" value="<?= $_SESSION["user"]["lastname"] ?>" />
			  					  	<input type="text" id="UsrID" name="UsrID" style="display:none;" value="<?= $_SESSION["user"]["id"] ?>" />
			  					  	<input type="text" id="ip" name="ip" style="display:none;" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
			  					  	<input type="text" id="relation" name="relation" style="display:none;" value="feed" />
			  					  	<input type="text" id="author_id" name="author_id" style="display:none;" value="<?= $_SESSION["user"]["id"] ?>" />
				</div>
				<div class="col-md-6">
					<center><button name="Update" id="update" value="Update">Post</button></center>
				</div>
			</form>
			</div>
		</div>
