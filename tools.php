<!DOCTYPE html>
<html>
<head>
	<?php include 'menu.php';?>

</head>
<body>
    <div class="parallaxother"></div>

	<div class="parallaxother">
	    	
	    </div><div class='header'><h2>Tools compendium</h2></div><br>

	<?php 
	$dir = 'tools'; // 'Tools' refers to the folder in the server architecture, at /CFWE-PHP/Tools
	$toolsArray = scandir($dir, 1); //Scans the directory and turns the names of each file into plaintext.
	for ($i = 0; $i < 3; $i++) { //Sets variable $i as 0, and for as long as i is less than 3, iterate x by 1 and then run through code.
		array_pop($toolsArray); //Removes the last [i,v] pair from an array, needs to be done thrice because of 2 invisible portals an .DS_Stores
	}
	foreach ($toolsArray as $value) { //For each Value of toolsArray, iterating over index.
		$trim = rtrim($value, ".php"); //Removes '.php' from frontend display.
    	echo "<a href='/tools/$value'>$trim</a><br><br>"; //Posts the HTML into pipeline, creates a link which links to the correct tool file.

	}
	?>


	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>