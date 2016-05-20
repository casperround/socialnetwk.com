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

    <!-- Bootstrap -->

    <!-- Bootstrap override css file -->
    <!-- Latest compiled and minified JavaScript -->
    <link href="js/javascript.js" rel="stylesheet">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<?php
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION["user"]) or !is_array($_SESSION["user"]) or empty($_SESSION["user"])
)
require_once('controot.php');
header('Location: index.php');
mkdir('users/'.$_SESSION["user"]["id"])
?>
  </head>
<h1 id="title"><b>Saruav.</b></h1>

<style>
#title {
font-family: "Times New Roman", Times, serif;
color: #FFF;
}
#navbar {
color: #FFF;
top: 10%;
left: 0.5%;
  position: absolute;
}



.search-form .form-group {

  float: right !important;
  position: absolute;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
    position: absolute;
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 50%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}








body{
  background:url('http://www.wallpaperup.com/uploads/wallpapers/2012/08/30/12087/3574f899daef41d2f145eba13ff7840f.jpg');
  background-size:100% 100%;
  background-attachment: fixed; 
  background-repeat:no-repeat;
  font-family: 'Open Sans', sans-serif;
  padding-bottom: 40px;
}
</style>

<hr>