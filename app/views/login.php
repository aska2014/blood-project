<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Blood-bank website</title>
  <meta name="description" content="website template" />
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
	    <h1 style=""><a href="#">Blood-bank website</a></h1>
	    
	  </div><!--close welcome-->
      <div id="menu_items">
	    <ul id="menu">
          <li><a href="home.html">Home</a></li>
          <li class="current"><a href="login.html">Login</a></li>
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
            <h2>Our Website</h2>
            <p>Welcome to our website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   		   
	   <div id="content">
        <div class="content_item">
		  <div class="form_settings">
		  
		  
		 <header><h1>
		  <p>welcome Donor</p>
		  
		  please enter your name and parcode <mark>correctly</mark>.
		       </h1></header>
		       <form action="" method="post">
		           Donor_name: <input required="required" placeholder="Enter Name" type="text" name="full_name"><br />
		           Donor_card: <input required="required" placeholder="Enter Parcode" type="text" name="card_id"><br />
		           <input type="submit" name="submit" value="Login">
		       </form>
		       <br />
		       
		       <a href="file:///C:/wamp/www/blood_bank/form_experimentation.html">Not have parcode,Want do experimentation</a><br />
		       <a href="file:///C:/wamp/www/blood_bank/form_forget.html">Forget my parcode</a><br /> 
          </div><!--close form_settings-->  

	  
        <div class="content_blue_container_box">
         <h4>Latest News</h4>
	      <p> to more information about us read more ..</p>
	      <div class="readmore">
		    <a href="#">Read more</a>
		  </div><!--close readmore-->
	    </div><!--close content_blue_container_box-->      
	    <br style="clear:both"/>
      </div><!--close content_blue--> 	
	</div><!--close site_content--> 
 
  </div><!--close main-->
  
  <div id="footer">
</div><!--close footer-->  	
  
</body>
</html>
