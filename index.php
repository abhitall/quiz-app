<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Index</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["email"])){
header("Location: project.php");
exit(); }
?>
<h1>WEB VULNERABILITIES</h1>
<p>please choose an option</p>
<a href="register.php">Regsiter</a>
<a href="login.php">Login</a>
</body>
</html>