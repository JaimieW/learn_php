<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php 
session_unset();		// removes session vars
session_destroy();		// destroys the session
echo "session destroyed";
?>
</body>
</html>