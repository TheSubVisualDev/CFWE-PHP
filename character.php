<html>
<head>
	<?php include 'menu.php';?>
</head>
<body>
	<h1> Character result: </h1>

<?php
	function returnCharacter($index) {

		$b = rand(0,49);
		$coacated = ($index);
		$csv = str_getcsv(file_get_contents('characterBases/' . $coacated)); //Reads the file and converts the content into an array, stores to $csv
		$result = $csv[$b];
		return $result;
	}

	$iterations = $_POST["numGen"];
	
	for ($i = 0; $i < $iterations; $i++) {
		$nt1 = returnCharacter($_POST["nt1"]);
		$nt2 = returnCharacter($_POST["nt2"]);
		$frontEnd = $i + 1;
		echo "<p>Name #$frontEnd is $nt1 $nt2</p>";
	}

	?> 

<?php include 'sta_foot.php';?>
</body>
</html>

