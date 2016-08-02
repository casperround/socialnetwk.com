<!--
- - - - - - - - - - - - - - - - - - - AUTHOR - - - - - - - - - - - - - - - - - - - - - - - -
 ██████╗ █████╗ ███████╗██████╗ ███████╗██████╗     ██████╗  ██████╗ ██╗   ██╗███╗   ██╗██████╗ 
██╔════╝██╔══██╗██╔════╝██╔══██╗██╔════╝██╔══██╗    ██╔══██╗██╔═══██╗██║   ██║████╗  ██║██╔══██╗
██║     ███████║███████╗██████╔╝█████╗  ██████╔╝    ██████╔╝██║   ██║██║   ██║██╔██╗ ██║██║  ██║
██║     ██╔══██║╚════██║██╔═══╝ ██╔══╝  ██╔══██╗    ██╔══██╗██║   ██║██║   ██║██║╚██╗██║██║  ██║
╚██████╗██║  ██║███████║██║     ███████╗██║  ██║    ██║  ██║╚██████╔╝╚██████╔╝██║ ╚████║██████╔╝
 ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝     ╚══════╝╚═╝  ╚═╝    ╚═╝  ╚═╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═══╝╚═════╝ 
- - - - - THIS CONTENT IS NOT TO BE USED PUBLICLY OR UNDER ANY DOMAIN - - - - - - - - - - - 
- - - - - - - - - - -  NOT AUTHORIZED TO HOLD THIS CONTENT - - - - - - - - - - - - - - - - - 
- - - - - - - - - - -  PUBLIC RELEASE OF THIS CONTENT IS - - - - - - - - - - - - - - - - - -
- - - - - - - - - FORBIDDEN UNLESS GIVEN AUTHORITY BY THE AUTHOR - - - - - - - - - - - - - -
- - - - - - - - - DISTRIBUTION OF THIS CONTENT IS ALSO FORBIDDEN - - - - - - - - - - - - - -
- - - - - - - - - - - COPY RIGHT OF Casper John Round 2015 - - - - - - - - - - - - - - - - - - 
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


-->
<!DOCTYPE html>
<html lang="en-US">

<head>
  <!-- META -->
  <title>Socialnetwk</title>
  <script src='//assets.codepen.io/assets/editor/live/console_runner-d0a557e5cb67f9cd9bbb9673355c7e8e.js'></script>
  <script src='//assets.codepen.io/assets/editor/live/events_runner-21174b4c7273cfddc124acb0876792e0.js'></script>
  <script src='//assets.codepen.io/assets/editor/live/css_live_reload_init-7618a0de08795409d8f6c9ef6805f7b2.js'></script>
  <meta charset='UTF-8'>
  <meta name="robots" content="noindex">
  <link rel="canonical" href="http://codepen.io/marcobiedermann/pen/Fybpf" />
    <link rel="stylesheet" href="style.css" type='text/css'>
  <link rel="stylesheet" href="home/css/responsive_main.css" type='text/css'>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<style class="cp-pen-styles">@import url(http://weloveiconfonts.com/api/?family=fontawesome);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-color: #2c3338;
  color: #606468;
  font: 400 0.875rem/1.5 "Open Sans", sans-serif;
  margin: 0;
  min-height: 100%;
}

a {
  color: #eee;
  outline: 0;
  text-decoration: none;
}
a:focus, a:hover {
  text-decoration: underline;
}

input {
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-transition: background-color .3s;
  transition: background-color .3s;
}

.site__container {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 3rem 0;
}

.form input[type="password"], .form input[type="text"], .form input[type="submit"] {
  width: 100%;
}
.form--login {
  color: #606468;
}
.form--login label,
.form--login input[type="text"],
.form--login input[type="password"],
.form--login input[type="submit"] {
  border-radius: 0.25rem;
  padding: 1rem;
}
.form--login label {
  background-color: #363b41;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}
.form--login input[type="text"], .form--login input[type="password"] {
  background-color: #3b4148;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.form--login input[type="text"]:focus, .form--login input[type="text"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
  background-color: #434A52;
}
.form--login input[type="submit"] {
  background-color: #ea4c88;
  color: #eee;
  font-weight: bold;
  text-transform: uppercase;
}
.form--login input[type="submit"]:focus, .form--login input[type="submit"]:hover {
  background-color: #d44179;
}
.form__field {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 1rem;
      height: 50px;
    width: 350px;
}
.form__input {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.align {
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
}

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.text--center {
  text-align: center;
}

.grid__container {
  margin: 0 auto;
  max-width: 37rem;
  width: 90%;
}



    @media (max-width:770px) {
      .container {
        height:100%;
        padding:0px;
        
      }
      .wrapper {
        overflow-y:scroll;
        height:100%;
      }

    }
          .Navbar_Tabs {
          text-align: center;
          padding:3px;
          color:white;
          height:40px;
          background:#656D78;
          -moz-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
           -webkit-box-shadow: inset 0 3px 8px rgba(0,0,0,.4);
           box-shadow: inset 0 3px 8px rgba(0,0,0,.24);
        }
        .Navbar_Tabs h4 {
          color:white;
          font-size: 13px;
          font-weight: 200;
          
        }
        
/*//--navbar--//
*/


.Navbar {

  position: fixed;
  display:inline-block;

  z-index: 100;

}
.MainLogo {
  height:40px;
  left:10px;
  width:40px;
  border-radius: 50px;
  display: inline-block;
  bottom:10px;
  position: relative; 
}
.Navbar h3 {
  color:white;
  display: inline-block;
  padding:0px;
  margin-right:5px;
  margin-top:10px;
}
.Navbar input {
    height:40px;
    width:50%;
    margin-top:0px;
    top:0px;
    padding:0px;
    position: relative;
    border:0px;
    border-radius: 0px;
  }
  .Mobile_Navbar {
    display:none;
  }
  .col-xs-2 {
    padding:0px;
  }
  .row {
    width:100%;
  }
  img {
    width:250px;
    height:auto;
    position: relative;
  }
@-webkit-keyframes greenPulse {
  from {  -webkit-filter: drop-shadow(0px 0px 0px rgba(255,255,255,0.80));
 }

  50% { -webkit-filter: drop-shadow(0px 0px 8px rgba(0, 231, 255, 0.8)); }
  to {-webkit-filter: drop-shadow(0px 0px 0px rgba(255,255,255,0.80))}
}


.shadowfilter {
  -webkit-animation-name: greenPulse;
  -webkit-animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
}



</style></head><body>
<body class="align">

  <div class="site__container">
    <?php require_once('components/navbar.php'); ?>

  <center><img class="shadowfilter" src="https://www.socialnetwk.com/images/socialnetwk.png"></center>
    <div class="grid__container">

      <form action="login_post" method="post" class="form form--login">
      
        <div class="form__field">
          <label class="glyphicon glyphicon-user" for="login__username"><span class="hidden">Username</span></label>
          <input name="email" id="login__username" type="text" class="form__input" placeholder="Email or Username" required>
        </div>

        <div class="form__field">
          <label class="glyphicon glyphicon-lock" for="login__password"><span class="hidden">Password</span></label>
          <input name="password" id="login__password" type="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" value="Sign In">
        </div>

      </form>

      <p class="text--center">Not a member? <a href="signup.php">Sign up now</a> <span class="fontawesome-arrow-right"></span></p>

    </div>

  </div>

</body>

</body></html>