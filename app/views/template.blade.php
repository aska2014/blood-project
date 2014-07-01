<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Life drop | Give blood, save life</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                maxwidth: 1600,
                speed: 600
            });
        });
    </script>
</head>
<body>
<!---start-wrap--->
<div class="wrap">
    <!---start-header--->
    <div class="header">
        <!---start-logo--->
        <div class="logo">
            <a href="home.html"><img src="images/logo.png" /></a>
        </div>
        <!---start-logo--->
        <!---start-top-nav--->
        <div class="top-nav">
            <ul>
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                @if(Session::get('login') === 'true')
                <li><a href="profile.html">Profile</a></li>
                @else
                <li><a href="login.html">Login</a></li>
                @endif
                <li><a href="contact.html">Contact</a></li>
                <li><a href="map.html">Map</a></li>
            </ul>
        </div>
        <div class="clear"> </div>
        <!---End-top-nav--->
    </div>
</div>
<!---End-header--->