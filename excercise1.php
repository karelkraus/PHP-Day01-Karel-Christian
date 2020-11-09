<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

		$d = date('D');

		switch ($d) {
			case 'Mon':
				echo "Happy Monday";
				break;
			case 'Tue':
				echo "Happy Tuesday";
				break;
			case 'Wed':
				echo "Happy Wednesday";
				break;
			case 'Thu':
				echo "Happy Thursday";
				break;
			case 'Fri':
				echo "Happy Friday";
				break;
			case 'Sat':
				echo "Happy Saturday";
				break;
			case 'Sun':
				echo "Happy Sunday";
				break;			
			default:
				echo "Someday";
				break;
		}

		$name = 'Karel';

		echo "<h1>$name</h1>";


/*		for ($i=0; $i < 50; $i++) { 
			echo"$name<br>";
		}*/

/*		$i = 0;
		while( $i < 50)
		{
		echo("$name<br>");
		$i ++;
		}*/
		

		$i = 0;
		do
		{
		echo("$name<br>");
		$i ++;
		}while ( $i < 50);

		$numbers = array( 1 , 2, 3, 4, 5, 6, 7, 8, 9, 10);
		foreach( $numbers as $value )
		{
		echo "Value is $value <br />";
		}

		$character =  array(
			'Homer' => array (
				'weight' => 200,
				'height' => 150,
				'hobby' => 'drink beer'
			));

		echo "Homer has "; 
		echo $character['Homer']['weight'] . " kg";

		


	?>

</body>
</html>