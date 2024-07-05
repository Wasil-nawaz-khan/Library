<?php

include("header.php")

?>
	<div id="content">

	<h1>Welcome to MY library</h1>	

	<?php
	session_start();
			if(isset($_SESSION['Message']))
			{
				echo "<h1>".$_SESSION['Message']."</h1>";
			}

	?>
</div>

<?php

include("footer.php")

?>