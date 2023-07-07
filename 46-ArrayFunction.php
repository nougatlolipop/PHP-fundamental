<?php 

$nama = [
	"nama_depan" => "fajar",
	"nama_belakang" => "fadilah"
];

// array_keys		mengambil semua key milik array

print_r(array_keys($nama));

// array_values		mengambil semua value milik array

print_r(array_values($nama));

// array_map		megubah data array dengan callback

$data = [1,2,3,4,5,6,7,8,9];

$mapFunction = function ($value) {
	return $value * 10;
};

$dataResult = array_map($mapFunction, $data);
print_r($dataResult);

// rsort			mengurutkan data array descanding

rsort($data);
print_r($data);

// sort				mengurutkan data array ascanding

sort($data);
print_r($data);

// shuffle			mengubah posisi data di array secara random