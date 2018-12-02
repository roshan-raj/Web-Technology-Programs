<!-- 
	Write a PHP program to keep track of the number of visitors visiting the web page and to display this count
	of visitors, with proper headings.
-->
<?php
	function getCount() {
		$filename = "6_counter.txt";
		file_exists($filename) or die("<h3> Sorry, counter file does not exist. </h3>");
		$fh = fopen($filename,"r+") or die("<h3> Sorry, couldn't open counter file. </h3>");
		$count = fgets($fh) + 1;
		fseek($fh,0);
		fputs($fh, $count);
		fclose($fh);
		return $count;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Visitors Count</title>
</head>
<body style="background-color: #eeeeee;">
	<div style="text-align: center; margin-top: 150px;">
		<h2> Visitor Count:
			<span style="color: red;">
				<?php echo getCount() ?>
			</span>
		</h2>
	</div>
</body>
</html>