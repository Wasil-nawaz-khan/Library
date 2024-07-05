<?php
	include("header.php");
?>

<script type="text/javascript" src="jquery.js">
	
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#bn").on("input",function(){
			$.ajax({
				url:"http://localhost/Library/Project/search.php",
				type:"POST",
				data:{"bookn":$("#bn").val()},
				success:function(result){
					$("#displayarea").html(result);
				}
			});
		});
	});
</script>
	<div id="content">
		<form>
			Book Name<input type="text" name="bookname" id="bn"><br><br>
		</form>

		<div id="displayarea">
			
		</div>
		
	</div>
	
<?php
	include("footer.php");
?>