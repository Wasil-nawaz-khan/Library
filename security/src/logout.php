<?php

session_start();
$_SESSION['username']=null;
$_SESSION['Message']="Successfully Logged Out";

header("location:http://localhost/Library/Project/Home.php");

?>