<?php 

$nama = "Fajar";
$nama = NULL;

$umur = null;

echo $nama;
echo $umur;

// mengecek apakah data bernilai null dengan is_null()

echo "apakah nama null? ";
// echo is_null($nama);
var_dump(is_null($nama));
echo "\n";

// menghaspus variable dengan unset()

$contoh = "fajar";
unset($contoh);

// echo $contoh;

// mengecek apakah sebuah variable ada dan nilainya tidak null dengan isset()

var_dump(isset($contoh));
var_dump(isset($contoh_tidak_ada));
