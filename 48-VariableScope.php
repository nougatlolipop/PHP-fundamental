<?php 

/*
	PHP memiliki tiga jenis variable scope
	- global
	- local
	- static
*/ 

// global scope
$name = "fajar";

function say_hello() {
	echo "hello $name" . PHP_EOL; // ERROR
}

say_hello();


// local scope
function create_name() {
	$name2 = "fajar";
}

echo $name2; // ERROR