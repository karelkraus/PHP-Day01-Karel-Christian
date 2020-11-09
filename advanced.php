<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleAd.css">
</head>
<body>

	<?php

		function convert($value)
		{
			global $result;
			$result = floor(($value - 32) * 5/9);
			echo "<h1>$result °C</h1>"."<br>";
		}

		convert(65);

		//echo '<img src="' . 'snowy.png">';

		if($result >= 0 && $result < 6)
			echo '<div><h2>Today is very cold</h2><br> <img src="' . 'snowflake.png"></div>';
		else if($result >= 6 && $result < 11)
			echo '<div><h2>Today is cold</h2><br> <img src="' . 'snowy.png"></div>';
		else if($result >= 11 && $result < 16)
			echo '<div><h2>Today is pleasant</h2><br> <img src="' . 'cloud.png"></div>';
		else if($result >= 16 && $result < 21)
			echo '<div><h2>Today is warm</h2><br> <img src="' . 'cloudy.png"></div>';
		else if($result > 21)
			echo '<div><h2>Today is hot</h2><br> <img src="' . 'sun.png"></div>';

	 ?>

</body>
</html>