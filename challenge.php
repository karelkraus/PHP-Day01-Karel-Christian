<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-dark">
	<div class="container">
		<h1 class="mb-5 mt-5 text-center text-light">Rental cars</h1>
		<div class="row justify-content-around">
	<?php 

	$cars = array(
	"Audi" => array
	(
	"name" => "Audi",
	"available" => 'Available',
	"year" => 2018,
	"model"  => "A6",
	"price" => 200,
	"location" => "Wien"
	),
	"BMW" =>  array
	(
	"name" => "BMW",
	"available" => 'Available',
	"year" => 2017,
	"model"  => "X2",
	"price" => 250,
	"location" => "Graz"
	),
	"VW" =>  array
	(
	"name" => "VW",
	"available" => 'Not available',
	"year" => 2016,
	"model" => "Passat",
	"price" => 150,
	"location" => "Salzburg"
	),
	"VW2" =>  array
	(
	"name" => "VW",
	"available" => 'Available',
	"year" => 2019,
	"model" => "Arteon",
	"price" => 200,
	"location" => "Wien"
	),
	"Mercedes" =>  array
	(
	"name" => "Mercedes",
	"available" => 'Not available',
	"year" => 2015,
	"model" => "SLC",
	"price" => 190,
	"location" => "Salzburg"
	),
	"Toyota" =>  array
	(
	"name" => "Toyota",
	"available" => 'Available',
	"year" => 2014,
	"model" => "Prius",
	"price" => 120,
	"location" => "Graz"
	)
	);

	foreach( $cars as $car ) {
		//echo $car['year'] . "<br>";
		echo '<div class="card mb-5" style="width: 18rem;">';
		echo '<div class="card-body">';
		echo '<h5 class="card-title">'.$car['name'].'</h5>';
		echo '<h6 class="card-subtitle mb-2 text-muted">'.$car['model'].' - '.$car['year'].'</h6>';
		echo '<h6 class="card-subtitle mb-2 text-muted">'.$car['available'].'</h6>';
		echo '<p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>';
		echo '<a href="#" class="card-link">'.$car['price'].'&#8364;</a>';
		echo '<a href="#" class="card-link">'.$car['location'].'</a>';
		echo '</div>';
		echo '</div>';
	}

	 ?>
	 
	 	</div>
	 </div>


	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>