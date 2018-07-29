<html>
<head>
	<?php include 'menu.php';?>
</head>
<body>
	<h1> Calculator result: </h1>
<?php
	function calculate($x, $y, $type) { //invokes function creation, $x base | $y modifier | $type method ( * - + / )
		switch ($type) { //replaces neccesity for use of a if..elseif..else block.
			case "add":
			$z = $x + $y; //performs logic
			echo "<p>$x added to $y equals $z</p>"; //frontend response
			return $z; //returns for any future need or use
			break;

			case "subtract":
			$z = $x - $y; //performs logic
			echo "<p>$x take away $y equals $z</p>"; //frontend response
			return $z; //returns for any future need or use
			break;

			case "multiply":
			$z = $x * $y; //performs logic
			echo "<p>$x multiplied by $y equals $z</p>"; //frontend response
			return $z; //returns for any future need or use
			break;

			case "divide":
			$z = $x / $y; //performs logic
			echo "<p>$x divided by $y equals $z</p>"; //frontend response
			return $z; //returns for any future need or use

			break;
		}
	}

$number = calculate($_POST["numo"] , $_POST["numt"] , $_POST["method"]); //invokes function

//if ($number or $numo or $numt or $method == NULL) { //stops calculator function if mistakes made with entering operators or if function returns an invalid number
//	echo "invalid return value";


//php -S localhost:8000 -t .

//}
?> 

<?php include 'sta_foot.php';?>
</body>
</html>

