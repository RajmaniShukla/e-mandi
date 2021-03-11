<?php
?>
<html>
    <head>
        
        <title>Customer Zone</title>
        <link href="css/userstyle.css" rel="stylesheet"/>
        <link href="css/menustyles.css"   rel="stylesheet" >
		<link rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/tms-0.4.1.js"></script>
	<script src="js/slider.js"></script>
    <script>
           var allimages=["banner.jpg","b.jpg","slider.jpg"];
           var cimgno=0;
           function moveslider()
           {
               var im=document.getElementById("imslide");
               im.src="images/"+allimages[cimgno];
               cimgno++;
               if(cimgno==allimages.length)
                   {
                       cimgno=0;
                   }
               window.setTimeout("moveslider()",3000);
               
           }
        </script>
    </head>
    <body onload="moveslider()" oncontextmenu="return false">    
		<div class="main-bg">
                <div id="wrapper">
                <div id="header">
                    <div id="logo">
                        <img src="images/logo.png" width="150" height="150" />
                    </div>
                    <div id="sitetittle">
                      <img src="images/banner.png" width="850" height="150" style="border-radius: 70px 50px 0px 0px;"/> 
                    </div>
                </div>
                <div id="cssmenu">
                    <ul>
                        <li class="active"><a href="cusprof.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="review.php">Review</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                </div>
                <div id="main">
                    
                        <img id="imslide"  width="997px" height="600px" />
                    
                </div>
                <div id="footer">
                    <div class="subfooter">
                        &copy; Copyright to e-mandi 
                    </div>
                    <div class="subfooter">
                        Developed By<br>
                        <br>
                        
                    </div>
                </div>
        </div>
                                 
        </form>
		</div>
    </body>
</html>
