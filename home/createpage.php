<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->
<!-- AUTHOR CASPER JOHN ROUND -->
<!-- THIS CONTENT IS NOT TO BE USED PUBLICLY OR UNDER ANY DOMAIN NOT AUTHORIZED TO HOLD THIS CONTENT -->
<!-- PUBLIC RELEASE OF THIS CONTENT IS FORBIDDEN UNLESS GIVEN AUTHORITY BY THE AUTHOR -->
<!-- DISTRIBUTION OF THIS CONTENT IS ALSO FORBIDDEN -->
<!-- COPY RIGHT OF SOCIALNETWK.COM 2015 -->



<!DOCTYPE html>
<html lang="en-US">

<head>
	<!-- META -->
	<title>Socialnetwk - Create Page</title>
    <meta charset="utf-8">
    <meta name="author" content="Casper Round" />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="Create an account or login to Socialnetwk. Socialnetwk connects you and your friends, allowing you to share any media, and giving you the ability to change the site to how you want it, while connecting any type of social media" />
    <meta name="keywords" content="social,socialnetwk,network,media,community,friends,people,life,skills,pictures,video,films,music,login,register,sign up,artists,facebook,youtube,instagram,twitter,tumblr,google" />
    <meta name="robots" content="noindex,nofollow">
   	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
   	<link rel="shortcut icon" type="image/png" href="http://dev.socialnetwk.com/favicon.ico"/>
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/layout.css" type='text/css'>
	<!-- FONTS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Bad+Script|Tangerine|Great+Vibes|Cinzel+Decorative|Cinzel&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
  <?php
    session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)

      // redirect to index page if not superuser
header('Location: http://www.socialnetwk.com');

?>
<?php
	require_once('../connection.php');

	?>
	<?php
error_reporting(E_ERROR);
$page = $_SERVER['PHP_SELF'];
$sec = "0.5";
$db = new mysqli("localhost", "root", "nKyGWryQDhZvcpAzDKWQ", "pdo_ret");
if($db->connect_error) die("Could not connect to MySQL because of error number ".$db->connect_errno.": ".$db->connect_error);
$users = $db->query("SELECT firstname, id, lastname, video, image, text  FROM users");
?>
<?php

$users = $db->query("INSERT INTO sessions (usr_id, status) values (''".$_SESSION['user']['id']."',1')
WHERE not exists(SELECT * FROM sessions where usr_id='".$_SESSION['user']['id']."')")
?>
</head>


<body>
	<div class="Navbar">
			<nav id="navbar">
				<img class="Logo" src="../images/socialnetwk.png"/>
				<form action="search.php" method="GET" >
				<input class="Search" type="text" name="query"  placeholder="Search for people, pages, videos, etc"/>
				</form>
			  <ul>
			    <a href="index.php"><li>Home</li></a>
			    <a href="settings.php"><li>Settings</li></a>
			    <a href="profile.php?id=<?= $_SESSION["user"]["id"]?>"><li>Profile</li></a>
			    <a href="help.php"><li>Help</li></a>
			    <a href="discover.php"><li>Discover</li></a>
			    <a href="contact.php"><li>Contact</li></a>
			    <a href="logout.php"><li>Logout</li></a>
			  </ul>
			</nav>
	</div>
	
	
	
	<div class="CreatePageCont">
		<div class="CPageCont1">
				<form id="upload" method="post"  class="form-horizontal"action="http://www.socialnetwk.com/home/cpagepost.php" enctype="multipart/form-data">
				<fieldset>

			<div class="PageDetails">
				<center><h4>Details</h4></center>
				<h5>Name</h5>
				<input class="CPageInput" name="pname"  type="text"placeholder="Name"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				
				<h5>Category</h5>
				
				<select name="pcategory"  class="CPageInput" >
	<option value="marketing">Marketing</option>
	<option value="business">Business</option>
	<option value="events">Events</option>
	<option value="community">Community</option>
	<option value="advertising">Advertising</option>
	<option value="sports">Sports</option>
	<option value="vehicles">Vehicles</option>
	<option value="news">News</option>
</select>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Details</h5>
				<input class="CPageInput" name="pdetails"  type="text"placeholder="Details"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>About</h5>
				<input class="CPageInput" name="pabout"  type="text"placeholder="About"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
			</div>
		</div>
				<input class="MsgInputHidden" name="uID" value="<?= $_SESSION["user"]["id"] ?>"/>
				<input class="MsgInputHidden" name="author_id" value="<?= $_SESSION["user"]["id"] ?>"/>
		<div class="CPageCont2">
			<div class="PageContent">
				<center><h4>More Details</h4></center>
				<h5>Country</h5>
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
				</select>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Website</h5>
				<input class="CPageInput" name="pwebsite" type="text"  placeholder="www.examplepage.com"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Youtube Page</h5>
				<input class="CPageInput" name="pyoutube"  type="text" placeholder="www.youtube.com/"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Facebook Page</h5>
				<input class="CPageInput" name="pfacebook"  type="text" placeholder="www.facebook.com/"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<center><button class="SettingsBtn" style="border:0px;width:40%;height:50px;font-size:20px;">Create!</button></center>
			</div>
		</div>
		
		<!--
<div class="CPageCont4">
			<div class="PageInvite">
				<center><h4>Invite Friends</h4></center>
				<h5>Name</h5>
				<input class="CPageInput" name="pname" placeholder="Name"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Category</h5>
				<input class="CPageInput" name="pcategory" placeholder="Category"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>Details</h5>
				<input class="CPageInput" name="pdetails" placeholder="Details"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
				<h5>About</h5>
				<input class="CPageInput" name="pabout" placeholder="About"/>
				<div class="hr" style="width:100%;margin-top:15px;"><div class="hr-dot"></div></div>
			</div>
		</div>
-->
	</fieldset>
	</form>
	</div>
	
	
	
	
	
	
	
	
	
	
	

		
</body>


</html>