<?php 

echo "sama dengan\n";

var_dump(1 == 1);
var_dump("1" == 1);
var_dump("1" === 1);

echo "\ntidak sama dengan\n";
var_dump(1 != 1);
var_dump("1" <> 1);
var_dump("1" !== 1);

echo "\nkurang dari dan kurang dari atau sama dengan\n";
var_dump(1 < 2);
var_dump("1" < 2);
var_dump("1" < 1);

var_dump(1 <= 2);
var_dump("1" <= 1);
var_dump("1" <= 1);

echo "\nkurang dari dan kurang dari atau sama dengan\n";
var_dump(1 > 2);
var_dump("1" > 2);
var_dump("1" > 1);

var_dump(1 >= 2);
var_dump("1" >= 1);
var_dump("1" >= 1);


echo "\nmenggunakan variable\n";

$a = 1;
$b = "1";

var_dump($a == $b);
var_dump($a === $b);
