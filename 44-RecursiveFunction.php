<?php 

// function faktorial($value) {

// 	if ($value == 1) 
// 		return 1;
// 	else 
// 		return $value * faktorial($value - 1);
// }


function faktorial($value) : int
{
	return ($value <= 1) ? 1 : $value * faktorial($value - 1);
}

$n = readline("masukkan n: ");
echo faktorial($n) . PHP_EOL;


// memory overflow recursive

// function loop($value) {
// 	if ($value == 0) {
// 		echo "akhir loop" . PHP_EOL;
// 	} else {
// 		echo "loop-$value" . PHP_EOL;
// 		loop($value - 1);
// 	}
// }

// loop(3000000);