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
  $result = stripslashes($_GET['qr']);
  $result = mysqli_real_escape_string($con,$result);
        $query = "UPDATE `users` SET $colname = '$result' WHERE email = '$email'";
        $result = mysqli_query($con,$query);
        if ($result) {
        	echo "success";
        }
        }
    }
?>