<div class="AllSettingsCont">

			
			<div class="NotificationCont">	
<center><h5>Notifications</h5></center>
  <?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');
$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

	 $fstatusload = $con->query("SELECT * FROM friends WHERE sender='".$_SESSION['user']['id']."' AND status='0'");?>

<?php while($friend_status = $fstatusload->fetch_object()): ?>

<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend_status->recipient."'");?>
<?php while($user = $user_select->fetch_object()): ?>

<div class="Message">
				  <div class="Message-icon">
				    <i class="fa fa-bell-o"></i>
				  </div>
				  <div class="Message-body">
				    <p>Pending Friend Request</p>
				    <p class="u-italic"><?= $user->firstname ?> <?= $user->lastname ?></p>
				  </div>
				  <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
				</div>
<?php endwhile;?>
<?php endwhile;?>


  <?php
	  
	  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');
$con = mysqli_connect('localhost','root','nKyGWryQDhZvcpAzDKWQ','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

	 $fstatusload = $con->query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'");?>

<?php while($friend_status = $fstatusload->fetch_object()): ?>

<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend_status->sender."'");?>
<?php while($user = $user_select->fetch_object()): ?>



				<div class="Message">
				  <div class="Message-icon">
				    <i class="fa fa-bell-o"></i>
				  </div>
				  <div class="Message-body">
				    <p>New Friend request</p>
				    <p class="u-italic"><?= $user->firstname ?> <?= $user->lastname ?></p>
				    <form id="upload" method="post"  class="form-horizontal"action="friendaccept.php" enctype="multipart/form-data">
	<fieldset>
            <button style="border:none;padding:none;margin:none;background:none;text-align:left;"><span class="glyphicon glyphicon-user btn-lg"></span><span class="glyphicon glyphicon-plus"></span></button>


					  			<input type="text" id="sender" name="sender" class="MsgInputHidden" value="<?=$user->id ?>" />
					  			<input type="text" id="status" name="status" class="MsgInputHidden" value="1" />
					  			<input type="text" id="recipient" name="recipient" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />
						</fieldset>
</form>
				  </div>
				  <button class="Message-close js-messageClose"><i class="fa fa-times"></i></button>
				</div>
<?php endwhile;?>
<?php endwhile;?>
							</div>
					
<div class="AccountSet">
	<form>
		<fieldset>
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<div class="UsrActSet">
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="UsrActSet">
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="UsrActSet">
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="UsrActSet">
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
						<input class="UsrActSetInput" placeholder="" name=""/>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>

<!--
<div class="LayoutCont">
	<h5>Layouts</h5>
	<div class="row">
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/1.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/2.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/3.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/14css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/5.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/6.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="hhttp://www.socialnetwk.com/home/layouts/css/7.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/8.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/9.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/10.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/11.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
		<div class="col-sm-6 col-sm-4" style="width:25%;position:relative;">
			<form>
				<fieldset>	
					<input name="layout" src="http://www.socialnetwk.com/home/layouts/css/12.css" class="MsgInputHidden" />			
					<button class="CustomLayoutPresetBtn"><img class="CustomLayoutPresetImg" src="http://www.socialnetwk.com/home/layouts/img/1.png"/></button>
				</fieldset>
			</form>
		</div>
	</div>
	
</div>
-->



	<div class="CustomStylesCont" style="overflow:scroll;position:relative;width:50%;height:50%;">
<h5>Navbar</h5>
<form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/css_update.php" enctype="multipart/form-data">
	<fieldset>
