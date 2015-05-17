<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php 
// echo session vars
echo "foo is " . $_SESSION["foo"] ."<br/>";
echo "surprise ". $_SESSION["surprise"] . "<br/>";
?>
</body>
</html>