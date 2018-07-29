<!DOCTYPE html>
<html>
<head>
	<?php include '../menutools.php';?>
</head>
<body>
	<h1>Louis Testbed Website - 'D&D Name Generator'</h1>
	<p>Originally a .py project of mine, this tool generates names from the D&D Name Section of 'Xanathar's Guide to Everything'.</p><br>

	<form action="../character.php" method="post">
		How many names to generate: <input type="text" name="numGen"><br>
		Name 1 Dialect: <select name="nt1">
			<?php 
				$dir = '../characterBases'; // 'Tools' refers to the folder in the server architecture, at /CFWE-PHP/Tools
				$toolsArray = scandir($dir, 1); //Scans the directory and turns the names of each file into plaintext.
				for ($i = 0; $i < 2; $i++) { //Sets variable $i as 0, and for as long as i is less than 3, iterate x by 1 and then run through code.
					array_pop($toolsArray); //Removes the last [i,v] pair from an array, needs to be done thrice because of 2 invisible portals an .DS_Stores
				}
				foreach ($toolsArray as $value) { //For each Value of toolsArray, iterating over index.
					$trim = rtrim($value, ".csv"); //Removes '.php' from frontend display.
			    	echo "<option value='$value'>$trim</option>"; //Posts the HTML into pipeline, creates a link which links to the correct tool file.
				}
			?>
		</select><br>

		Name 2 Dialect: <select name="nt2">
			<?php 
				$dir2 = '../characterBases'; // 'Tools' refers to the folder in the server architecture, at /CFWE-PHP/Tools
				$toolsArray2 = scandir($dir2, 1); //Scans the directory and turns the names of each file into plaintext.
				for ($i2 = 0; $i2 < 2; $i2++) { //Sets variable $i as 0, and for as long as i is less than 3, iterate x by 1 and then run through code.
					array_pop($toolsArray2); //Removes the last [i,v] pair from an array, needs to be done thrice because of 2 invisible portals an .DS_Stores
				}
				foreach ($toolsArray2 as $value2) { //For each Value of toolsArray, iterating over index.
					$trim2 = rtrim($value2, ".csv"); //Removes '.php' from frontend display.
			    	echo "<option value='$value2'>$trim2</option>"; //Posts the HTML into pipeline, creates a link which links to the correct tool file.

				}
			?>
		</select><br>

	<input type="submit"> <!-- 'This is the little 'Submit' button at the bottom of every form. -->
	</form>

	<?php include '../sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>