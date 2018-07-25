<?php
	
	echo "<br><p>Website by Louis Beauvois<p/>"; 
	$d = date("Y");
	echo "&copy 2018 - $d";
	$d = $d - 2017; //gets the date difference between 2017 and current year
	switch($d) {
		case($d == 1):
			$y = 'year';
		case($d < 1):
			$y = 0;		
			die;
		case($d > 1);
			$y = 'years';
	}
	echo "<i><p>For $d $y.</p></i><br>";
?>