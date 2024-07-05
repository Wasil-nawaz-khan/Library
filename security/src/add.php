<?php

include("config.php");

$n=$_POST['bookname'];

$p=$_POST['price'];

$a=$_POST['author'];

$q="insert into books(bookname,price,author) values('$n',$p,'$a')";

$result=mysqli_query($con,$q);

if($result)

{
	echo "Data has been inserted";
}
 else

{
	echo "Problem in inserting data";
}

?>