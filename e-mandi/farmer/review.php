
<!DOCTYPE html>
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
         
             <form action="usercode/reviewcode.jsp" method="post">
           
                <div id="wrapper">
                <div id="header">
                    <div id="logo">
                        <img src="images/logo.png" width="150" height="150" />
                    </div>
                    <div id="sitetittle">
                      <img src="images/banner2.jpg" width="850" height="150" style="border-radius: 70px 50px 0px 0px;"/> 
                    </div>
                </div>
                <div id="cssmenu">
                    <ul>
                        <li><a href="farprof.php">Home</a></li>
                        <li><a href="cr.php">Customer req.</a></li>
                        <li class="active"><a href="review.php">Review</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>

                </div>
                    <div id="main" style="background-color: #0F9E5E;">
                    <div style="float: left; height: 600px; border-right: 1px solid;width: 500px; padding-left: 40px;">
                        <h1 style="text-align: center; color: blue">Submit Your Review</h1>
                        <table>
                            <tr>
                                <td style="font-size: 30px;">Select Rating<select name="rating" style="font-size: 20px; width: 60px;">                                     
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                       </select> 
                                </td>  
                            </tr>
                            <tr>
                                <td><textarea name="reviewtext" placeholder="Text Review" required="true" style="height: 300px; background-color:#99ffff; width: 300px; font-size: 15px; border:1px solid;"></textarea></td>   
                            </tr>
                            <tr>
                                <td><input type="submit" value="Submit" style="height: 30px; width: 150px; font-size: 15px; border:1px solid; border-radius: 10px; background-color: #ff3333;" /></td>
                            </tr>
                        </table>
                    </div>
                        <div style="float: right; height: 600px; width: 400px; padding-right: 20px;">
                            <h1>Submitted Reviews</h1>
                        <table border="1" >
                            <tr>
                                <th>S.No. </th>
                                <th>Review</th>
                                <th>Rating</th>
                                <th>Posted By</th>
                                <th>Posted Date</th>
                            </tr>
                            
                        </table>
                        </div>
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
