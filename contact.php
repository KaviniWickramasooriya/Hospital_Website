<?php

$link=mysqli_connect("localhost","root","","contact");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

$sql="insert into contactdata values('$name','$email','$message')";

if(mysqli_query($link,$sql))
{
echo ("Data Inserted");
}
else
{
echo ("Data Not Inserted");
}

?>