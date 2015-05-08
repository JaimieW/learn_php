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

$s = date("s");
switch($s%6){
	case 0:
		println("aaa");
		break;
	case 1:
		println("bbb");
		break;
	case 2:
		println("ccc");
		break;
	case 3:
		println("ddd");
		break;
	case 4:
		println("eee");
		break;
	case 5:
		println("fff");
		break;
	default:
		println("wtf?");
		break;
}

?>