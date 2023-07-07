<?php 

// foreach untuk array

$nama = ["fajar", "fadilah", "harun", "arrasyid"];

foreach ($nama as $data) {
	echo "Data $data" . PHP_EOL;
}

// foreach untuk array map

$orang = array(

	"nama_depan" => "fajar",
	"nama_belakang" => "fadilah",
);

foreach ($orang as $key => $value) {
	echo "$key : $value" . PHP_EOL;
}