<?php

include("config.php");

$n=strtolower($_POST['bookname']);

$p=$_POST['price'];

$a=$_POST['author'];


$q="update books set price=$p,author='$a' where bookname ='$n'";

$result=mysqli_query($con,$q);

if($result)

{
	echo "Data has been Updated";
}
 else

{
	echo "Problem in inserting data";
}

?>