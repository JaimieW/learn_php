<?php
$txt = "Hello world";
$x = 5;
$y = 10.5;

echo $txt . "<br >";
echo $x . " + " . $y . " = " . $x+$y . "<br>";
echo "$x + $y = ($x+$y)";
		
function localVarFunc(){
	$x = 7;
	echo "<p>Variable x inside function is: $x</p>";
}
localVarFunc();

function globalVarFunc(){
	global $x, $y;
	$y = $x + $y;
}
globalVarFunc();
echo $y . "<br >";

$numOfCalls = 0;

function increment(){
	global $numOfCalls;
	static $inc = 0;
	$inc++;
	$numOfCalls = $inc;
}
increment();
increment();
increment();
increment();

echo "increment function called $numOfCalls times"

?>