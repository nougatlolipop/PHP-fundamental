<?php 

// variable-length argument list

function sum_all(...$value) 
{
	$total = 0;

	foreach ($value as $num) {
		$total += $num;
	}

	echo "total " . implode("+", $value) . " = $total" . PHP_EOL;
}


sum_all(1,2,3,4);

$agka = [1,2,3,4,5,6];

sum_all(...$agka);