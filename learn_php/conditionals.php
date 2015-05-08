<?php
$t = date("H");

function println($str){
	echo $str . "<br>";
}
if($t < "20"){
	println("surprise");
}

if($t < "12"){
	println( "foo");
} else {
	println( "bar");
}

if($t<"12"){
	println("good morning");
} elseif ($t < "18"){
	println("good afternoon");
} else {
	println("good evening");
}
?>