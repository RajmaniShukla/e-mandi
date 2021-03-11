<?php
$rating=$_POST['rating'];
//echo $rating;
//echo"<br/>";
$reviewtext=$_POST['reviewtext'];
//echo $reviewtext;
//echo"<br/>";
include("connection.php");
$query="insert into review(rating,reviewtext)values('$rating','$reviewtext')";
$res=mysql_query($query);
?>