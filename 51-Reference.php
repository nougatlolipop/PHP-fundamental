<?php

// assign by reference

$nama = "fajar";

$namaLain = &$nama;

$namaLain = "fadilah";

echo "nama : $nama" . PHP_EOL;


// past by reference

function increment(&$value) {
	$value++;
}

$counter = 1;
increment($counter);

echo "counter : $counter" . PHP_EOL;


// returning references

function &getValue() 
{
	static $value = 100;
	return $value;
} 

$a = &getValue();
echo "$a" . PHP_EOL;

// hati-hati untul menggunakan fitur ini karna dapat membingungkan, contoh

$a = 200; // ini akan mengubah return value dari  reference
echo "$a" . PHP_EOL;
