<?php

$link=mysqli_connect("localhost","root","","appointment");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$telno=$_REQUEST['subject'];
$message=$_REQUEST['message'];

$sql="insert into contactdata values('$name','$email','$subject','$message')";

if(mysqli_query($link,$sql))
{
echo ("Data Inserted");
}
else
{
echo ("Data Not Inserted");
}

?>