<?php
	session_start();
	$_SESSION['inc']=0;
	$_SESSION['value']=0;
	$_SESSION['auth']=0;
	if(isset($_SESSION['username']))
	{
?>


<html>
<head>
<title>Untitled Document</title>
</head>

<body>	<p><?php echo "welcome ".$_SESSION['username'];?></p>
		<a href="modify_emp.php">Modify empploy details</a><br />
		<a href="view_emp.php">View employee</a><br />
		<a href="request.php">New requests  of employee</a><br />
		<a href="completed_requests.php">work requests</a><br />
		<a href="leave3.php">Leave requests</a><br />
		<a href="unauthorized_leave.php">Aunauthorized leave</a><br />
		<a href="message_.php">Send Messages</a><br />
		<a href='password.php'>Change Password</a><br />
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