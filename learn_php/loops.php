<?php
include 'conditionals.php';
$i = 0;
while($i <= 4){
	print($i);
	if($i <4)
		print(", ");
	$i++;
}
println("");

do{
	echo $i;
	if ($i > 0)
		echo ", ";
	$i--;
} while ($i > 0);
println("");


?>