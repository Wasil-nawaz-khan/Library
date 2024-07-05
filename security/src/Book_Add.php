<?php
	include("header.php");
	include("validate_admin.php");
?>
	<div id="content">

		<form action="add.php" method="POST">
			<h1>Enter Details to add Books</h1>
			Book Name: <input type="text" name="bookname"><br><br>

			Book Price : <input type="number" name="price"><br><br>

			Book Author:<input type="text" name="author"><br><br>

			<input type="submit" name="" value="Add Book">
		</form>
	</div>
	
<?php
	include("footer.php");
?>