<?php 

$nilai = 70;
$absen = 90;

if ($nilai >= 70 && $nilai >= 70) {
	echo "Andal Lulus" . PHP_EOL;
} else {
	echo "Anda Tidak Lulus" . PHP_EOL;
}


if ($nilai >= 90 && $absen >= 90) {
	echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 80 && $absen >= 80) {
	echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
	echo "Nilai Anda C" . PHP_EOL;
} else {
	echo "Nilai Anda E" . PHP_EOL;
}


// syntax alternatif
if ($nilai >= 80 && $absen >= 80) :
	echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
	echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
	echo "Nilai Anda C" . PHP_EOL;
else :
	echo "Nilai Anda E" . PHP_EOL;
endif;