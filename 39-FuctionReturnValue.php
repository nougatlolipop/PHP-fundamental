<?php 

function sum(int $first, int $last)
{
	return $first + $last;
}

$nilai = sum(40, 40);
echo "Nilai : $nilai" . PHP_EOL;

function grade(int $value)
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
