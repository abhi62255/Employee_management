<html>
<head>
<title>Untitled Document</title>
</head>

<body>
	<form action="validation.php" method="post">
		<input type="text" placeholder="Username/Email" name="uname" />
		<input type="password" placeholder="password" name="password" />
		<input type="submit" name="submit" value="login" />
	</form>
	<a href="signup.html">need an account</a>
</body>
</html>
<?php
	session_start();
	if($_SESSION['value']==1)
		echo "<br />Sign Up Successfully. Wait For Verification";
	if($_SESSION['value']==2)
		echo "<br />Your Details Are Not Correct. Try Again";
	if($_SESSION['value']==3)
		echo "<br />Your Login Credentials Are Wrong";
	$_SESSION['value']=0;



?>