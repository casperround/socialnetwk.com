<style>
.SettingsMainCont {
  height:100%;
  width:100%;
  position: fixed;
  margin-top:40px;
  overflow-y:scroll;
}
.UserAccountDetailsCont {
  width:45%;
  height:auto;
  padding:10px;
  position: relative;
  float:right;
  display: inline-block;
  color:white;
  margin-top:30px;
  border-radius: 5px;
  border:1px solid white;
}
.UploadBackGroundImgCont {
   width:45%;
  height:auto;
  padding:10px;
  position: relative;
  float:left;
  display: inline-block;
  color:white;
  margin-top:30px;
  border-radius: 5px;
  border:1px solid white;
}
.UploadBackGroundImgCont h5 {
        font-size: 20px;
  color: white;
  font-weight: bold;
}
.UserAccountDetailsCont h5 {
      font-size: 20px;
  color: white;
  font-weight: bold;
}
.SettingsNavbar {
  position: relative;
  width:100%;
  margin-top:10px;
  height:50px;
  text-align: center;
}
.SettingsNavbar h1 {
  font-size: 20px;
  color: white;
  font-weight: bold;
}
.SettingsColorScheme {
  width:45%;
  height:auto;
  padding:10px;
  position: relative;
  color:white;
  margin-top:30px;
  border-radius: 5px;
  border:1px solid white;
  float:left;
  display: inline-block;
}
.SettingsColorScheme h5 {
    font-size: 20px;
  color: white;
  font-weight: bold;
}
.colorPicker {
  max-width:100%;
  left:0px;
  right:0px;
  position: relative;
}
.SubmitBtnSettings {
  background:#3498DB ;
  border-radius: 5px;
  width:200px;
  height:auto;
}
.UsrActSetInput {
  width:100%;
  color:black;
  height:25px;
  border:1px solid white;
  border-radius: 3px;
}
.row {
  width:100%;
}
.DateofBirthSelect option {
  color:black;
}
.DateofBirthSelect {
  color:black;
  width:30%;
  border-radius: 3px;
  border:1px solid white;
}
</style>
<div class="SettingsMainCont">

  <div class="SettingsNavbar">
    <h1>Settings</h1>
  </div>
  <div class="SettingsColorScheme">
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


    <button class="SubmitBtnSettings"><h5>Update</h5></button>
  </fieldset>
</form>
  </div>
  <div class="UserAccountDetailsCont">

  <?php
    
    ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');
$con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

   $fstatusload = $con->query("SELECT * FROM friends WHERE recipient='".$_SESSION['user']['id']."' AND status='0'");?>

<?php while($friend_status = $fstatusload->fetch_object()): ?>

<?php $user_select = $con->query("SELECT * FROM users WHERE id='".$friend_status->sender."'");?>
<?php while($user = $user_select->fetch_object()): ?>


