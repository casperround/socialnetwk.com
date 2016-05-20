<style>
		.AddFileBtn {
		width:150px;
		height:45px;
		border:0px;
		border-radius: 5px;
		background:#4FC1E9 ;
		color:white;
			  -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
   		transition:background 0.2s;

	}
	.AddFileBtn:hover {
		background:#AC92EC;
		transition:background 0.2s;
}
.filemanager input {
	margin-top:50px;
	color:white;

}
#upload_button {
    display: none;
    background:none;
    border:none;
    color:black;
    font-size: 35px;
    min-width:60px;
    width:auto;
    height:60px;
    text-align: center;
    padding-left:3px;
    border-radius: 50px;
    border:2px solid #4FC1E9 ;
	-webkit-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
-moz-box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
box-shadow: 0px 0px 37px -5px rgba(0,0,0,0);
color:white;margin-top:30px;position:relative;
}
</style>
	<div class="filemanager" >
		<center><h2 style="position:relative;margin-top:40px;top:40px;color:white;">Please Select a file</h2></center>
		<center><h4 style="position:relative;color:white;top:30px;">Files will automaticly be sorted into the correct directory</h4></center>

		<form id="upload" method="post"  class="form-horizontal" action="http://www.socialnetwk.com/home/cloud_file_up.php" enctype="multipart/form-data">
 <center><p><button id="upload_button"><span class="glyphicon glyphicon-file"></span></button></p>
					 <p><center><input  id="upload_input"type="file"name="fileToUpload"/></p></center>	</center>		<input type="text" id="author_id" name="author_id" class="MsgInputHidden" value="<?= $_SESSION["user"]["id"] ?>" />
			<center><button name="Update" id="update" class="AddFileBtn" value="Update">Add</button></center>
		</form>


	</div>

