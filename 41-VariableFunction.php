 <?php 

// variable function adalah kemampuan untuk memanggil sebuah 
// function dari value yang terdapat di sebuah variable

function foo() 
{
	echo "FOO" . PHP_EOL;
}

function bar() {
	echo "BAR" . PHP_EOL;
}

$namaFunction = "foo";
$namaFunction();

$namaFunction = "bar";
$namaFunction();


// penggunaan variable function

function say_hello(string $nama, $filter)
{
	$final_nama = $filter($nama);
	echo "Hello, $final_nama" . PHP_EOL;
}

say_hello("fajar", "strtoupper");
say_hello("fadilah", "strtolower");
