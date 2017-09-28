<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$email=$_SESSION['username'];
	$r=mysql_query("select * from login_details where username='$email'");
	$row=mysql_fetch_array($r);
	echo $row['username'],$row['password'];
	$pass1=$row['password'];
	$pass=$_POST['password'];
	$passwordn=$_POST['passwordn'];
	$passwordc=$_POST['passwordc'];
	if($pass1==$pass)
	{
		if($passwordc==$passwordn)
		{
			$s=mysql_query("update login_details set password='$passwordn' where username='$email'");
			$_SESSION['value']=3;
			header('Location: password.php');
		}
		else 
		{
			$_SESSION['value']=1;
			header('Location: password.php');
		}
	}
	else 
		{
			$_SESSION['value']=2;
			header('Location: password.php');
		}

?>