<?php
	
	echo "<br><p>Website by Louis Beauvois<p/>"; 
	$d = date("Y"); //Grabs the current year and assigns it to $d
	echo "&copy 2018 - $d"; //Shows a copyright logo with the creation year (2018) in range with the current date.
	$d = $d - 2018; //gets the date difference between 2017 and current year
	switch($d) { //Updates 'since' flavour text. Replaces If..Elseif..Else blocks.
		case($d == 1): //If years == 1
			$y = 'year';
		case($d < 1): //If no years 
			$y = 0;		
			die;
		case($d > 1); //If more than 1 year
			$y = 'years';
	}
	echo "<i><p>For $d $y.</p></i><br>"; //Flavour text; Displays 'For [N0 years] [year/years]
?>