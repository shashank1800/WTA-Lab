<!DOCTYPE html>
<html>
<body>

	<form method="post">

		<label>Value 1 </label>
		<input type="number" name="value1"><br/>

		<label>Value 2 </label>
		<input type="number" name="value2"><br/>

		<input type="submit" value="submit" >


	</form>

	<?php 
		if(isset($_POST["value1"]) && isset($_POST["value2"])){
			$v1 = $_POST["value1"];
			$v2 = $_POST["value2"];

			echo $v1."+".$v2."=".($v1+$v2)."<br/>";
			echo $v1."-".$v2."=".($v1-$v2)."<br/>";
			echo $v1."*".$v2."=".($v1*$v2)."<br/>";
			echo $v1."/".$v2."=".($v1/$v2)."<br/>";
		}
	 ?>

</body>
</html>