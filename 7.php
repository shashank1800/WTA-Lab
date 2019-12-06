<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1"> 

	<style type="text/css">
		p{
			top: 40%;
			left:40%;
			font-size: 50px;
			position: absolute;
		}
	</style>
</head>
<body>

	<?php 
		date_default_timezone_set("Asia/Calcutta");
		echo "<p>".date("h:i:s A")."</p>";
	?>

</body>
</html>