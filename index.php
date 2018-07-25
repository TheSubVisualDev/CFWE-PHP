<!DOCTYPE html>
<html>
<head>
	<?php include 'menu.php';?>
	

</head>
<body>
	<br>
	<h3>Welcome to my website!</h3><br>

	<?php

	$testingstrings = "<p>I am a testing string to be displayed using raw HTML formatting!</p>";
	echo $testingstrings;

	?>
	<p>Welcome to my testbed website! I'll be posting a multitude of things on here, from small useful tools to aid DMs in D&D to 3D models!<br><br>Thank you for visiting my testbed.</p>
	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>