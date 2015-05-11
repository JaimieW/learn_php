<?php
include 'util.php';

// $GLOBALS
$a = 10;
$b = 5;

function addAAndB(){
	$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}

addAAndB();

println($c);

//$_SERVER
println($_SERVER['PHP_SELF']);
println($_SERVER['SERVER_NAME']);
println($_SERVER['HTTP_HOST']);



?>