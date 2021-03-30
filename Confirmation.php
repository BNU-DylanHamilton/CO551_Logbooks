<?php

	
	$quantity = floatval($_COOKIE['quantity']);
	$cost = floatval($_COOKIE['sizecost']);

	$totalcost = $quantity * $cost;

   echo '<h2> Your order qty is ' . $_COOKIE['quantity'] . ' ' . $_COOKIE['size'] . '</h2></br>';
   echo '<h2> and the selected colour is ' . $_POST['selcolour'] . '</h2></br>';
   echo '<h2> and your total cost is ' . $totalcost . '</h2>';
?>
