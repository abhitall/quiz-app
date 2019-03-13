<html>
<title>xss page</title>
<script src="quiz.js"></script>
<body>
<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>
<div>
		<h1>Excercise</h1>
		<div id="score"></div>
		<div id="quiz"></div>
        <button id="submit">Submit</button>
        <div id="results"></div>
	</div>
<script type="text/javascript">
generateQuiz("sqlinjection","sqli_res");
</script>

</body>
</html>
