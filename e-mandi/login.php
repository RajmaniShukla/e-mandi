<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
 echo"<script type='text/javascript'>alert('Invalid Usert_name or Password');</script>";
}
if($msg==2)
{
 echo "logout sucessfully!!!!";
}
if($msg==3)
{
 echo "first login!!!!";
}
?>
<html>
<head>
<title>E-MANDI</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loginstyle.css">
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
          <li><a href="contacts.php">contacts</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
     <form action="logincode.php" method="POST">
         <center><div id="profile">
             <div id="menu" >
                 <table style="margin-top: 40px;font-size: 25px;font-family:serif;">
                     <tr><h1 style="font-size: 40px;font-style: italic;">LOGIN PAGE!!</h1></tr>
                     <tr><td><h3>who you are?</h3>                     
             <select name="sel">
                 <option>Farmer</option>
                 <option>Customer</option>
             </select><BR><BR>
             <h5>User_name</h5><input type="text" name="User_name" style="height:25px;width:200px;">
             <h5>Password</h5><input type="password" name="Password" style="height:25px;width:200px;"><br><br>
             <INPUT TYPE="SUBMIT" style="height:25px;width:100px; background-color:transparent;color:black;font-weight: bold; font-size:20px;">
                 </table>
                         <br><br><br><br><br><br><br><br><br><br>
                
                 </div>
                 </div>
                 </center>
             </header>
             </div>

      
             </body>
</html>