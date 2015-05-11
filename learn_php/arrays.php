<?php
include 'util.php';
// indexed array
$cars = array("Avensis", "Fiesta");
println($cars[0]);
println("the family has " . count($cars) . " cars");
echo "the cars are: ";
for($i=0; $i<count($cars); $i++){
	echo $cars[$i];
	if($i < count($cars)-1) echo ", ";
} 
println();

// associative array === map
$ages = array("Jaimie"=>"34", "Judith"=>"33", "Leah"=> "1");
foreach($ages as $name => $age){
	println("$name is $age");
}

// array ref: http://www.w3schools.com/php/php_ref_array.asp
?>