<?php
include 'util.php';
// min value
function sayWord($txt = "surprise"){
	println($txt);
}
sayWord("hello");
sayWord();

function fib($n){
	if($n === 1 || $n === 2) return 1;
	else return fib($n-1)+fib($n-2);
}

for($i=1;$i<=20;$i++){
	echo fib($i) . " ";
}
?>