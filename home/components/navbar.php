
  <?PHP
$dbhost   = "localhost";
      $dbname   = "pdo_ret";
      $dbuser   = "root";
      $dbpass   = "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp";
       
      // database connection
      $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
      $con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
// decode the location you want to visit
  $link = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d') ."\n";
$now = time(); $utc_time = $now - intval(date('Z', $now));
$time = date('H:i:s', $now);
$user_id = $_SESSION['user']['id'];
// update the number of times this particular location has been visited in your database
$sql = "INSERT INTO page_visits (ip,date,time,link,user_id)
VALUES ('$ip','$date','$time','$link','$user_id');";

$q = $conn->prepare($sql);
              $q->execute(array(':sas'=>$ip,':asas'=>$date,':asafs'=>$time,':asafsa'=>$link,':asafsas'=>$user_id));
              
              
                $con = mysqli_connect('localhost','root','pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp','pdo_ret');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

?>
<style>
body {
  overflow-x:hidden;
}



.Navbar {
width:100%;
height:40px;
top:0px;
position: fixed;
  background:#efefef;
  padding:0px;
}


</style>


<?php if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])): ?>
<style>

@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
  .Navbar {
    display:none;
  }
  .Navbarr {
    display: none;
  }
}
@media (max-width:770px) {
  .Navbar {
    display:none;
  }
  .Navbarr {
    display: none;
  }
}

.Navbarr {
  display:block;
}
.Navbar {
    display:none;
  }
</style>
<?php else:?>
<style>
@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {
  .Navbar {
    display:none;
  }
  .Navbarr {
    display: none;
  }
}
@media (max-width:770px) {
  .Navbar {
    display:none;
  }
  .Navbarr {
    display: none;
  }
}

.Navbarr {
  display:none;
}

</style>
<?php endif;?>
<div class="Navbar">
  <div class="row">
    <div class="col-xs-3">
      <span class="SocialnetwkTitle">Socialnetwk</span>
    </div>
    <div class="col-xs-3">
      <form class="search" action="search.php" method="GET">
  <input type="search" name="query" class="search" placeholder="Search here..." required>
  <button type="submit" class="SearchBtn"><span class="glyphicon glyphicon-search icon"></button>
</form>   
    </div>
   <div class="col-xs-6">
    <div class="LittleNav">
      <div class="row">
        <div class="col-xs-3">
          <a href="index.php"><center><span class="glyphicon glyphicon-user icon"></span><br/>
     </center></a>
        </div>
        <div class="col-xs-3">
        <a href="search-home.php"><center>
       
     <script>

function loadlink(){
    $('#notifications').load('message_notification.php',function () {
         $(this);
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 5000);


function loadlinkk(){
    $('#notimessage').load('notification_messages.php',function () {
         $(this);
    });
}

loadlinkk(); // This will run on page load
setInterval(function(){
    loadlinkk() // this will run after every 5 seconds
}, 5000);
</script>
<div id="notifications">


  </div>

        </span><br/>
      </center></a>
        </div>
        <div class="col-xs-3">
          <a href="discover.php"><center><span class="glyphicon glyphicon-leaf icon"></span><br/>
      </center></a>
        </div>
        <div class="col-xs-3">
          <a href="contact.php"><center>

<div id="notimessage">


  </div>

          <br/>
          </center></a>
        </div>
      </div>
    </div>
   </div>
    
  </div>
</div>


<style>
.LittleNav {
  width:100%;
  height:40px;
}
.Navbarr {
  margin-left: 35%;
  margin-right: 35%;
  top:20px;
  background:#efefef;
  border-radius: 5px;
  width:30%;
  height:60px;
  padding:3px;
}
@media only screen and (min-device-width: 481px) and (max-device-width: 1030px) {

  .Navbarr {
    width:100%;
    margin:0px;
  }
}
@media (max-width:770px) {

  .Navbarr {
    width:100%;
    margin:0px;
  }
}


.label {
  color:white;
  text-align: center;
  font-weight: 400;
  padding:4px;
}
.icon {
  padding:4px;
  text-align: center;
  font-size: 30px;
  box-shadow:inset 0px 2px 3px rgba(239,239,239,0.5);
}
input.search {
  height:40px;
  top:-10px;
  border:0px;
  margin:0px;
  background:white;
  right: -5px;
}
.SearchBtn {
   background-color: #565656;
    color: transparent;
    text-shadow: 0px 2px 3px rgba(239,239,239,0.5);
     -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
     position: relative;

    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    font-size: 15px;
    -webkit-font-smoothing: antialiased;
    height:40px;
    -moz-osx-font-smoothing: grayscale;
    border-left:1px solid #565656;
    border-right:0px;
    border-top:0px;
    border-bottom: 0px;
     box-shadow:inset 0px 2px 3px rgba(239,239,239,0.5);

}
.SocialnetwkTitle {
   background-color: #565656;
    color: transparent;
    text-shadow: 0px 2px 3px rgba(239,239,239,0.5);
     -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
     position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    font-size: 30px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
span {
    background-color: #565656;
    color: transparent;
    text-shadow: 0px 2px 3px rgba(239,239,239,0.5);
}
span {
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
<div class="Navbarr">
  <div class="row">
    <div class="col-xs-3">
      <a href="index.php"><center><span class="glyphicon glyphicon-user icon"></span><br/>
      </center></a>
    </div>

    <div class="col-xs-3">
      <a href="search-home.php"><center><span class="glyphicon glyphicon-search icon"></span><br/>
      </center></a>
    </div>

    <div class="col-xs-3">
      <a href="discover.php"><center><span class="glyphicon glyphicon-leaf icon"></span><br/>
      </center></a>
    </div>

    <div class="col-xs-3">
      <a href="contact.php"><center><span class="glyphicon glyphicon-envelope icon"></span><br/>
      </center></a>
    </div>
  </div>
</div>
<style>
.label {
  color:white;
  text-align: center;
  font-weight: 400;
  padding:4px;
}
.icon {
  padding:4px;
  text-align: center;
  font-size: 30px;

}
span {
    background-color: #565656;
    color: transparent;
    text-shadow: 0px 2px 3px rgba(239,239,239,0.5);
}
span {
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

</style>