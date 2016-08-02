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
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
.Navbar {
  margin-left: 35%;
  margin-right: 35%;
  top:20px;
  background:#efefef;
  border-radius: 5px;
  width:30%;
  height:60px;
  padding:3px;
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
<div class="Navbar">
  <div class="row">
    <div class="col-xs-3">
      <a href="index.php"><center><span class="glyphicon glyphicon-user icon"></span><br/>
      <span class="label">Register/Login</span></center></a>
    </div>

    <div class="col-xs-3">
      <a href="home/search-home.php"><center><span class="glyphicon glyphicon-search icon"></span><br/>
      <span class="label">Search</span></center></a>
    </div>

    <div class="col-xs-3">
      <a href="home/discover.php"><center><span class="glyphicon glyphicon-leaf icon"></span><br/>
      <span class="label">Discover</span></center></a>
    </div>

    <div class="col-xs-3">
      <a href="contact.php"><center><span class="glyphicon glyphicon-envelope icon"></span><br/>
      <span class="label">Contact/About</span></center></a>
    </div>
  </div>
</div>
