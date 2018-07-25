<!DOCTYPE html>
<html>
<head>
	<?php include 'menu.php';?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css">
    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>

</head>
<body>
	<h3>Tools compendium</h3><br>

	<?php 
	$dir    = 'Tools';
	$toolsArray = scandir($dir, 1);
	array_pop($toolsArray);
	array_pop($toolsArray);
	array_pop($toolsArray);
	foreach ($toolsArray as $value) {
    echo "<a href='/tools/$value'>$value </p>";
}
	?>


	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>