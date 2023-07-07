<?php 

function increment() {
	
	$counter = 1; // static scope

	echo "Counter $counter" . PHP_EOL;

	$counter++;
}

increment();
increment();
increment();


function increment2() {
	
	static $counter = 1; // static variable

	echo "Counter $counter" . PHP_EOL;

	$counter++;
}

increment2();
increment2();
increment2();