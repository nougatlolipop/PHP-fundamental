<?php 


// union

$nama = [

	"nama_depan" => "fajar"
];

$nama2 = [
	"nama_depan" => "rajaf",
	"nama_belakang" => "fadilah"
];

var_dump($nama + $nama2);

// equals

$a = [
	"nama_depan" => "fajar",
	"nama_belakang" => "fadilah"
];

$b = [
	"nama_belakang" => "fadilah",
	"nama_depan" => "fajar"
];

var_dump($a == $b);
var_dump($a === $b);