<?php
?>
<html>
    <head>
       <link href="css/userstyle.css" rel="stylesheet"/>
        <link href="css/menustyles.css"   rel="stylesheet" >
		<link rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/tms-0.4.1.js"></script>
	<script src="js/slider.js"></script>
    </head>
    <body>
     
             <form action="/changepasswordcode.jsp"method="post">
           
                <div id="wrapper">
                <div id="header">
                    <div id="logo">
                        <img src="images/logo.png" width="150" height="150" />
                    </div>
                    <div id="sitetittle">
                        <img src="images/banner.png" width="850" height="150" style="border-radius: 70px 50px 0px 0px;"/>
                    </div>
                </div>
                <div id="contain1">
                    <div id="date">
                        Current date:
                        
                    </div>
                    <div id="name">
                        Hello,
                        
                    </div>
                </div>
                <div id="cssmenu">
                    <ul>
                        <li><a href="cusprof.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="review.php">Review</a></li>
                        <li class="active"><a href="usercode/changepassword.php"> Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                </div>
                <div id="main">
                    
                        <center>
                            
                        <table style="margin-top: 20px;">
                            <br>
                            <img src="images/keys.ico" height="100" width="80"/>
                            <tr>
                                
                                <td><input type="password" required="true" placeholder="Old Password" name="oldpass" style="height: 30px;width: 300px;" /></td>
                            </tr>
                            <tr>
                                 
                                <td><input type="password" required="true" placeholder="New Password" name="newpass" style="height: 30px;width: 300px;" /></td>
                            </tr>
                            <tr>
                                
                                <td><input type="password" required="true" placeholder="Confirm Password" name="confirmpass" style="height: 30px;width: 300px;" /></td>
                            </tr>
                            <tr>
                                
                                <td><input type="submit" value="Change Password" style="height: 50px;width: 300px; background-color: #66ffcc;"/>
                            </tr>
                        </table> 
                        </center>
                    
                </div>
                <div id="footer">
                    <div class="subfooter">
                        &copy; Copyright to CRM 
                    </div>
                    <div class="subfooter">
                        Developed By<br>
                        Enroll No.SPI/ST/2017/368<br>
                        
                    </div>
                </div>
        </div>
                                 
        </form>
    </body>
</html>
