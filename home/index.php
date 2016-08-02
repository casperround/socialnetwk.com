
<!DOCTYPE html>
<html lang="en-US">

<head>

  <title>Socialnetwk</title>

    <meta charset="utf-8">
    <meta name="author" content="Casper Round" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Create an account or login to Socialnetwk. Socialnetwk connects you and your friends, allowing you to share any media, and giving you the ability to change the site to how you want it, while connecting any type of social media" />
    <meta name="keywords" content="social,socialnetwk,network,media,community,friends,people,life,skills,pictures,video,films,music,login,register,sign up,artists,facebook,youtube,instagram,twitter,tumblr,google" />
    <meta name="robots" content="noindex,nofollow">
  <link rel="shortcut icon" type="image/png" href="https://www.socialnetwk.com/images/favicon.ico"/>
    <link rel="shortcut icon" type="image/png" href="https://www.socialnetwk.com/images/favicon.png"/>
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css" type='text/css'>
  <link rel="stylesheet" href="css/responsive_main.css" type='text/css'>
  <link rel="stylesheet" href="css/icons.css" type='text/css'>
  <!-- FONTS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Parisienne|Bad+Script|Tangerine|Great+Vibes|Cinzel+Decorative|Cinzel&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link href='https://fonts.googleapis.com/css?family=Tauri:regular' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Calligraffitti:regular' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montaga:regular' rel='stylesheet' type='text/css'>

<script src='https://code.jquery.com/jquery-2.1.0.min.js'></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.6.4.js"></script>




  <?php
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: https://www.socialnetwk.com');

?>
<?php
  require_once('connection.php');

  ?>
  
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
  
<?php


$stmt = $con->prepare("SELECT theme
        FROM users
        WHERE id = ?");
$stmt->bind_param('i', $_SESSION['user']['id']);
$stmt->execute();

if ($data = $stmt->get_result()->fetch_object()): ?>
    <link id="stylesheet" rel="stylesheet" href="<?=$data->theme?><?php if(empty($data->theme)):?>css/theme_default.css<?php endif;?>" type="text/css">
<?php else:?>
    <link id="stylesheet" rel="stylesheet" href="css/theme_default.css" type="text/css">
    <?php endif;?>
</head>


<body>
  <?php require_once('components/navbar.php'); ?>
<div class="Content_Container_Feed">

<div class="Feed_Content_Load_Load">
<?php require_once('elements/feed_load_refresh.php'); ?>

<?php
                    $UsrID = $_GET['id'];
include("elements/config.php");

$get_total_rows = 0;
$results = $mysqli->query("SELECT COUNT(*) FROM media");

if($results){
  $get_total_rows = $results->fetch_row(); 
}
//break total records into pages
$total_groups= ceil($get_total_rows[0]/$items_per_group); 
?>

<script type="text/javascript">
$(document).ready(function() {
  var track_load = 0; //total loaded record group(s)
  var loading  = false; //to prevents multipal ajax loads
  var total_groups = <?=$total_groups;?>; //total record group(s)
  
  $('#results').load("elements/feedloadscroll.php", {'group_no':track_load}, function() {track_load++;}); //load first group
  
  $(window).scroll(function() { //detect page scroll
    
    if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
    {
      
      if(track_load <= total_groups && loading==false) //there's more data to load
      {
        loading = true; //prevent further ajax loading
        $('.animation_image').show(); //show loading image
        
        //load data from the server using a HTTP POST request
        $.post('elements/feedloadscroll.php',{'group_no': track_load}, function(data){
                  
          $("#results").append(data); //append received data into the element

          //hide loading image
          $('.animation_image').hide(); //hide loading image once data is received
          
          track_load++; //loaded group increment
          loading = false; 
        
        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          
          alert(thrownError); //alert with HTTP error
          $('.animation_image').hide(); //hide loading image
          loading = false;
        
        });
        
      }
    }
  });
});
</script>





<div id="feed_main_load">



<ol id="results">
      </ol>
        <div class="animation_image" style="display:none" align="center">
          <div class="loader">
            <div class="loader__box loader__box--1"></div>
            <div class="loader__box loader__box--2"></div>
          </div>
        </div>
  </div>
</div>

</div>
<?php 
    if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
      
    }
    else{
      require_once('components/left_container_profile.php');
    }
    
  ?>
        
    
    
    



    


  <?php 
    if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])){
      
    }
    else{
      require_once('components/right_container_chat_noti.php');
    }
    
  ?>




</body>

</html>

