<!DOCTYPE html>
<html>
<head>
	<?php include 'menu.php';?>
      
    </script>

</head>
<body>
	<br>
	<h3>3D assets.</h3><br>

     <?php

    $csv = str_getcsv(file_get_contents('artEmbeds.csv'));
    foreach ($csv as $value) {
        $x = $value;
        $y = str_replace('"',"",$x);
        echo "$y<br>";
    }

     ?>

	<?php include 'sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>