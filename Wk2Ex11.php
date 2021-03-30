<?php

	$mymarks['CO245'] = 60;
	$mymarks['CO246'] = 50;
	$mymarks['CO247'] = 55;
	$mymarks['CO248'] = 80;
	$mymarks['CO249'] = 77;
	$mymarks['CO250'] = 72;
	$total = 0;

	while(list($index,$value) = each($mymarks))
  {
    echo 'For ' . $index . ' my grade was ' . $value . '<br/>';

    $total = $total + $mymarks[$index];
  }

  $average = $total /  6;
  echo 'My average mark was ' . $average . '<br/>';

?>