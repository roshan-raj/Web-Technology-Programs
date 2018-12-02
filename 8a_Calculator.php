<!-- 
	Write the PHP program to implement simple calculator operations.
-->
<?php
	include "8_lib.php";
	$op1 = 10;
	$op2 = 2;
	$operation = "+";
	$result = compute($op1, $operation, $op2);
	echo "<h3> $op1 $operation $op2 = $result </h3>";
?>