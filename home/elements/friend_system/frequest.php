<?php
 mysql_connect('localhost', 'root', 'nKyGWryQDhZvcpAzDKWQ');
mysql_select_db('pdo_ret');
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)
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

    <h1><?= $dnn['id'] ?></h1>
    <h1><?= $_SESSION["user"]["id"] ?></h1>
<?php
$myID   = $dnn['id'];
$recipient   = $_SESSION["user"]["id"];
$servername = "localhost";
$username = "root";
$password = "Af2vaz93j68";
$dbname = "pdo_ret";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO friend_requests (sender, recipient)
VALUES ('$myID', '$recipient')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>