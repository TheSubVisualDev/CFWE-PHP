<!DOCTYPE html>
<html>
<head>
	<?php include '../menutools.php';?>
</head>
<body>
	<h1>Louis Testbed Website - 'Numenéra Farming Generator'</h1>
	<p>Due to the fact that the players of my Numenéra Campaign have severely derailed it, I am having to create this calculator / generator in order to generate Yields per season for their newly aquired cotton farm.</p><br>

	<form action="" method='post'>
		How many Square KM of farmland do you have: <input type="text" name="plotsize"><br>
		What crop type are you growing: <select name='crop'>
			<?php $cropsdisp = ['cotton','corn','coffee'];
				foreach ($cropsdisp as $value) {
					echo("<option value='$value'>$value</option>");
				}
			?>
		</select><br>
		What season are you generating yield for: <select name='season'>
			<?php $seasons = ['spring','summer','autumn','winter'];
				foreach ($seasons as $value) {
					echo("<option value='$value'>$value</option>");
				}
			?>
		</select>
	    <?php require'../farminggen.php'; ?>
	    <input type="submit">
	</form>
	<div>

	</div>
	<?php include '../sta_foot.php';?> <!-- adds footer with custom php scripted content to the bottom of the page. -->
</body>
</html>