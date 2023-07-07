<?php 

$data = [1,2,3,4,5,6,7,8,9,20];

// menggabungkan array menjadi string : join() / implode()
echo join(",", $data) . PHP_EOL;

// memecah string menjadi array : explode()
$data2 = explode(" ", "2019010012 Fajar Fadilah"); 
print_r($data2);

// lower dan upper
echo "upper: " . strtolower("FAJAR FADILAH") . PHP_EOL;
echo "lower: " . strtoupper("fajar fadilah") . PHP_EOL;

// menghapus whitespace di depan dan belakang string : trim() 
echo trim("   Fajar Fadilah            ") . PHP_EOL;
//         ```             ````````````

// mengambil sebagian string : substr()
echo substr("Fajar Fadilah", 0, 5) . PHP_EOL;
