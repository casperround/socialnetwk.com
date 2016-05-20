
<h3>Login</h3>
			<div class="divider">
				<div class="hr">
					<div class="hr-dot"></div>
				</div>
			</div>
<form class="form-horizontal" role="form" action="php/login_post.php" method="POST">
    	<fieldset>
	            <div class="mat-div">
	              <center><span class="white counter-text">Email</span></center>
	              <center><input id="" style="color:black"name="email" placeholder="email" type="email" class="mat-input" ></center>
	            </div>	            
	            <div class="mat-div">
	             <center> <span class="white counter-text">Password</span></center>
	               <center><input  id="password" name="password" placeholder="password" type="password" class="mat-input" ></center>
	            </div><br/>
	            	            	                <center><button style="color:#fff;" type="submit" class="style btn-success btn-lg">Login</button></center>

          <script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
        </fieldset>
    </form>
	
				<form class="form-horizontal" role="form" action="http://www.socialnetwk.com/php/register_post.php" method="POST">
					<fieldset>
						    <div class="mat-div">
						        <center><span class="white counter-text">Email</span></center>
						         <center><input id="" name="email" placeholder="email" type="email"  class="mat-input" ></center>
						    </div>        
						    <div class="mat-div">
						       <center><span class="white counter-text">Password</span></center>
						         <center><input id="password" name="password" placeholder="password" type="password"  class="mat-input"></center>
						    </div>			
						    <div class="mat-div">
						       <center> <span class="white counter-text">First Name</span></center>
						         <center><input id="firstname" name="firstname" placeholder="firstname" type="text"  class="mat-input" ></center>
						    </div>
						    <div class="mat-div">
						        <center><span class="white counter-text">Last Name</span></center>
						         <center><input id="lastname" name="lastname" placeholder="lastname" type="text"  class="mat-input" ></center>
						    </div>
						  
						    <div class="mat-div">
						       <center><span class="white counter-text">Age</span></center>
						         <center><input id="age" name="age" placeholder="age" type="number"  class="mat-input" ></center>
						    </div>
						    <div class="mat-div">
						        <center><span class="white counter-text">Country</span></center>
						         <center><input id="country" name="country" placeholder="Country"  type="text"  class="mat-input" ></center>
						    </div>	
						    <div class="mat-div">
						        <center><span class="white counter-text">Gender</span></center>
						        <center><select id="gender" name="gender" class="mat-input">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
								</select></center>
						    </div>	
						    <div class="mat-div">
						        <center><span class="white counter-text">Date of birth</span></center>
						        <center><input id="datebirth" name="datebirth" placeholder="Date of Birth" type="datebirth"  class="mat-input" ></center>
						        <input type="text" id="ip" name="ip" class="MsgInputHidden" value="<?= $_SERVER["REMOTE_ADDR"] ?>" />
								<input type="text" id="date" name="date" class="MsgInputHidden" value="<?= date('Y-m-d') ."\n" ?>" />
								<?php $now = time(); $utc_time = $now - intval(date('Z', $now)); ?>
								<input type="text" id="time" name="time" class="MsgInputHidden" value="<?= '' . date('H:i:s', $now) . '' ?>" />      
						    </div><br/>
						    						   <center>						    						    <div class="mat-div" >

																<div class="g-recaptcha" data-sitekey="6LczqQ0TAAAAAOBcm8_nHgL31XrM5HKvOSYLSCa7"></div>

						    						    </div></center>
						    		<br/>
						   
						    						    
					        	            	            	                <center><button style="color:#fff;" type="submit" class="style btn-success btn-lg">Register</button></center>
					</fieldset>
				</form>
</body>
</html>