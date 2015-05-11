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

echo "<br><br><br<>";




// sorting arrays
$nums= array(1,4,3,8,6,9,0,2);
print_r($nums);				println();

sort($nums);
print_r($nums);				println();

rsort($nums);
print_r($nums);				println();

echo "<br><br>";

print_r($ages);				println();

asort($ages);
print_r($ages);				println();

arsort($ages);
print_r($ages);				println();

ksort($ages);
print_r($ages);				println();

krsort($ages);
print_r($ages);				println();



?>