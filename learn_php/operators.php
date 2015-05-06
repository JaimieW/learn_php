<?php
$x = 5;
$y = 2;
function printOperation($a, $b, $result, $operator){
	if($result === true) $result = "true";
	else if($result === false) $result = "false";
	echo "$a $operator $b = $result <br>";
}

// arithmetic
echo "<h4>Aritmetic Operators</h4>";

// TODO replace with an array/list etc
$res = $x+$y;
printOperation($x, $y, $res, "+");

$res = $y-$x;
printOperation($y, $x, $res, "-");

$res = $x * $y;
printOperation($y, $x, $res, "*");

$res = $x / $y; 					// interesting, result is a float
printOperation($x, $y, $res, "/");

$res = $x % $y;
printOperation($x, $y, $res, "%");

$res = $x ** $y;					// new in php 5.6
printOperation($x, $y, $res, "**"); 

// comparison
echo "<h4>Comparison Operators</h4>";
$com = 5 == "5";
printOperation(5, "\"5\"",$com, "=="); // interesting, echo boolean true prints "1"


$com = 5 === "5";
printOperation(5, "\"5\"",$com, "==="); // interesting, echo boolean false doesn't print

$com = 5 != "5";
printOperation(5, "\"5\"",$com, "!=");
$com = 5 !== "5";
printOperation(5, "\"5\"",$com, "!==");
$com = 5 <> "5";
printOperation(5, "\"5\"",$com, "<>");
$com = 5 < 2;
printOperation(5, 2, $com, "<");
$com = 5 > 2;
printOperation(5, 2, $com, ">");

?>