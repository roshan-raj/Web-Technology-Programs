<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"library");
	$result = mysqli_query($con, "SELECT usn, name FROM student");
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo "Before Sorting:<br>";
	foreach($rows as $student)
		printf("USN: %s, Name: %s <br>", $student['usn'], $student['name']);

	$rowCount = mysqli_num_rows($result);
	for($i=0; $i<$rowCount; $i++) {
		$min = $i;
		for($j=$i+1; $j<$rowCount; $j++)
			if($rows[$j]['usn'] < $rows[$min]['usn'])
				$min = $j;
		$tmp = $rows[$i];
		$rows[$i] = $rows[$min];
		$rows[$min] = $tmp;
	}
	echo "After Sorting:<br>";
	foreach($rows as $student)
		printf("USN: %s, Name: %s <br>", $student['usn'], $student['name']);
	
?>