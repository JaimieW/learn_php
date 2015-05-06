<?php

$str = "hello world";
echo $str;
echo "<br>";

echo "string lenght: " . strlen($str);
echo "<br>";

echo "word count: " . str_word_count($str);
echo "<br>";

echo "string reverse: ". strrev($str);
echo "<br>";

echo "position of \"world\": " .strpos($str, "world"); // the \ char escapes
echo "<br>";

echo "string replace: " .str_replace("world", "cockface", $str);
echo "<br>";
echo "original var ref: ". $str; // interesting that the original var is not modified
echo "<br>";

// string ref: http://www.w3schools.com/php/php_ref_string.asp

?>