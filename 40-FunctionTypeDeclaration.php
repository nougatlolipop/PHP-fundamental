<?php 

// mendeklarasikan kembalian function

function sum(int $first, int $last): int
{
	return $first + $last;
}

$nilai = sum(40, 40);
echo "Nilai : $nilai" . PHP_EOL;

function grade(int $value): string
{
	if ($value >= 80) :
		return "A";
	elseif ($value >= 70) :
		return "B";
	elseif ($value >= 60) :
		return "C";
	elseif ($value >= 50) :
		return "D";
	else :
		return "E";
	endif;
}

$grade = grade($nilai);
echo "Grade : $grade" . PHP_EOL;