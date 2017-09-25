<?php
	session_start();
	if(isset($_SESSION['username']))
	{



?>


<html>
<head>
<title>Untitled Document</title>
</head>

<body>	<p><?php echo "welcome ".$_SESSION['username'];?></p>
		<a href="modify_emp.php">Modify empploy details</a><br />
		<a href="view_emp.html">View employee</a><br />
		<a href="request.php">New requests  of employee</a><br />
		<a href="completed_requests.php">work requests</a><br />
		<a href="logout.php">logout</a><br />
</body>
</html>
<?php
	}
	else
	{
		header('Location: login.html');
	}

?>