<?php
include('profileconfig.php');
require_once('connection2.php');
require_once('controot.php');
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="http://socialnetwk.com/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="Socialnetwk is a site which connects you and your friends, allowing you to share any media, and giving you the ability to change the site to how you want it, while connecting any type of social media." />
    <meta name="keywords" content="social, socialnetwk, network, media, community, friends, people, life, skills, pictures, video, films, music, login, register, sign up, artists" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Socialnetwk</title>
    <meta name="Author" content="Casper Round" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/javascript.js" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<?php
require_once('controot.php');
    $users = $db->query("SELECT firstname, id, lastname, video, image, text  FROM users");
error_reporting(E_ERROR);
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)
?>
<h1><?= $_SESSION["user"]["firstname"] ?> <?= $_SESSION["user"]["id"] ?></h1>
</head>
<?php
if(isset($_GET['id']))
{
        $id = intval($_GET['id']);
        $dn = mysql_query('select firstname, lastname, age, id, background from users where id="'.$id.'"');
        if(mysql_num_rows($dn)>0)
        {
                $dnn = mysql_fetch_array($dn);
if($dnn['id']!='')
{
}
else
{
        echo 'This user dont have an avatar.';
}
?></td>
        <td class="left"><h3 style="margin-left:1%px;position:relitive;"align="left"><?php echo htmlentities($dnn['firstname'], ENT_QUOTES, 'UTF-8'); ?> <?php echo $dnn['id'] ?> <?php echo $dnn['lastname'] ?></h3>
        <br />
        <div class="UserProfileOptions">
       
       
<?php
$servername = "localhost";
$username = "root";
$password = "nKyGWryQDhZvcpAzDKWQ";
$dbname = "pdo_ret";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE friends SET status='1' WHERE sender=".$dnn['id']." AND recipient=".$_SESSION["user"]["id"]."";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
       
    <?php
        }
        else
        {
                echo 'This user dont exists.';
        }
}
else
{
        echo 'The user ID is not defined.';
}


?>  

  
</html>