<div class="colorPicker" >
	
  <input type="radio" name="hat-color" 
  value="
  -webkit-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-moz-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-ms-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-o-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:linear-gradient(90deg, #fc00ff 10%, #00dbde 90%) 
  " id="hat-color-red" class="red"/>
  <label for="hat-color-red" class="red"style="text-transform: capitalize;">Timber</label>
  <input type="radio" name="hat-color" value="
  -webkit-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-moz-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-ms-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:-o-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:linear-gradient(90deg, #BA8B02 10%, #181818 90%)
  " id="hat-color-orange" class="orange"/>
  <label for="hat-color-orange" class="orange"style="text-transform: capitalize;">DarkNight</label>
  <input type="radio" name="hat-color" value="
   -webkit-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF4E50 10%, #F9D423 90%)
  " id="hat-color-yellow" class="yellow"/>
  <label for="hat-color-yellow" class="yellow"style="text-transform: capitalize;">Autumn</label>
  <input type="radio" name="hat-color" value="
  -webkit-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #348F50 10%, #56B4D3 90%);
  " id="hat-color-green" class="green"/>
  <label for="hat-color-green" class="green"style="text-transform: capitalize;">Emerald</label>
  <input type="radio" name="hat-color" value="
  -webkit-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #1A2980 10%, #26D0CE 90%)
  " id="hat-color-blue" class="blue"/>
  <label for="hat-color-blue" class="blue"style="text-transform: capitalize;">Aqua</label>
  <input type="radio" name="hat-color" value="
  -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF512F 10%, #DD2476 90%)
  " id="hat-color-indigo" class="indigo"/>
  <label for="hat-color-indigo" class="indigo"style="text-transform: capitalize;">Breeze</label>
  <input type="radio" name="hat-color" value="
  -webkit-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%)
  " id="hat-color-violet" class="violet"/>
  <label for="hat-color-violet" class="violet" style="text-transform: capitalize;">Rose</label>
    <input type="radio" name="hat-color" value="#333333" id="hat-color-default" class="default"/>
  <label for="hat-color-default" class="default"style="text-transform: capitalize;">Default</label>
</div>
<h5>Feed</h5>
<div class="colorPicker" >
	
 <input type="radio" name="hat-color" 
  value="
  -webkit-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-moz-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-ms-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-o-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:linear-gradient(90deg, #fc00ff 10%, #00dbde 90%) 
  " id="hat-color-red2" class="red"/>
  <label for="hat-color-red2" class="red">Timber</label>
  <input type="radio" name="hat-color2" value="
  -webkit-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-moz-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-ms-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:-o-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:linear-gradient(90deg, #BA8B02 10%, #181818 90%)
  " id="hat-color-orange" class="orange"/>
  <label for="hat-color-orange2" class="orange">DarkNight</label>
  <input type="radio" name="hat-color2" value="
   -webkit-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF4E50 10%, #F9D423 90%)
  " id="hat-color-yellow2" class="yellow"/>
  <label for="hat-color-yellow2" class="yellow">Autumn</label>
  <input type="radio" name="hat-color2" value="
  -webkit-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #348F50 10%, #56B4D3 90%);
  " id="hat-color-green2" class="green"/>
  <label for="hat-color-green2" class="green">Emerald</label>
  <input type="radio" name="hat-color2" value="
  -webkit-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #1A2980 10%, #26D0CE 90%)
  " id="hat-color-blue2" class="blue"/>
  <label for="hat-color-blue2" class="blue">Aqua</label>
  <input type="radio" name="hat-color2" value="
  -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF512F 10%, #DD2476 90%)
  " id="hat-color-indigo2" class="indigo"/>
  <label for="hat-color-indigo2" class="indigo">Breeze</label>
  <input type="radio" name="hat-color2" value="
  -webkit-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%)
  " id="hat-color-violet2" class="violet"/>
  <label for="hat-color-violet2" class="violet">Rose</label>
    <input type="radio" name="hat-color2" value="#333333" id="hat-color-default2" class="default"/>
  <label for="hat-color-default2" class="default">Default</label>
</div>
<h5>Feed Content</h5>
<div class="colorPicker" >
	
 <input type="radio" name="hat-color3" 
  value="
  -webkit-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-moz-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-ms-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-o-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:linear-gradient(90deg, #fc00ff 10%, #00dbde 90%) 
  " id="hat-color-red3" class="red"/>
  <label for="hat-color-red3" class="red">Timber</label>
  <input type="radio" name="hat-color3" value="
  -webkit-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-moz-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-ms-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:-o-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:linear-gradient(90deg, #BA8B02 10%, #181818 90%)
  " id="hat-color-orange3" class="orange"/>
  <label for="hat-color-orange3" class="orange">DarkNight</label>
  <input type="radio" name="hat-color3" value="
   -webkit-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF4E50 10%, #F9D423 90%)
  " id="hat-color-yellow3" class="yellow"/>
  <label for="hat-color-yellow3" class="yellow">Autumn</label>
  <input type="radio" name="hat-color3" value="
  -webkit-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #348F50 10%, #56B4D3 90%);
  " id="hat-color-green3" class="green"/>
  <label for="hat-color-green3" class="green">Emerald</label>
  <input type="radio" name="hat-color3" value="
  -webkit-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #1A2980 10%, #26D0CE 90%)
  " id="hat-color-blue3" class="blue"/>
  <label for="hat-color-blue3" class="blue">Aqua</label>
  <input type="radio" name="hat-color3" value="
  -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF512F 10%, #DD2476 90%)
  " id="hat-color-indigo3" class="indigo"/>
  <label for="hat-color-indigo3" class="indigo">Breeze</label>
  <input type="radio" name="hat-color3" value="
  -webkit-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%)
  " id="hat-color-violet3" class="violet"/>
  <label for="hat-color-violet3" class="violet">Rose</label>
    <input type="radio" name="hat-color3" value="#333333" id="hat-color-default3" class="default"/>
  <label for="hat-color-default3" class="default">Default</label>
</div>
<h5>Background Theme</h5>
<div class="colorPicker" >
	
 <input type="radio" name="hat-color4" 
  value="
  -webkit-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-moz-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-ms-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:-o-linear-gradient(90deg, #fc00ff 10%, #00dbde 90%);
  background:linear-gradient(90deg, #fc00ff 10%, #00dbde 90%) 
  " id="hat-color-red4" class="red"/>
  <label for="hat-color-red4" class="red">Timber</label>
  <input type="radio" name="hat-color4" value="
  -webkit-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-moz-linear-gradient(90deg, #BA8B02 10%, #181818 90%);
  background:-ms-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:-o-linear-gradient(90deg, #BA8B02 10%, #181818 90%); 
  background:linear-gradient(90deg, #BA8B02 10%, #181818 90%)
  " id="hat-color-orange4" class="orange"/>
  <label for="hat-color-orange4" class="orange">DarkNight</label>
  <input type="radio" name="hat-color4" value="
   -webkit-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF4E50 10%, #F9D423 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF4E50 10%, #F9D423 90%)
  " id="hat-color-yellow4" class="yellow"/>
  <label for="hat-color-yellow4" class="yellow">Autumn</label>
  <input type="radio" name="hat-color4" value="
  -webkit-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #348F50 10%, #56B4D3 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #348F50 10%, #56B4D3 90%);
  " id="hat-color-green4" class="green"/>
  <label for="hat-color-green4" class="green">Emerald</label>
  <input type="radio" name="hat-color4" value="
  -webkit-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #1A2980 10%, #26D0CE 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #1A2980 10%, #26D0CE 90%)
  " id="hat-color-blue4" class="blue"/>
  <label for="hat-color-blue4" class="blue">Aqua</label>
  <input type="radio" name="hat-color4" value="
  -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #FF512F 10%, #DD2476 90%)
  " id="hat-color-indigo4" class="indigo"/>
  <label for="hat-color-indigo4" class="indigo">Breeze</label>
  <input type="radio" name="hat-color4" value="
  -webkit-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #E55D87 10%, #5FC3E4 90%)
  " id="hat-color-violet4" class="violet"/>
  <label for="hat-color-violet4" class="violet">Rose</label>
    <input type="radio" name="hat-color4" value="#333334" id="hat-color-default4" class="default"/>
  <label for="hat-color-default4" class="default">Default</label>
</div>
					  			<input type="text" id="usr_id" name="usr_id" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />

<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


		<button class="SettingsBtn"><h5>Update</h5></button>
	</fieldset>
</form>


<form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/profile_background_up.php" enctype="multipart/form-data">
	<fieldset>
		<h6>Profile Background</h6>

		<span style="width:100%;color:black;margin:0px;padding:0px;" class="btn btn-outline btn-default btn-sm  btn-file">
					<span style="font-size:large;color:#333333" class="glyphicon glyphicon-file"></span>
					<span style="font-size:xx-small;color:#333333" class="glyphicon glyphicon-plus"></span>
					<input type="file" name="fileToUpload" multiple />
				</span>
							  			<input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />

				<button class="SettingsBtn"><h5 >Update</h5></button>

	</fieldset>
</form>
<form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/profile_picture_up.php" enctype="multipart/form-data">
	<fieldset>
		<h5>Profile Picture</h5>

		<span style="width:100%;color:black;margin:0px;padding:0px;" class="btn btn-outline btn-default btn-sm  btn-file">
					<span style="font-size:large;color:#333333" class="glyphicon glyphicon-file"></span>
					<span style="font-size:xx-small;color:#333333" class="glyphicon glyphicon-plus"></span>
					<input type="file" name="fileToUpload" multiple />
				</span>
							  			<input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />

				<button class="SettingsBtn"><h5 >Update</h5></button>

	</fieldset>
</form>
</div>
</div>






	 <!-- SCRIPTS -->
	 <script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>

function closeMessage(el) {
    el.addClass('is-hidden');
}
$('.js-messageClose').on('click', function (e) {
    closeMessage($(this).closest('.Message'));
});
$('#js-helpMe').on('click', function (e) {
    alert('Help you we will, young padawan');
    closeMessage($(this).closest('.Message'));
});
$('#js-authMe').on('click', function (e) {
    alert('Okelidokeli, requesting data transfer.');
    closeMessage($(this).closest('.Message'));
});
$('#js-showMe').on('click', function (e) {
    alert('You\'re off to our help section. See you later!');
    closeMessage($(this).closest('.Message'));
});
$(document).ready(function () {
    setTimeout(function () {
        closeMessage($('#js-timer'));
    }, 5000);
});
//@ sourceURL=pen.js
</script>
<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>

<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script>
var switchClick = function (e) {
    $(this).toggleClass('active');
};
(function ($) {
    $.fn.materialSwitch = function (options) {
        this.each(function () {
            $(this).click(switchClick);
            $('<div class="bar" />').appendTo($(this));
            $('<div class="thumb-container" />').append($('<div class="thumb" />').append($('<div class="ripple"/>'))).appendTo($(this));
        });
        return this;
    };
    $('.material-switch').materialSwitch();
}(jQuery));
//@ sourceURL=pen.js
</script>
<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='/js/lib/dummy.js'></script>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</div>