<?php
	session_start();
	$_SESSION["islogin"]=0;
?>
<!DOCTYPE html>
<html>
<head>
<title> Enrollment System</title>
</head>
<body align="center">
<h1>Welcome To Enrollment System</h1>
<h1>Sign Up</h1>
<form action="signup_action.php" method='POST'>
  User name:<br>
  <input type="text" name="username" required>
  <br>
  Password:<br>
  <input type="password" name="password" required>
  <br><br>
  <input type="submit" value="SingUp">
  <a href="index.php" style="border:2px solid" >Log In</a>
</form> 
</body>
</html>