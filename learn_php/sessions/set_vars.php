<?php
// start the session
session_start(); 		// NB: must be first thing in document
?>
<!DOCTYPE html>
<html>
<body>
<?php 
// set session vars
$_SESSION["foo"] = "bar";
$_SESSION["surprise"] = "cockface";
echo "session vars set";
?>
</body>
</html>