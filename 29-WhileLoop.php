<?php 

$counter=1; 
while ($counter <= 10) { 
	echo "looping ke-". $counter . PHP_EOL;
	$counter++;
}

$counter=10;  
while ($counter >= 1) { 
	echo "looping ke-". $counter . PHP_EOL;
	$counter--;
}

// syntax alternatif

$counter=1;
while ($counter <= 10) : 
	echo "looping ke-". $counter . PHP_EOL;
	 $counter++;
endwhile;

$counter=10; 
while ($counter >= 1) :
	echo "looping ke-". $counter . PHP_EOL;
	$counter--;
endwhile;