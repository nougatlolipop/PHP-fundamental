<?php

// a = a + b
$a = 1;
$b = 2;
var_dump($a += $b);

// a = a - b;
$a = 1;
$b = 2;
var_dump($a -= $b);

// a = a * b;
$a = 1;
$b = 2;
var_dump($a *= $b);

// a = a / b;
$a = 1;
$b = 2;
var_dump($a /= $b);

// a = a - b;
$a = 10;
$b = 3;
var_dump($a %= $b);

// contoh

$total = 0;

$buah = 5000;
$ayam = 10000;
$jus = 2000;

$total += $buah;
$total += $ayam;
$total += $jus;

echo "total : ".$total;