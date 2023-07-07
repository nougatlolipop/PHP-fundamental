<?php 

function say_hello(string $name, callable $filter) 
{
	$final_name = call_user_func($filter, $name);
	// $final_name = $filter($name);
	echo "Hello $final_name" . PHP_EOL;
}

// dengan anonymous function
say_hello("fajar fadilah", function (string $name) : string {return strtoupper($name);});

// menggunakan arrow functiom
// say_hello("fajar fadilah", fn ($name) => strtoupper($name));

say_hello("fajar fadilah", "strtoupper");
say_hello("fajar fadilah", "strtolower");
