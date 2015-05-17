<?php
echo "<table><tr><th>Name</th><th>ID</th>";
foreach(filter_list() as $id =>$filter) {
	echo "<tr><td>". $filter . "</td><td>" . filter_id($filter) . '</td></tr>';
}
echo "</table><hr>";

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
?>