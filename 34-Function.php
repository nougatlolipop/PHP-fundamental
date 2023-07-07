<?php 


function say_hello()
{
	echo "Hello Function" . PHP_EOL;
}

say_hello();


// memuat function di block if

$buat = true;


if ($buat) {

	function hi()
	{
		echo "Hi Function" . PHP_EOL;	
	}
}

hi();