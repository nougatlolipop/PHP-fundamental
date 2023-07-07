<?php 

// kata kunci break akan menghentikan perulangan

$counter = 1;
while (true) {

	echo "Counter : $counter" . PHP_EOL;
	$counter++;
	
	if ($counter > 10)
		break; 
}


// kata kunci continue akan melewatkan perulangan saat ini

for ($counter = 1; $counter <= 10; $counter++) {

	if ($counter % 2 == 0)
		continue;

	echo "Counter : $counter" . PHP_EOL;
} 