<?php endwhile;?>
<?php endwhile;?>
    <center><h3>Account Details</h3></center><br/>
      <script>
    $(function(){
    var $select = $(".1-100");
    for (i=1;i<=100;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});
      </script>


<?php
  $uid = $_SESSION['user']['id'];
   $user_select = $con->query("SELECT * FROM users WHERE id='".$uid."'");?>
<?php while($user = $user_select->fetch_object()): ?>

      <form  id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/details_update.php" enctype="multipart/form-data">
        <fieldset>
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <div class="UsrActSet">
                <center><h5>Account Name</h5></center>
                <input class="UsrActSetInput" placeholder="Account Name" value="<?= $user->firstname ?>" name="accountname" type="text"/>
                <center><h5>First Name</h5></center>
                <input class="UsrActSetInput" placeholder="Firstname" name="firstname"value="<?= $user->firstname ?>" type="text"/>
                <center><h5>Last Name</h5></center>
                <input class="UsrActSetInput" placeholder="Lastname" name="lastname"value="<?= $user->lastname ?>" type="text"/>
                <center><h5>Password</h5></center>
                <input class="UsrActSetInput"  name="password1" type="password"/>
                <center><h5>Repeat Password</h5></center>
                <input class="UsrActSetInput" name="password2" type="password"/>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="UsrActSet">
                <center><h5>Email</h5></center>
                <input class="UsrActSetInput" placeholder="Email"value="<?= $user->email ?>" name="email1" type="email"/>
                <center><h5>Repeat Email</h5></center>
                <input class="UsrActSetInput" placeholder="Email" value="<?= $user->email ?>"name="email2" type="email"/>
                <center><h5>Age</h5></center>
                <select class="CPageInput 1-100" name="age"></select>
                <center><h5>Gender</h5></center>
                <select name="gender"  class="CPageInput" >
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select><br/>
                <center><h5>Date of Birth</h5></center>
                 <select name="dob-day" class="DateofBirthSelect" id="dob-day">
                    <option value="">Day</option>
                    <option value="">---</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                  <select name="dob-month" class="DateofBirthSelect" id="dob-month">
                    <option value="">Month</option>
                    <option value="">-----</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                  <select name="dob-year" class="DateofBirthSelect" id="dob-year">
                    <option value="">Year</option>
                    <option value="">----</option>
                    <option value="2012">2015</option>
                    <option value="2012">2014</option>
                    <option value="2012">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                    <option value="1949">1949</option>
                    <option value="1948">1948</option>
                    <option value="1947">1947</option>
                    <option value="1946">1946</option>
                    <option value="1945">1945</option>
                    <option value="1944">1944</option>
                    <option value="1943">1943</option>
                    <option value="1942">1942</option>
                    <option value="1941">1941</option>
                    <option value="1940">1940</option>
                    <option value="1939">1939</option>
                    <option value="1938">1938</option>
                    <option value="1937">1937</option>
                    <option value="1936">1936</option>
                    <option value="1935">1935</option>
                    <option value="1934">1934</option>
                    <option value="1933">1933</option>
                    <option value="1932">1932</option>
                    <option value="1931">1931</option>
                    <option value="1930">1930</option>
                    <option value="1929">1929</option>
                    <option value="1928">1928</option>
                    <option value="1927">1927</option>
                    <option value="1926">1926</option>
                    <option value="1925">1925</option>
                    <option value="1924">1924</option>
                    <option value="1923">1923</option>
                    <option value="1922">1922</option>
                    <option value="1921">1921</option>
                    <option value="1920">1920</option>
                    <option value="1919">1919</option>
                    <option value="1918">1918</option>
                    <option value="1917">1917</option>
                    <option value="1916">1916</option>
                    <option value="1915">1915</option>
                    <option value="1914">1914</option>
                    <option value="1913">1913</option>
                    <option value="1912">1912</option>
                    <option value="1911">1911</option>
                    <option value="1910">1910</option>
                    <option value="1909">1909</option>
                    <option value="1908">1908</option>
                    <option value="1907">1907</option>
                    <option value="1906">1906</option>
                    <option value="1905">1905</option>
                    <option value="1904">1904</option>
                    <option value="1903">1903</option>
                    <option value="1901">1901</option>
                    <option value="1900">1900</option>
                  </select>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="UsrActSet">
                <center><h5>Country</h5></center>
                <input type="text" id="id" name="id" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />
                <select name="country"  class="CPageInput" >
                  <option value="">Country...</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AG">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AG">Antigua &amp; Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AA">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BL">Bonaire</option>
                  <option value="BA">Bosnia &amp; Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="BC">British Indian Ocean Ter</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="IC">Canary Islands</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CD">Channel Islands</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CI">Christmas Island</option>
                  <option value="CS">Cocos Island</option>
                  <option value="CO">Colombia</option>
                  <option value="CC">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CT">Cote D'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CB">Curacao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="TM">East Timor</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FA">Falkland Islands</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="FS">French Southern Ter</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GB">Great Britain</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GN">Guinea</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HW">Hawaii</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IA">Iran</option>
                  <option value="IQ">Iraq</option>
                  <option value="IR">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="NK">Korea North</option>
                  <option value="KS">Korea South</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macau</option>
                  <option value="MK">Macedonia</option>
                  <option value="MG">Madagascar</option>
                  <option value="MY">Malaysia</option>
                  <option value="MW">Malawi</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="ME">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="MI">Midway Islands</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Nambia</option>
                  <option value="NU">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="AN">Netherland Antilles</option>
                  <option value="NL">Netherlands (Holland, Europe)</option>
                  <option value="NV">Nevis</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NW">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau Island</option>
                  <option value="PS">Palestine</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PO">Pitcairn Island</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="ME">Republic of Montenegro</option>
                  <option value="RS">Republic of Serbia</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="NT">St Barthelemy</option>
                  <option value="EU">St Eustatius</option>
                  <option value="HE">St Helena</option>
                  <option value="KN">St Kitts-Nevis</option>
                  <option value="LC">St Lucia</option>
                  <option value="MB">St Maarten</option>
                  <option value="PM">St Pierre &amp; Miquelon</option>
                  <option value="VC">St Vincent &amp; Grenadines</option>
                  <option value="SP">Saipan</option>
                  <option value="SO">Samoa</option>
                  <option value="AS">Samoa American</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome &amp; Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="OI">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syria</option>
                  <option value="TA">Tahiti</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad &amp; Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TU">Turkmenistan</option>
                  <option value="TC">Turks &amp; Caicos Is</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States of America</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VS">Vatican City State</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="VB">Virgin Islands (Brit)</option>
                  <option value="VA">Virgin Islands (USA)</option>
                  <option value="WK">Wake Island</option>
                  <option value="WF">Wallis &amp; Futana Is</option>
                  <option value="YE">Yemen</option>
                  <option value="ZR">Zaire</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select><br/>
                <center><h5>Website</h5></center>
                <input class="UsrActSetInput" placeholder="http://" name="website"value="<?= $user->website ?>" type="text"/>
                <center><h5>Youtube</h5></center>
                <input class="UsrActSetInput" placeholder="http://www.youtube.com/" value="<?= $user->youtube ?>"name="youtube" type="text"/>
                <center><h5>Facebook</h5></center>
                <input class="UsrActSetInput" placeholder="http://www.facebook.com/"value="<?= $user->facebook ?>" name="facebook" type="text"/>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="UsrActSet">
                <center><h5>Twitter</h5></center>
                <input class="UsrActSetInput" placeholder="http://www.twitter.com/" value="<?= $user->twitter ?>"name="twitter" type="text"/>
                <center><h5>Tumblr</h5></center>
                <input class="UsrActSetInput" placeholder="http://www.tumblr.com/"value="<?= $user->tumblr ?>" name="tumblr" type="text"/>
                <center><h5>Other Email</h5></center>
                <input class="UsrActSetInput" placeholder="Email" name="otheremail"value="<?= $user->otheremail ?>" type="email"/>
                <center><h5>Account Visability</h5></center>
                <select name="accountvis"  class="CPageInput" >
                  <option value="public">Public</option>
                  <option value="friendsoffriends">Friends of Friends</option>
                  <option value="friends">Friends</option>
                  <option value="lockdown">Lock Down</option>
                </select><br/>
              </div>
            </div>
              <button class="SubmitBtnSettings"><h5>Update</h5></button>
            
          </div>
        </fieldset>
      </form>
      <?php endwhile; ?>
  </div>
  <div class="UploadBackGroundImgCont">
<form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/profile_background_up.php" enctype="multipart/form-data">
  <fieldset>
    <h6>Profile Background</h6>

    <span style="width:100%;color:black;margin:0px;padding:0px;" class="btn btn-outline btn-default btn-sm  btn-file">
          <span style="font-size:large;color:#333333" class="glyphicon glyphicon-file"></span>
          <span style="font-size:xx-small;color:#333333" class="glyphicon glyphicon-plus"></span>
          <input type="file" name="fileToUpload" multiple />
        </span>
                      <input type="text" id="UsrID" name="UsrID" class="MsgInputHidden" value="<?= $_SESSION['user']['id'] ?>" />

              <button class="SubmitBtnSettings"><h5>Update</h5></button>

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

              <button class="SubmitBtnSettings"><h5>Update</h5></button>

  </fieldset>
</form>
  </div>
</div>