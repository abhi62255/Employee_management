<?php
	session_start();
	$username=$_POST['uname'];
	$password=$_POST['password'];
	error_reporting(E_ALL ^ E_DEPRECATED);
	if(isset($_POST['submit']))
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$result=mysql_query("select * from login_details where username='$username' && password='$password'");
		if(mysql_num_rows($result)==1)
		{	
			$_SESSION['username']=$username;
			if($_SESSION['username']=='Manager' || $_SESSION['username']=='manager' || $_SESSION['username']=='tech_lead' || $_SESSION['username']=='Tech_lead')
			header('Location: home.php');
			else
			header('Location: home2.php');
			
		}
		else
		{
			$_SESSION['value']=3;
			header('Location: login.php');
		}
	}