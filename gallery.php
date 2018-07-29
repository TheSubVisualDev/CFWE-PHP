<!DOCTYPE html>
<html>
<head>
	<?php include 'menu.php';?>
      
    </script>

</head>
<body>
    <div class="parallaxother"></div>

	<br>
	<h3>3D assets.</h3><br>

     <?php

    $csv = str_getcsv(file_get_contents('artEmbeds.csv')); //Reads the file and converts the content into an array, stores to $csv
    foreach ($csv as $value) { //Iterate over [i,v] of $csv, follow through with value
        $x = $value; //creating a surrogate
        $y = str_replace('"',"",$x); //removes unneccesary speech marks, attaches appended iframe to surrogate #2.
        echo "$y<br>"; //posts the embed equal to $y
    }

     ?>

	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>