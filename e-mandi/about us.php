<?php
?>
<html lang="en">
<head>
<title>E-MANDI</title>
<link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>





<link href="css/indexcss.css" rel="stylesheet" type="text/css">



</head>
<body>
<div class="main-bg">
<header>
    <div class="inner">
      <h1 class="logo"><a href="index.html">E-MANDI</a></h1>
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="products.php">product & pricing</a></li>
          <li> <a href="farmer.php">farmer</a>
          <li> <a href="customer.php">Customer</a>     
          <li><a href="about us.php">About us</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
</header>
<div class="container_24">
        <div class="grid_24 content-bg">
		
		<div id="content222">
		<h2 class="heading-1"><center>Welcome!</center></h2>
                <p class="p1"><center><strong> Rajasthan E-MANDI, a great idea. </strong></center> </p>
                <p class="hr-border-1" style="margin-left:35px;margin-right:40px";> 
				<center>We are providing a single platform where farmer and common man can interact. 
				They can buy & sell the product digitally.
				User will have the option to search the registered farmer into his own locality.
				He can increase & decrease the range of distance to search the farmer with desired commodity. 
				Once the farmer with desired commodity is found the user can book the good with two option. 
				Either he will pickup the product on his own or he will accept to pay the additional packaging
				& courrirer charges to the farmer. In this case farmer have to agree priorly for packaging 
				and delivering according to need.
				Farmer will have the option to know the demand directed at him. 
				He can also see the unfulfilled demands all around the country. 
				In case he can fulfill the requirement, he can send the notification to the user.</center>
</div>
</div>				
</div>
<div id="map">
	<script>
      function initMap() {
        var uluru = {lat: 26.8854479, lng: 75.6504697};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUF2dRBZ19wkMbv9ZTh_zqB7pvWknEEFY&callback=initMap">
    </script>
</div>
</div>
</body>
</html>