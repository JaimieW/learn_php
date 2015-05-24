<?php
// filter list
echo "<table><tr><th>Name</th><th>ID</th>";
foreach(filter_list() as $id =>$filter) {
	echo "<tr><td>". $filter . "</td><td>" . filter_id($filter) . '</td></tr>';
}
echo "</table><hr>";

// validate string
$str = "<h1>hello world</h1>";
echo "initial str: ".$str;
$filteredStr = filter_var($str, FILTER_SANITIZE_STRING);
echo "sanitized string: " .$filteredStr . "<br>";
$filteredStr = filter_var($str, FILTER_SANITIZE_ENCODED);
echo "santized encoded: ". $filteredStr . "<br>";
$filteredStr = filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo "santized full special chars: ". $filteredStr . "<br>";
$filteredStr = filter_var($str, FILTER_SANITIZE_SPECIAL_CHARS);
echo "santized special chars: ". $filteredStr . "<br>";
$filteredStr = filter_var($str, FILTER_SANITIZE_MAGIC_QUOTES);
echo "santized magic quotes: ". $filteredStr . "<br>";
$filteredStr = filter_var($str, FILTER_SANITIZE_STRIPPED);
echo "santized stripped: ". $filteredStr . "<br>";
echo "<hr>";

// validate integer
function printIsInt($var){
	if(filter_var($var, FILTER_VALIDATE_INT) !== false){
		echo "$var is an integer <br/>";
	} else {
		echo "$var is not an integer <br/>";
	}
}

printIsInt(100);
printIsInt(10.3);
printIsInt('a');
printIsInt(0);

echo "<hr>";

// validate an IP address
function printIsIP($var){
	if(filter_var($var, FILTER_VALIDATE_IP) !== false){
		echo "$var is a valid IP address";
	} else {
		echo "$var is not a valid IP address";
	}
	echo "<br/>";
}

printIsIP("127.0.0.1");
printIsIP("a");
printIsIP("127001");
printIsIP(true);
printIsIP("127.0.0.1.6.6");
printIsIP("127.0.0.1:8080");

echo "<hr>";

// validate email

?>