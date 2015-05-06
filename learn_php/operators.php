<?php
$x = 5;
$y = 2;

// arithmetic
function printAritmetic($a, $b, $result, $operator){
	echo "$a $operator $b = $result <br>";
}

// TODO replace with an array/list etc
$res = $x+$y;
printAritmetic($x, $y, $res, "+");

$res = $y-$x;
printAritmetic($y, $x, $res, "-");

$res = $x * $y;
printAritmetic($y, $x, $res, "*");

$res = $x / $y; 					// interesting, result is a float
printAritmetic($x, $y, $res, "/");

$res = $x % $y;
printAritmetic($x, $y, $res, "%");

$res = $x ** $y;					// new in php 5.6
printAritmetic($x, $y, $res, "**"); 
?>