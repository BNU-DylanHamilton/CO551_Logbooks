<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$tax = 22;
	$gross = $hourlyrate * $hoursperweek;
	$net = $gross * ((100 - $tax) / 100);
	echo $net;
?>
</body>
</html>
