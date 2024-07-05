<?php

include("config.php");

$n=strtolower($_POST['bookname']);


$q="delete from  books where bookname='$n'";

$result=mysqli_query($con,$q);

if($result)

{
	echo "Data has been Deleted";
}
 else

{
	echo "Problem in deleting data";
}

?>