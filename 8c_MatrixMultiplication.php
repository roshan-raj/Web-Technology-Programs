<!--  
	Write the PHP program to do multiplication of the two matrices.
-->
<?php
	include "8_lib.php";
	$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$c = matrix_product($a,$b);
	echo "<br>Matrix A<br>";
	matrix_print($a);
	echo "<br>Matrix B<br>";
	matrix_print($b);
	echo "<br>MatrixProduct A x B<br>";
	matrix_print($c);
?>