<?php 

$fajar = array(

	"nim" => 2019010012,
	"nama" => "fajar Fadilah",
	"semester" => 6,
	"jurusan" => "sistem informasi",
	"alamat" => [
		"desa" => "sidapdap simanosor",
		"kec" => "saipar dolok hole"
	]
);

var_dump($fajar);

// mengakses data kec
var_dump($fajar["alamat"]["kec"]);