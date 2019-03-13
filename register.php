<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
	* {box-sizing: 500px}

/* Add padding to containers */
.container {
	
  padding: 16px;
  margin: 60px 200px 50px 0px;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 20%;
  padding: 15px;
  margin:  0px 500px ;
  display: inline-block;
  border: none;a
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 0px 500px ;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
		
	</style>
</head>
<body>
 <?php
 session_start();
if(isset($_SESSION["email"])){
header("Location: project.php");
exit(); }
$con = mysqli_connect("localhost","root","","db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (isset($_REQUEST['email'])){
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['psw']);
  $password = mysqli_real_escape_string($con,$password);
   $query = "INSERT into `users` (email, password) VALUES ('$email', '".md5($password)."')";
        $result = mysqli_query($con,$query);
         if($result){
            header("Location: login.php");
            echo "<div class='info'>
           <h3>Registration successful.</h3>";
        }
    }
    else{
  ?>       
	<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
  <?php
   echo "<div class='info'>
<h3>Registration unsuccessful.</h3>";
}
  ?>    
</body>
</html>