<?php

$size = $_POST['plotsize'];
$crop = $_POST['crop'];
$weather = mt_rand() / mt_getrandmax();
$weather = round($weather,2);
$season = $_POST['season'];
$seasonval = $season;

$crops = [
    "cotton" => 11.25,
    "corn" => 25,
    "coffee" => 15,
];

switch ($seasonval) {
	case ($seasonval == 'winter'):
		$temp = rand(10,20);
		$temp = $temp/100;
		$seasonval = $temp;
		break;
	case ($seasonval == 'autumn'):
		$temp = rand(40,60);
		$temp = $temp/100;
		$seasonval = $temp;
		break;
	case ($seasonval == "spring"):
		$temp = rand(65,85);
		$temp = $temp/100;
		$seasonval = $temp;
		break;
	case ($seasonval =='summer'):
		$temp = rand(90,100);
		$temp = $temp/100;
		$seasonval = $temp;
		break;
}

$sizearray = [];
$iterate = $size + 1;

for ($i = 0; $i < $iterate; $i++) {
	$thisfit = mt_rand() / mt_getrandmax();

	$sizearray[] = $thisfit;
}

$smean = array_sum($sizearray);
$smean = ($smean/$size);
$smean = round($smean,2);
$mean = (($seasonval + $weather + $smean)/3);
$mean = round($mean,2);
$produce = ($size * $crops[$crop]) * $mean;
echo "<br>This season you produced $produce kg of $crop<br>";

function getprofit($produce, $crop){
	switch ($produce) {
		case ($crop == 'cotton'):
			$profit = $produce * 10;
			return $profit;
			break;
		case ($crop == 'corn'):
			$profit = $produce * 4;
			return $profit;
			break;
		case ($crop == 'coffee'):
			$profit = $produce * 12;
			return $profit;
			break;
	}
}

$profit = getprofit($produce, $crop);
$bulk = floor($profit/10)*12;
$list = [$size,$crop,$weather,$season,$seasonval,$smean,$mean,$produce,$profit,$bulk];
$list2 = ['size','crop','weather','season','seasonval','smean','mean','produce','profit','bulk'];


$quality = ($mean + ($profit + $bulk)/1000);

function goodSeas($quality) {
	switch ($quality) {
		case ($quality > 1.5):
			echo("This season is predicted to be an excellent harvest, with a mean fitness of $quality <br>");
			break;
		case ($quality > 0.8):
			echo("This season is predicted to be a good harvest, with a mean fitness of $quality <br>");
			break;
		case ($quality > 0):
			echo("This season is predicted to be a bad harvest, with a mean fitness of $quality <br>");
			break;
	}
}


goodSeas($quality);
$profrnd = round($profit);
echo "If you sold it all, you could earn $profrnd Shins, or if you sold in bulk to one seller you could earn an estimated $bulk Shins.<br><br>";
echo 'dev manifest (for those interested);<br>';
for ($i = 0; $i < 10; $i++) {
	echo("$list2[$i] $list[$i]<br>");
}

$vars = [$size,$crop,$weather,$season,$seasonval];

?>