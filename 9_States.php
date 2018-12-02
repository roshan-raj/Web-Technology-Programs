<!-- 
	Write a PHP program named states.php that declares a variable states with value
	"Mississippi Alabama Texas Massachusetts Kansas". write a PHP program that does
	the following:
	a)	Search for a word in variable states that ends in xas. Store this word in element
		0 of a list named statesList.
	b)	Search for a word in states that begins with k and ends in s. Perform a caseinsensitive
		comparison. [Note: Passing re.Ias a second parameter to method
		compile performs a case-insensitive comparison.] Store this word in element1
		of statesList.
	c)	Search for a word in states that begins with M and ends in s. Store this
		word in element 2 of the list.
	d)	Search for a word in states that ends in a. Store this word in element 3 of the
		list. 
-->
<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";

	if(preg_match("/[a-zA-Z]*xas\b/", $states, $match))
		$statesList[0] = $match[0];

	if(preg_match("/\bk[a-z]*s\b/i", $states, $match))
		$statesList[1] = $match[0];

	if(preg_match("/\bM[a-z]*s\b/", $states, $match))
		$statesList[2] = $match[0];

	if(preg_match("/[a-zA-Z]*a\b/", $states, $match))
		$statesList[3] = $match[0];

	print_r($statesList);
?>