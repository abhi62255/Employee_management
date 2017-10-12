<?php
	session_start();
	function menu()
	{
		$_SESSION['inc']=0;
		$_SESSION['auth']=0;
		if(isset($_SESSION['username']))
		{
	?>
	
	
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	
	<body>	
		<div style=" height:100px;">
				<div style="margin-left:1136px;"><p><?php echo "Welcome ".$_SESSION['username'];?></p></div>
				<a href="modify_emp.php" style="margin-left: 27px; text-decoration:none; color:#0099FF; font-weight:bold">| Modify employee details |</a>
				<a href="view_emp.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">View employee |</a>
				<a href="request.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">New requests  of employee |</a>
				<a href="completed_requests.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">work requests |</a>
				<a href="leave3.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">Leave requests |</a>
				<a href="unauthorized_leave.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">Aunauthorized leave |</a>
				<a href="message_.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">Send Messages |</a>
				<a href="password.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">Change Password |</a>
				<a href="logout.php" style=" text-decoration:none; color:#0099FF; font-weight:bold">Logout |</a>
		</div>
	</body>
	</html>
	<?php
		}
		else
		{
			header('Location: login.html');
		}
	}	
	menu();
	?>