<?php 

$data = [
	"action" => "create"
];


// penecekan dengan if
if (isset($data["action"])) {
	$action = $data["action"];
} else {
	$action = "nothing";
}

var_dump($action);


// pengecekan dengan null coalesing operator
$action = $data["action"] ?? "nothing";
var_dump($action);