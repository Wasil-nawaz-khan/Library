<?php
	include("header.php");
	include("validate_admin.php");
?>
	<div id="content">

		<form action="delete.php" method="POST">
			<h1>Enter Details to delete Books</h1>
			Book Name: <select name="bookname" required>
				<option value="">Select book to be Deleted</option>
				
				<?php
				include("config.php");

				$q="select * from books";

				$result=mysqli_query($con,$q);

				$totalrows=mysqli_num_rows($result);

				foreach ($result as $key => $value) {
					echo "<option>".$value["bookname"]."</option>";
				}

				/* NOTE: This is with FOR LOOP and above is FOREACH LOOP.
				for($i=0;$i<$totalrows;$i=$i+1)
				{
						$rows=mysqli_fetch_array($result);
						echo "<option>".$rows["bookname"]."</option>";
				}*/

				?>

			</select><br><br>



			
			<input type="submit" name="" value="Delete Book">
		</form>
	</div>
	
<?php
	include("footer.php");
?>