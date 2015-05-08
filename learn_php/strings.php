<?php
include 'util.php';
$str = "hello world";
println($str);

println("string lenght: " . strlen($str));

println("word count: " . str_word_count($str));

println("string reverse: ". strrev($str));

println("position of \"world\": " .strpos($str, "world")); // the \ char escapes

println("string replace: " .str_replace("world", "cockface", $str));
println("original var ref: ". $str); // interesting that the original var is not modified

// string ref: http://www.w3schools.com/php/php_ref_string.asp

?>