<!DOCTYPE html>
<html>
<head>
<title>Map Picker</title>
</head>
<body>
	<h1>Map Picker</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Pick a continent: <br>
		<div><input type="radio" name="map" value="Asia">Asia<br></div>
		<div><input type="radio" name="map" value="Africa">Africa<br></div>
		<div><input type="radio" name="map" value="Australia">Australia<br></div>
		<div><input type="radio" name="map" value="Europe">Europe<br></div>
		<div><input type="radio" name="map" value="North America">North America<br></div>
		<div><input type="radio" name="map" value="South America">South America<br></div>
		<div><input type="radio" name="map" value="Antarctica">Antarctica<br></div>
		<div><input type="submit"></div>
	</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["map"];
    if ($answer == "Asia") {
	echo "<img src='http://www.wineandvinesearch.com/continents/asia.png' />";
    } elseif($answer == "Africa") {
    	echo "<img src='http://mrnussbaum.com/images/africa.gif' />";
    } elseif($answer == "Australia") {
      	echo "<img src='https://greenwichmeantime.com/images/index.htm_txt_australia-map.gif' />";
    } elseif($answer == "Europe") {
      	echo "<img src='http://www.philatelicdatabase.com/wp-content/uploads/2009/04/map-europe-1871-1914.jpg' h />";
    } elseif($answer == "North America") {
      	echo "<img src='http://geology.com/world/north-america-map.gif' />";
    } elseif($answer == "South America") {
      	echo "<img src='https://s-media-cache-ak0.pinimg.com/originals/20/f7/48/20f7486b0d754e41551fa62145bc1a44.jpg' />";
    } elseif($answer == "Antarctica") {
      	echo "<img src='http://3belowzero.com/wp-content/uploads/2012/06/antar1.jpg' />";
    }
  }
?>
</body>
</html>
