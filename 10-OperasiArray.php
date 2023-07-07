<?php 

$nama = ["fajar", "fadilah", "harun", "arrasyid"];

// mengkses data di array pada nomor index
var_dump($nama[0]);

// mengubah data di array pada nomor index dengan value baru
$nama[0] = "rajaf";
var_dump($nama[0]);

// menambah data array pada posisi paling belakang
$nama[] = "agus";

// menghapus data di array, index otomatis hilang
unset($nama[1]);
var_dump($nama);

echo "jumlah data di array: ";
echo count($nama);
echo "\n";
