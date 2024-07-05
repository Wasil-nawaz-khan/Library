<?php

session_start();
include("config.php");
$u=$_POST['username'];
$p=$_POST['password'];
$q= "select * from admin where username='$u' and password='$p'";

$result=mysqli_query($con,$q);

$rows=mysqli_num_rows($result);

if($rows)
{
	$_SESSION['username']=$u;
	$_SESSION['Message']="Welcome Admin";
	header("location:http://localhost/Library/Project/Home.php");
}


?>