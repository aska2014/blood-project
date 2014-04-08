<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Blood bank </title>
    <meta name="description" content="free website template" />
    <meta name="keywords" content="enter your keywords here" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
</head>

<body>
<div id="main">

    <div id="menubar">
        <div id="welcome">
            <h1><a href="#">Blood bank</a></h1>
        </div><!--close welcome-->
        <div id="menu_items">
            <ul id="menu">
                <li class="current"><a href="home.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div><!--close menu-->
    </div><!--close menubar-->

    <div id="site_content">

        <div id="banner_image">
            <div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/home_1.jpg" alt="" />
                    <img src="images/home_2.jpg" alt="" />
                </div><!--close slider-->
            </div><!--close slider_wrapper-->
        </div><!--close banner_image-->

        <div class="sidebar_container">
            <div class="sidebar">
                <div class="sidebar_item">
                    <h2>Profile information</h2>
                    <p>
                        Full name: <?php echo $donor->full_name; ?><br />
                        Address: <?php echo $donor->address; ?><br />
                        Gender: <?php echo $donor->gender; ?><br />
                        Blood type: <?php echo $donor->blood_type; ?><br />
                        Location: (<?php echo $donor->gps_latitude; ?> , <?php echo $donor->gps_longitude; ?>)
                        <a href="logout">Logout</a>
                    </p>
                </div><!--close sidebar_item-->
            </div><!--close sidebar-->



        </div><!--close main-->

        <div id="footer">
        </div><!--close footer-->

</body>
</html>
