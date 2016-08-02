<style>
section {
  float: left;
  min-width: 150px;
  width: 33.33%;
  padding: 25px 0;
  min-height: 100px;
}

/*=====================*/
.checkbox {
  position: relative;
  display: inline-block;
}
.checkbox:after, .checkbox:before {
  font-family: FontAwesome;
  -webkit-font-feature-settings: normal;
          font-feature-settings: normal;
  -webkit-font-kerning: auto;
          font-kerning: auto;
  -webkit-font-language-override: normal;
          font-language-override: normal;
  font-stretch: normal;
  font-style: normal;
  font-synthesis: weight style;
  font-variant: normal;
  font-weight: normal;
  text-rendering: auto;
}
.checkbox label {
  width: 90px;
  height: 42px;
  background: #ccc;
  position: relative;
  display: inline-block;
  border-radius: 46px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox label:after {
  content: '';
  position: absolute;
  width: 50px;
  height: 50px;
  border-radius: 100%;
  left: 0;
  top: -5px;
  z-index: 2;
  background: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
.checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}
.checkbox input:hover + label:after {
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.2), 0 3px 8px 0 rgba(0, 0, 0, 0.15);
}
.checkbox input:checked + label:after {
  left: 40px;
}


.model-13 .checkbox:after {
  content: 'OFF';
  font-family: Arial;
  position: absolute;
  color: #666;
  top: 12px;
  right: 15px;
}
.model-13 .checkbox label {
  background: none;
  border: 3px solid #777;
  height: 40px;
  border-radius: 20px;
}
.model-13 .checkbox label:after {
  content: 'ON';
  font-family: Arial;
  color: #fff;
  line-height: 28px;
  text-indent: 100px;
  background: #777;
  overflow: hidden;
  box-shadow: none;
  border-radius: 14px;
  -webkit-transform: translateX(-50px);
  transform: translateX(-50px);
  -moz-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  -o-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  -webkit-transition: all 0.4s, width 0.2s linear, text-indent 0.4s linear;
  -webkit-transition-delay: 0.2s, 0s, 0s;
  -webkit-transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  transition: all 0.4s 0.2s, width 0.2s linear, text-indent 0.4s linear;
  top: 3px;
  left: auto;
  right: 2px;
  width: 28px;
  height: 28px;
}
.model-13 .checkbox input:checked + label {
  border-color: #329043;
}
.model-13 .checkbox input:checked + label:after {
  background: #3fb454;
  left: auto;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -moz-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  -o-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  -webkit-transition: all 0.4s, width 0.2s linear, text-indent 0.3s linear;
  -webkit-transition-delay: 0s, 0.4s, 0.4s;
  -webkit-transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  transition: all 0.4s, width 0.2s linear 0.4s, text-indent 0.3s linear 0.4s;
  width: 80px;
  text-indent: 0;
}
</style>
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
header('Location: ../https://www.socialnetwk.com');


$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>
</head>



<style>


	.ProfileImageSettings {
		width:40px;
		height:40px;
		display:inline-block;
	}
	.WallPhotoSettings {
		width:80%;
		height:70px;
		  background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
background-position:center;
	}
	#upload_inputt {
		display:inline-block;
	}
		.UsrSettingsBtn {
		text-align: center;
		border:0px;
		height:20px;
		width:100px;
		border-radius: 5px;
		
		background:#4FC1E9;
		bottom:0px;
		margin-top:20px;
		 -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,.4);
   box-shadow:inset 0 3px 8px rgba(0,0,0,.24);
		color:white;
		transition:background 0.2s;
	}
	.user_Mobile_Settings {
			display:none;
		}
.UsrSettingsBtn:hover {
		background:#3BAFDA;
		transition:background 0.2s;
	}
	@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
		.user_Desktop_Settings {
			display:none;
		}
		.user_Mobile_Settings {
			display:block;
		}
	}
	
	@media (max-width:770px) {
		.user_Desktop_Settings {
			display:none;
		}
		.user_Mobile_Settings {
			display:block;
		}
	}

	.big {
  font-size: 1.2em;
}

.small {
  font-size: .7em;
}

.square {
  width: .7em;
  height: .7em;
  margin: .5em;
  display: inline-block;
}

/* Custom dropdown */
.custom-dropdown {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 10px; /* demo only */
}

.custom-dropdown select {
  background-color: rgb(44, 62, 80);
  color: #fff;
  font-size: inherit;
  padding: .5em;
  padding-right: 2.5em;	
  border: 0;
  margin: 0;
  border-radius: 3px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: button; /* hide default arrow in chrome OSX */
}

.custom-dropdown::before,
.custom-dropdown::after {
  content: "";
  position: absolute;
  pointer-events: none;
}

.custom-dropdown::after { /*  Custom dropdown arrow */
  content: "\25BC";
  height: 1em;
  font-size: .625em;
  line-height: 1;
  right: 1.2em;
  top: 50%;
  margin-top: -.5em;
}

.custom-dropdown::before { /*  Custom dropdown arrow cover */
  width: 2em;
  right: 0;
  top: 0;
  bottom: 0;
  border-radius: 0 3px 3px 0;
}

.custom-dropdown select[disabled] {
  color: rgba(0,0,0,.3);
}

.custom-dropdown select[disabled]::after {
  color: rgba(0,0,0,.1);
}

.custom-dropdown::before {
  background-color: rgba(0,0,0,.15);
}

.custom-dropdown::after {
  color: rgba(0,0,0,.4);
}
</style>



<div class="User_Settings_Container" >
	<center><h5>Create a page</h5></center>
	<div class="row">
		<div class="user_Desktop_Settings">
			<div class="col-xs-6">
				<div class="SettingsUsrInput">
					<div class="row">
						<div class="col-xs-12">


						
							<form id="upload" method="post" action="newpagepost.php" enctype="multipart/form-data">
								<input placeholder="Name" name="name" type="text" /></br>
								 <h6>Category</h6>
								 <span class="custom-dropdown">
								 <select id="feed" name="category" style="width:150px;">
									<option value="Business" name="category">Business</option>
									  <option value="Business">Business</option>
									  <option value="Place">Place</option>
									  <option value="Company">Company</option>
									  <option value="Organization">Organization</option>
									  <option value="Institution">Institution</option>
									  <option value="Brand">Brand</option>
									  <option value="Product">Product</option>
									  <option value="Artist">Artist</option>
									  <option value="Band">Band</option>
									  <option value="Public Figure">Public Figure</option>
									  <option value="Entertainment">Entertainment</option>
									  <option value="Cause">Cause</option>
									  <option value="Community">Community</option>
									</select>
								</span>
								<textarea placeholder="About your page" name="about"></textarea>
								
					
						</div>
						<div class="col-xs-6">
										<center><button name="Update" class="UsrSettingsBtn" id="update" value="Update">Update</button></center>
						
						</div>
						</form>



					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>