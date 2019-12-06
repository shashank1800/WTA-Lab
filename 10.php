<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<?php 
		$a = [];

		$conn = mysqli_connect("localhost","root","","weblab");
		echo $conn->connect_error;

		$q = "SELECT * FROM student";
		$data = $conn->query($q);

		$i=0;
		if($data->num_rows>0){
			echo "<br/>Before Sorting <br/>";
			while($arr = $data->fetch_assoc()){
				foreach($arr as $val){
					echo $val." ";

				}
				echo "<br/>";
				$a[$i] = $arr;
				$i++;
			}
		}else{
			echo "Data not found";
		}

		#Selection Sort
		for($i=0;$i<count($a);$i++){
			$min_index = $i;
			for($j=$i+1;$j<count($a);$j++){
				if($a[$min_index]["usn"]> $a[$j]["usn"])
					$min_index = $j;
			}
			$temp = $a[$min_index];
			$a[$min_index] = $a[$i];
			$a[$i] = $temp;
		}

		echo "<br/>After Sorting <br/>";

		foreach ($a as $row) {
			foreach ($row as $value) {
				echo $value." ";
			}
			echo "<br/>";
		}
	 ?>
</body>
</html>