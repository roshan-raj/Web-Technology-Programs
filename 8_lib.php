<?php
	function compute($a,$operation,$b) {
		switch($operation) {
			case '+' : return $a + $b;
			case '-' : return $a - $b;
			case '*' : return $a * $b;
			case '/' : if($b==0)
							return "INFINITY";
						return $a / $b;
			case '%' : if($b==0)
							return "INFINITY";
						return $a % $b;
		}
	}

	function matrix_print($m) {
		$rowcount = count($m);
		$colcount = count($m[0]);
		for($i=0; $i<$rowcount; $i++){
			for($j=0; $j<$colcount; $j++)
				echo $m[$i][$j]."&nbsp;&nbsp;";
			echo "<br>";
		}
	}

	function matrix_sum($a,$b) {
		$rowcount_a = count($a);
		$colcount_a = count($a[0]);
		$rowcount_b = count($b);
		$colcount_b = count($b[0]);
		if($rowcount_a != $rowcount_b || $colcount_a != $colcount_b) {
			echo "Matrix Order Mismatch";
			exit(0);
		}
		for($i=0; $i<$rowcount_a; $i++)
			for($j=0; $j<$colcount_a; $j++)
				$c[$i][$j] = $a[$i][$j] + $b[$i][$j];
		return $c;
	}

	function matrix_product($a,$b) {
		$rowcount_a = count($a);
		$colcount_a = count($a[0]);
		$rowcount_b = count($b);
		$colcount_b = count($b[0]);
		if($rowcount_a != $rowcount_b || $colcount_a != $colcount_b) {
			echo "Matrix Order Mismatch";
			exit(0);
		}
		for($i=0; $i<$rowcount_a; $i++)
			for($j=0; $j<$colcount_b; $j++){
				$c[$i][$j] = 0;
				for($k=0; $k<$colcount_a; $k++)
					$c[$i][$j] += $a[$i][$k] * $b[$k][$j];
			}
		return $c;
	}

	function matrix_transpose($a) {
		$rowcount = count($a);
		$colcount = count($a[0]);
		for($i=0; $i<$rowcount; $i++)
			for($j=0; $j<$colcount; $j++)
				$b[$i][$j] = $a[$j][$i];
		return $b;	
	}
?>