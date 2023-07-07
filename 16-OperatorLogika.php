<?php 

echo "Operator AND\n";
var_dump(true && true);
var_dump(true && false);
var_dump(false AND true);
var_dump(false and false);

echo "\nOperator OR\n";
var_dump(true || true);
var_dump(true || false);
var_dump(false OR true);
var_dump(false or false);

echo "\nOperator XOR\n";
var_dump(true XOR true);
var_dump(true XOR false);
var_dump(false xor true);
var_dump(false xor false);

echo "\nOperator NOT\n";
var_dump(!true);
var_dump(!false);