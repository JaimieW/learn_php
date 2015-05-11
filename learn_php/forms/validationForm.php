<!DOCTYPE HTML> 
<html>
<head>
<title>PHP Form validation example</title>
</head>
<body>
<?php
//define vars
$name = $email = $gender = $comment = $website = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$gender = test_input($_POST["gender"]);
	$comment = test_input($_POST["comment"]);
	$website = test_input($_POST["website"]);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return  $data;
}
?>
<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name"/><br/>
	E-mail: <input type="text" name="email"/><br/>
	Website: <input type="text" name="website"/><br/>
	Comment: <textarea name="comment" rows="5", cols="40"></textarea><br/>
	Gender: <input type="radio" name="gender" value="female">Female 
			<input type="radio" name="gender" value="male">Male<br/>
	<input type="submit" name="submit"/>
</form>
<?php
echo "<h2>Input</h2>";
echo "$name <br/>";
echo "$email <br/>";
echo "$website <br/>";
echo "$comment <br/>";
echo "$gender <br/>";
?>
</body>
</html>