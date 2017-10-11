
<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$_SESSION['value']=0;
	
	echo"welcome ".$_SESSION['username'];
	$email=$_SESSION['username'];
	echo"<a href='logout.php'>logout</a><br />";
	echo"<a href='work.php'>work</a><br />";
	echo"<a href='leave.php'>Request For Leave</a><br />";
	echo"<a href='leave5.php'>Response For Leave</a><br />";
	echo"<a href='message2.php'>Some Important Messages</a><br />";
	echo"<a href='clander.php'>View Calander</a><br />";
	echo"<a href='password.php'>Change Password</a><br />";
	$r=mysql_query("select * from emp_details where email='$email'");
	echo"good";
	$row=mysql_fetch_array($r);
	$_SESSION['emp_id']=$row['emp_id'];
	$_SESSION['join_date']=$row['joining_date'];
	echo $_SESSION['join_date'];
?>