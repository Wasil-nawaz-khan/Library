<?php
	include("header.php");
	include("validate_admin.php");
?>
	<div id="content">
      <script type="text/javascript">
      	function f1()
      	{
      		var p=document.getElementById('price');
      		if(p.value<50)
      		{
      			alert("Price of book should be above 50");
      			return false;
      		}
      	}
      </script>
		<form action="update.php" method="POST" onsubmit="return f1()">
			<h1>Enter Details to Update Book</h1>
			Book Name: <select name="bookname" required>
				<option value="">Select book to Update</option>
				
				<?php
				include("config.php");

				$q="select * from books";

				$result=mysqli_query($con,$q);

				$totalrows=mysqli_num_rows($result);

				foreach ($result as $key => $value) {
					echo "<option>".$value["bookname"]."</option>";
				}

				/*
				for($i=0;$i<$totalrows;$i=$i+1)
				{
						$rows=mysqli_fetch_array($result);
						echo "<option>".$rows["bookname"]."</option>";
				}*/

				?>

			</select><br><br>


			Book Price : <input type="number" name="price" id="price"><br><br>

			Book Author:<input type="text" name="author"><br><br>

			
			<input type="submit" name="" value="Update Book">
		</form>
	</div>
	
<?php
	include("footer.php");
?>