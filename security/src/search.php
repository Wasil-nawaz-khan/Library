<?php

include("config.php");

$bookname=$_POST["bookn"];

if(!($bookname==""))
{




$q="select * from books where bookname like '%$bookname%'";

$q1="select * from books where bookname like '%".$bookname."%'";

$result=mysqli_query($con,$q1);

$row=mysqli_num_rows($result);



echo "<table border=1 >";

echo "<tr><th>Book Id</th><th>Book Name</th><th>Price</th><th>Author</th></tr>";




foreach ($result as $key => $value) 
{
					echo "<tr>";
					echo "<td>";
					echo $value["id"];
					echo "</td>";

					echo "<td>";
					echo $value["bookname"];
					echo "</td>";

					echo "<td>";
					echo $value["price"];
					echo "</td>";

					echo "<td>";
					echo $value["author"];
					echo "</td>";
					echo "</tr>";
	}

	echo "</table>";

}
?>