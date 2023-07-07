<?php 

// Anonymous Function adalah function tanpa nama, di PHP disebut juga dengan Closure

$sayHello = function (string $name) {
	echo "Hello {$name}.!!!" . PHP_EOL;
};

$sayHello("Fajar");
$sayHello("Dila");


function sayGoogBye(string $name, $filter) {
	$finalName = $filter($name);
	echo "Good bye $finalName" . PHP_EOL;
}

sayGoogBye("fajar fadilah", function (string $name) : string {
	return strtoupper($name);
});

$filterFuntion = function (string $name) : string {
	return strtoupper($name);
};

sayGoogBye("harun arrasyid", $filterFuntion);

$firstName = "Fajar";
$lastName = "Fadilah";

$sayHelloFajar = function () use ($firstName, $lastName) {
	echo "Hello $firstName $lastName". PHP_EOL;
};


$sayHelloFajar();