<?php
		session_start();
		function menu2()
		{
			error_reporting(E_ALL ^ E_DEPRECATED);
			$con=mysql_connect('localhost','root','');
			mysql_select_db('employee',$con);
			$email=$_SESSION['username'];
			$r=mysql_query("select * from emp_details where email='$email'");
			$row=mysql_fetch_array($r);
			$_SESSION['emp_id']=$row['emp_id'];
			$_SESSION['join_date']=$row['joining_date'];
			$_SESSION['name']=$row['emp_name'];
		
	?>
	<html>
	<head>
	<title>Untitled Document</title>
	</head>
	
	<body>
		<div style=" height:100px;">
			<div style="margin-left:1120px;"><p><?php echo "Welcome ".$_SESSION['name'];?></p></div>
				<a href='work.php' style=" margin-left: 200px; text-decoration:none; color:#0099FF; font-weight:bold">| Work |</a>
				<a href='leave.php' style=" text-decoration:none; color:#0099FF; font-weight:bold">Request For Leave |</a>
				<a href='leave5.php' style=" text-decoration:none; color:#0099FF; font-weight:bold">Response For Leave |</a>
				<a href='message2.php' style=" text-decoration:none; color:#0099FF; font-weight:bold">Some Important Messages |</a>
				<a href='clander.php' style=" text-decoration:none; color:#0099FF; font-weight:bold">View Calander |</a>
				<a href='password.php' style=" text-decoration:none; color:#0099FF; font-weight:bold">Change Password |</a>
				<a href='logout.php' style=" text-decoration:none; color:#0099FF; font-weight:bold">Logout |</a>
		</div>
	</body>
	</html>
<?php
		}
		menu2();
?>
