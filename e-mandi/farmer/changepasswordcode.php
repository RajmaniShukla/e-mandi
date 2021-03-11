<?php
session_start();
error_reporting(0);
$oldpass=$_POST['oldpass'];
//echo $oldpass;
$newpass=$_POST['newpass'];
//echo $newpass;
$confirmpass=$_POST['confirmpass'];
//echo $confirmpass;
include("connection.php");
$query="select * from farmer where User_name='$User_name'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$pp=$row['password'];
}
if($pp==$oldpass)
{
  if($oldpass==$newpass)
    {
	  echo "Old and New password are same"; 
	}
		else if($newpass==$confirmpass)
	  {
		  $query="update farmer set password='$newpass' where User_name='$User_name'";
		  mysql_query($query);
		  
		  session_destroy();
		  die("your password has been Changed.<a href='login.php'>RETURN</a>to the LOGIN PAGE");
		  
	  }
  else
	{
	  echo "New and Confirm password are not same";
	}
}
else
{
	echo "Old password are not same";
}

?>