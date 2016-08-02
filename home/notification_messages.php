<style>
.iconPM {
color:#37BC9B;
  
  animation: blink 2s ease-in infinite;
}

@keyframes blink {
  from, to { opacity: 1 }
  50% { opacity: 0 }
}

</style>
<?php 
		  error_reporting(0);

		  ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com#login');

	
$link = mysql_connect("localhost", "root", "pdsx26Qp5TCRxq4rAxc9kKKE7GxnMzgHN6GzaWkp");
mysql_select_db("pdo_ret", $link);



$resultt = mysql_query("SELECT * FROM message WHERE recipient='".$_SESSION['user']['id']."' AND seen='0'", $link);
$num_rowss = mysql_num_rows($resultt);

$total = $num_rowss;
if ($num_rows == '0') {
    echo "<span class='glyphicon glyphicon-envelope icon'>";
} else {
    echo "<span class='glyphicon glyphicon-envelope icon iconPM'><span style='font-size:15px'>($total)</span>";
}
?>