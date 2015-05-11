<?php
require 'util.php';
$file = fopen("foo.txt", "r") or die("unable to open file");
echo fread($file, filesize("foo.txt"));
fclose($file);
echo "<hr>";
$file = fopen("foo.txt", "r") or die("unable to open file");
while(!feof($file)){
	println(fgets($file));
}
fclose($file);
echo "<hr>";

// file ref http://www.w3schools.com/php/php_ref_filesystem.asp
?>