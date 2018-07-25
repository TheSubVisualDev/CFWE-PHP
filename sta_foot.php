<?php
	
	echo "<br><br>Website by Louis Beauvois<br>"; 
	$d = date("Y");
	$d = $d - 2017; //gets the date difference between 2017 and current year
	if ($d == 1) { //Logic to ensure correct grammar
		$y = 'year';
	} else {
		$y = 'years';
	}
	echo "<i>For $d $y!</i>";	
?>