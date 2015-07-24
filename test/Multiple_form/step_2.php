<?php
//lets start the session
session_start();
//lets register them before stioring values

$_SESSION['name']=$_GET['name'];
$_SESSION['email']=$_GET['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="final.php">
<input type="password" name="password" placeholder="password">
<input type="password" name="text" placeholder="age">
<input type="submit" value="Submit">
</form>
</body>
</html>