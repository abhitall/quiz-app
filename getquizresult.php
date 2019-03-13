 <?php
session_start();
$email = $_SESSION["email"];
if(isset($email)){
$con = mysqli_connect("localhost","root","","db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (isset($_GET['cn'])){
  $colname = stripslashes($_GET['cn']);
  $colname = mysqli_real_escape_string($con,$colname);
  $query = "SELECT * FROM `users` WHERE email='$email'";
	$result = mysqli_query($con,$query) or die(mysql_error());
}}
if(isset(mysqli_fetch_assoc($result)[$colname])){
	$score = (intval(mysqli_fetch_assoc($result)[$colname]) * 2)/2;
$num = array('zero', 'one', 'two', 'three', 'four', 'five');
echo $num[$score];
}
?>