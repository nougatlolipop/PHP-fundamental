<?php 

/* 

goto adalah fitur dimana kita  bisa loncat kekode program sesuai dengan keinginan kita 
agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan
nama label lalu di akhiri ':' (colon)

*/

goto a;

echo "Hello A" . PHP_EOL;


a:
echo "Hello B" . PHP_EOL;


// goto operator di perulangan

$counter = 1;
while (true) {

	echo "looping ke-$counter" . PHP_EOL;
	$counter++;

	if ($counter > 10)
		goto keluar;
}

keluar:
echo "Akhir dari lopping" . PHP_EOL;