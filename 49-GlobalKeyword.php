<?php 

$name = "fajar";

function say_hello() {

	// global keyword digunakan untuk mengakses variable global scope

	global $name;
	echo "hello $name" . PHP_EOL;


	echo $GLOBALS['name'];
}

say_hello();