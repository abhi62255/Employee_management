
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
	echo"<a href='password.php'>Change Password</a><br />";
	$r=mysql_query("select * from emp_details where email='$email'");
	echo"good";
	$row=mysql_fetch_array($r);
	echo $row['emp_id'];
?>