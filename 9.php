<?php 

	$b = "Mississippi Alabama Texas Massachusetts Kansas";

	$a = explode(" ", $b);
	foreach ($a as $key => $value) {
		echo " Index : ".$key." Val : ".$value."<br/>";
	}

	$c = array();

	foreach ($a as $value) {
		if(preg_match('/xas$/',$value))
			$c[0]=$value;

		if(preg_match('/^k.*s$/i',$value))
			$c[1]=$value;
		
		if(preg_match('/^M.*s$/',$value))
			$c[2]=$value;

		if(preg_match('/a$/',$value))
			$c[3]=$value;
	}

	for($i=0;$i<4;$i++)
		echo "STATE[$i]=$c[$i]";
 ?>