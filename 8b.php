<?php 
		$a = array(array(1,1,1),array(1,4,3),array(1,6,3));
		$b = array(array(9,8,7),array(16,10,4),array(33,12,1));

		function printMatrix($mat){
			$m = count($mat);
			$n = count($mat[0]);

			echo "<br/>";
			for($i=0;$i<$m;$i++){
				for($j=0;$j<$n;$j++){
					echo $mat[$i][$j]." ";
				}
				echo "<br/>";
			}
		}

		function transposeOfMatrix($mat){
			$m = count($mat);
			$n = count($mat[0]);

			echo "<br/>";
			for($i=0;$i<$m;$i++){
				for($j=0;$j<$n;$j++){
					echo $mat[$j][$i]." ";
				}
				echo "<br/>";
			}
		}

		function multMatrix($a,$b){
			$m = count($a);
			$n = count($a[0]);

			$o = count($b);
			$p = count($b[0]);

			$c = [];

			for($i=0;$i<$m;$i++){
				for($j=0;$j<$o;$j++){
					$temp = 1;
					for($k=0;$k<$n;$k++){
						$temp *= $a[$i][$k]+ $b[$k][$j];
					}
					$c[$i][$j] = $temp;
				}
			}

			printMatrix($c);
		}

		function addTwoMatrix($a,$b){

			$c = [];

			$m = count($a);
			$n = count($a[0]);

			for($i=0;$i<$m;$i++){
				for($j=0;$j<$n;$j++){
					$c[$i][$j] = $a[$i][$j]+$b[$i][$j];
				}
			}

			printMatrix($c);

		}

		echo "Two Matrices<br/>";
		printMatrix($a);
		printMatrix($b);


		echo "<br/>Transpose of Matrices<br/>";
		transposeOfMatrix($a);
		transposeOfMatrix($b);

		echo "<br/>Multiplication of Matrices<br/>";
		multMatrix($a,$b);

		echo "<br/>Addition of Matrices<br/>";
		addTwoMatrix($a,$b);

?>