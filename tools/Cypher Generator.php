<!DOCTYPE html>
<html>
<head>
	<?php include '../menutools.php';?>
</head>
<body>
	<div class="parallaxother">
	    	
	    </div><div class='header'><h2>Louis Testbed Website - 'Numenéra Cypher Generator'</h2></div>
	<p>A large part of the Numenéra ruleset is cyphers; here is a convenient way to generate them without spooking your players.</p><br>

	<form action="" method='post'>
		How many cyphers to generate: <input type="number" min="1" step="1" value="<?php echo $_POST['number']?>" name="number"<br>
	    <input type="submit">
	</form>
	<p>
		<?php
			$number = $_POST['number']; //gets the value user enters
			$cypher = str_getcsv(file_get_contents('../cyphers/mainlist.csv')); //Reads the file and converts the content into an array, stores to $csv
			$levels = str_getcsv(file_get_contents('../cyphers/cypherlevels.csv')); //Reads the file and converts the content into an array, stores to $csv
			for ($i = 0; $i < ($number); $i++) { //while $i is less than number
				$rand = rand(0,99); //Generate 1 - 100 (0 - 99)
				$disp = ($rand+1);	//creates display variable 
				$randlvl = rand(1,$levels[$rand]); //generates a level based on the maximum per item from parallel csv			
				echo "$cypher[$rand] (#$disp) - Cypher Level: $randlvl<br>"; //displays cypher (cypher number) - level
			}
		?>
	</p>
	<?php include '../sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>